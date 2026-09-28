<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head-portal')
<body class="bg-white text-slate-900 font-sans antialiased min-h-screen">
    @include('layouts.partials.sidebar-toggle')
    @include('layouts.partials.header-app', [
        'brandRoute' => route('staff.dashboard'),
        'userInitials' => 'DO',
        'userName' => 'Daniel Okello',
        'userRole' => 'Estates staff',
        'userEmail' => 'daniel.okello@campus.ac.ug',
    ])
    @include('layouts.partials.sidebar-staff')

    <div class="pt-16 sm:pl-64 min-h-screen flex flex-col">
        <main class="flex-1 pb-8 px-4 sm:px-8 lg:px-10 pt-6">
            @yield('content')
        </main>
        @include('layouts.partials.footer-compact')
    </div>

    <script>lucide.createIcons();</script>
    @stack('scripts')
</body>
</html>
