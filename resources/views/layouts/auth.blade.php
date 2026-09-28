<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head-portal')
<body class="bg-white text-slate-900 font-sans antialiased min-h-screen flex flex-col">
    @yield('content')

    @include('layouts.partials.footer-compact')

    <script>lucide.createIcons();</script>
    @stack('scripts')
</body>
</html>
