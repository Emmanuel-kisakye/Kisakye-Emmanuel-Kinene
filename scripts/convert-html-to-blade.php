<?php

$viewsPath = dirname(__DIR__).'/resources/views';

$routeReplacements = [
    'admin/users/edit.html' => "{{ route('admin.users.edit', ['user' => 1]) }}",
    'admin/users/create.html' => "{{ route('admin.users.create') }}",
    'admin/users/index.html' => "{{ route('admin.users.index') }}",
    'admin/departments/edit.html' => "{{ route('admin.departments.edit', ['department' => 1]) }}",
    'admin/departments/create.html' => "{{ route('admin.departments.create') }}",
    'admin/departments/index.html' => "{{ route('admin.departments.index') }}",
    'admin/categories/edit.html' => "{{ route('admin.categories.edit', ['category' => 1]) }}",
    'admin/categories/create.html' => "{{ route('admin.categories.create') }}",
    'admin/categories/index.html' => "{{ route('admin.categories.index') }}",
    'admin/dashboard.html' => "{{ route('admin.dashboard') }}",
    'staff/dashboard.html' => "{{ route('staff.dashboard') }}",
    'requests/show.html' => "{{ route('requests.show', ['serviceRequest' => 1]) }}",
    'requests/edit.html' => "{{ route('requests.edit', ['serviceRequest' => 1]) }}",
    'requests/create.html' => "{{ route('requests.create') }}",
    'requests/index.html' => "{{ route('requests.index') }}",
    'reset-password.html' => "{{ route('password.reset') }}",
    'forgot-password.html' => "{{ route('password.request') }}",
    'notifications.html' => "{{ route('notifications') }}",
    'contact-list.html' => "{{ route('contact.list') }}",
    'contact.html' => "{{ route('contact') }}",
    'register.html' => "{{ route('register') }}",
    'login.html' => "{{ route('login') }}",
    'profile.html' => "{{ route('profile') }}",
    'dashboard.html' => "{{ route('dashboard') }}",
    'index.html' => "{{ route('home') }}",
    'show.html' => "{{ route('requests.show', ['serviceRequest' => 1]) }}",
    'create.html' => "{{ route('requests.create') }}",
    'edit.html' => "{{ route('requests.edit', ['serviceRequest' => 1]) }}",
];

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($viewsPath, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if ($file->getExtension() !== 'html') {
        continue;
    }

    $content = file_get_contents($file->getPathname());

    $content = preg_replace(
        '/(href|src)="(\.\.\/)*(assets\/[^"]+)"/',
        '$1="{{ asset(\'$3\') }}"',
        $content
    );

    uksort($routeReplacements, fn (string $a, string $b): int => strlen($b) <=> strlen($a));

    foreach ($routeReplacements as $htmlPath => $bladeRoute) {
        $patterns = [
            'href="'.$htmlPath.'"',
            "href='".$htmlPath."'",
            'href="../'.$htmlPath.'"',
            'href="../../'.$htmlPath.'"',
            'action="'.$htmlPath.'"',
            'action="../'.$htmlPath.'"',
        ];

        foreach ($patterns as $pattern) {
            $replacement = str_starts_with($pattern, 'action=')
                ? 'action="'.$bladeRoute.'"'
                : 'href="'.$bladeRoute.'"';
            $content = str_replace($pattern, $replacement, $content);
        }
    }

    $content = str_replace(
        '<form action="{{ route(\'requests.show\', [\'serviceRequest\' => 1]) }}" method="get"',
        '<form action="{{ route(\'requests.store\') }}" method="post"',
        $content
    );

    if (str_contains($file->getPathname(), 'requests/create')) {
        $content = str_replace(
            '<form action="{{ route(\'requests.store\') }}" method="post"',
            "@csrf\n            <form action=\"{{ route('requests.store') }}\" method=\"post\" enctype=\"multipart/form-data\"",
            $content
        );
        $content = preg_replace(
            '/@csrf\s+<form action="\{\{ route\(\'requests\.store\'\) \}\}" method="post"/',
            '<form action="{{ route(\'requests.store\') }}" method="post" enctype="multipart/form-data"',
            $content,
            1
        );
        if (! str_contains($content, '@csrf')) {
            $content = str_replace(
                '<form action="{{ route(\'requests.store\') }}" method="post"',
                '<form action="{{ route(\'requests.store\') }}" method="post" enctype="multipart/form-data"',
                $content
            );
            $content = str_replace(
                '<form action="{{ route(\'requests.store\') }}" method="post" enctype="multipart/form-data"',
                "@csrf\n            <form action=\"{{ route('requests.store') }}\" method=\"post\" enctype=\"multipart/form-data\"",
                $content
            );
        }
    }

    $content = str_replace('assets/img/logo.png', 'assets/img/logo.svg', $content);

    $bladePath = preg_replace('/\.html$/', '.blade.php', $file->getPathname());
    file_put_contents($bladePath, $content);
    unlink($file->getPathname());
}

echo "Converted HTML views to Blade.\n";
