<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head-public')
<body class="bg-white text-slate-900 font-sans antialiased">
    @include('layouts.partials.header-public')

    @yield('content')

    @include('layouts.partials.footer-public')

    <script>lucide.createIcons();</script>
    @stack('scripts')
</body>
</html>
