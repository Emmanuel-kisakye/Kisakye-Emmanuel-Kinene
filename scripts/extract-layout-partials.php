<?php

$views = dirname(__DIR__).'/resources/views';

function between(string $html, string $start, string $end): string
{
    $pos = strpos($html, $start);
    if ($pos === false) {
        return '';
    }
    $pos += strlen($start);
    $endPos = strpos($html, $end, $pos);
    if ($endPos === false) {
        return '';
    }

    return trim(substr($html, $pos, $endPos - $pos));
}

$dashboard = file_get_contents($views.'/dashboard.blade.php');
$admin = file_get_contents($views.'/admin/dashboard.blade.php');
$staff = file_get_contents($views.'/staff/dashboard.blade.php');

$studentSidebar = between($dashboard, '<!-- Start: Sidebar -->', '<!-- End: Sidebar -->');
$adminSidebar = between($admin, '<!-- Start: Sidebar -->', '<!-- End: Sidebar -->');
$staffSidebar = between($staff, '<!-- Start: Sidebar -->', '<!-- End: Sidebar -->');

file_put_contents($views.'/layouts/partials/sidebar-student.blade.php', $studentSidebar."\n");
file_put_contents($views.'/layouts/partials/sidebar-admin.blade.php', $adminSidebar."\n");
file_put_contents($views.'/layouts/partials/sidebar-staff.blade.php', $staffSidebar."\n");

echo "Sidebars extracted.\n";
