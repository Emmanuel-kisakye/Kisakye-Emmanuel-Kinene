<?php

$viewsRoot = dirname(__DIR__).'/resources/views';

function layoutFor(string $relativePath): ?string
{
    $base = basename($relativePath);

    if (str_starts_with($relativePath, 'layouts/')) {
        return null;
    }

    if (in_array($base, ['login.blade.php', 'register.blade.php', 'forgot-password.blade.php', 'reset-password.blade.php'], true)) {
        return 'auth';
    }

    if (str_starts_with($relativePath, 'admin/')) {
        return 'admin';
    }

    if (str_starts_with($relativePath, 'staff/')) {
        return 'staff';
    }

    if (in_array($base, ['index.blade.php', 'contact.blade.php', 'contact-list.blade.php'], true)) {
        return 'public';
    }

    return 'app';
}

function extractTitle(string $html): string
{
    if (preg_match('/<title>(.*?)<\/title>/s', $html, $matches)) {
        return trim(html_entity_decode($matches[1]));
    }

    return 'Campus Service Portal';
}

function extractMetaDescription(string $html): ?string
{
    if (preg_match('/<meta name="description" content="(.*?)"/s', $html, $matches)) {
        return trim(html_entity_decode($matches[1]));
    }

    return null;
}

function extractContent(string $html, string $layout): string
{
    if ($layout === 'public' && preg_match('/<!-- End: Header -->\s*(.*?)\s*<!-- Start: Footer -->/s', $html, $matches)) {
        return trim($matches[1]);
    }

    if ($layout === 'auth' && preg_match('/<body[^>]*>\s*(.*?)\s*<!-- Start: Footer -->/s', $html, $matches)) {
        return trim($matches[1]);
    }

    if (in_array($layout, ['app', 'admin', 'staff'], true) && preg_match('/<main class="flex-1[^"]*">\s*(.*?)\s*<\/main>/s', $html, $matches)) {
        return trim($matches[1]);
    }

    return '';
}

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($viewsRoot, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if ($file->getExtension() !== 'php' || ! str_ends_with($file->getFilename(), '.blade.php')) {
        continue;
    }

    $relative = str_replace('\\', '/', substr($file->getPathname(), strlen($viewsRoot) + 1));
    $layout = layoutFor($relative);

    if ($layout === null) {
        continue;
    }

    $html = file_get_contents($file->getPathname());
    if (str_contains($html, "@extends('layouts.")) {
        continue;
    }

    $title = extractTitle($html);
    $meta = extractMetaDescription($html);
    $content = extractContent($html, $layout);

    if ($content === '') {
        echo "Skipped (no content): {$relative}\n";
        continue;
    }

    $output = "@extends('layouts.{$layout}')\n\n";
    $output .= "@section('title', ".var_export($title, true).")\n";

    if ($layout === 'public' && $meta !== null) {
        $output .= "@section('meta_description', ".var_export($meta, true).")\n";
    }

    $output .= "\n@section('content')\n{$content}\n@endsection\n";

    file_put_contents($file->getPathname(), $output);
    echo "Wrapped: {$relative} -> layouts.{$layout}\n";
}

echo "Done.\n";
