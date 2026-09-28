@php
    $brandRoute = $brandRoute ?? route('dashboard');
    $userInitials = $userInitials ?? 'AN';
    $userName = $userName ?? 'Aisha Namuli';
    $userRole = $userRole ?? 'Student';
    $userEmail = $userEmail ?? 'aisha.namuli@campus.ac.ug';
@endphp
<!-- Start: Header -->
<header class="fixed top-0 z-50 w-full bg-white border-b border-slate-200">
    <div class="px-2 py-2 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <label for="sidebar-toggle" class="inline-flex items-center p-2 text-slate-500 rounded-lg sm:hidden hover:bg-slate-100 cursor-pointer">
                    <span class="sr-only">Open sidebar</span>
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </label>
                <a href="{{ $brandRoute }}" class="flex items-center ms-2 md:me-8">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="Campus Service Portal" class="h-10 w-10 me-3">
                    <div class="flex flex-col">
                        <span class="font-semibold text-slate-900 text-base">Campus Service Portal</span>
                        <span class="text-xs text-slate-500">Campus helpdesk</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center space-x-3">
                <details class="menu-dropdown relative">
                    <summary class="p-2 text-slate-500 rounded-lg hover:text-slate-900 hover:bg-slate-100 cursor-pointer relative list-none">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-[#d97706] rounded-full"></span>
                    </summary>
                    <div class="absolute right-0 mt-2 w-80 bg-white border border-slate-200 rounded-lg shadow-lg z-50">
                        <div class="px-4 py-2 border-b border-slate-200 flex justify-between items-center bg-slate-50">
                            <p class="text-sm font-medium">Notifications</p>
                            <a href="{{ route('notifications') }}" class="text-xs text-[#2563eb]">View all</a>
                        </div>
                        <a href="{{ route('requests.index') }}" class="block px-4 py-3 hover:bg-slate-50 border-b border-slate-200">
                            <p class="text-sm">Status updated to <span class="text-[#d97706]">In progress</span></p>
                            <p class="text-xs text-slate-500 mt-1">Check your latest tickets</p>
                        </a>
                    </div>
                </details>
                <details class="menu-dropdown relative">
                    <summary class="flex items-center gap-2 bg-slate-50 rounded-lg p-1 text-sm border border-slate-200 hover:bg-slate-100 cursor-pointer list-none">
                        <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-[#2563eb] border border-blue-100 text-xs font-semibold">{{ $userInitials }}</div>
                        <div class="hidden md:block text-left mr-1">
                            <div class="text-xs font-medium text-slate-900">{{ $userName }}</div>
                            <div class="text-[10px] text-slate-500">{{ $userRole }}</div>
                        </div>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                    </summary>
                    <div class="absolute right-0 mt-2 w-56 bg-white border border-slate-200 rounded-lg shadow-lg z-50">
                        <div class="px-4 py-3 border-b border-slate-200 bg-slate-50">
                            <p class="text-sm font-medium">{{ $userName }}</p>
                            <p class="text-xs text-slate-500 truncate">{{ $userEmail }}</p>
                        </div>
                        <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-sm text-slate-600 hover:bg-slate-50"><i data-lucide="user" class="w-4 h-4 mr-2"></i>My Profile</a>
                        <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-sm text-slate-600 hover:bg-slate-50"><i data-lucide="settings" class="w-4 h-4 mr-2"></i>Account Settings</a>
                        <a href="{{ route('login') }}" class="flex items-center px-4 py-2 text-sm text-[#d97706] hover:bg-slate-50 border-t border-slate-200"><i data-lucide="log-out" class="w-4 h-4 mr-2"></i>Sign out</a>
                    </div>
                </details>
            </div>
        </div>
    </div>
</header>
<!-- End: Header -->
