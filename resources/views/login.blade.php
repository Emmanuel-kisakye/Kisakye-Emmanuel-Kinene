@extends('layouts.auth')

@section('title', 'Sign in — Campus Service Portal')

@section('content')
<!-- Start: Sign in -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="{{ route('home') }}" class="inline-flex flex-col items-center gap-3">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="Campus Service Portal" class="h-16 w-16">
                    <span class="text-sm font-semibold text-slate-900">Campus Service Portal</span>
                </a>
            </div>
            <!-- End: Brand -->

            <!-- Start: Sign in card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <div class="mb-6">
                    <h1 class="text-xl font-bold text-slate-900">Sign in</h1>
                    <p class="mt-1 text-sm text-slate-500">Use your campus email to open a ticket or check one you already sent.</p>
                </div>

                <!-- Start: Sign in form -->
                <form action="{{ route('dashboard') }}" method="get" class="space-y-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">Campus email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i data-lucide="mail" class="h-5 w-5"></i>
                            </div>
                            <input type="email" id="email" name="email" required autofocus placeholder="you@campus.ac.ug"
                                class="block w-full pl-10 pr-3 py-3 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#2563eb] focus:ring-1 focus:ring-[#2563eb]">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-600 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i data-lucide="lock" class="h-5 w-5"></i>
                            </div>
                            <input type="password" id="password" name="password" required placeholder="••••••••"
                                class="block w-full pl-10 pr-3 py-3 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#2563eb] focus:ring-1 focus:ring-[#2563eb]">
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-[#2563eb] focus:ring-[#2563eb]">
                            <span class="text-sm text-slate-500">Keep me signed in</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-[#2563eb] hover:text-[#1d4ed8]">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Sign in</button>
                </form>
                <!-- End: Sign in form -->

                <!-- Start: Demo accounts -->
                <div class="mt-6 pt-6 border-t border-slate-200">
                    <p class="text-xs text-slate-500 mb-3 text-center">Try a demo account</p>
                    <div class="grid grid-cols-3 gap-2">
                        <a href="{{ route('dashboard') }}" class="text-center text-xs px-2 py-2 rounded-lg border border-slate-200 bg-white hover:border-[#2563eb]">Student</a>
                        <a href="{{ route('staff.dashboard') }}" class="text-center text-xs px-2 py-2 rounded-lg border border-slate-200 bg-white hover:border-[#d97706]">Staff</a>
                        <a href="{{ route('admin.dashboard') }}" class="text-center text-xs px-2 py-2 rounded-lg border border-slate-200 bg-white hover:border-[#2563eb]">Admin</a>
                    </div>
                </div>
                <!-- End: Demo accounts -->

                <p class="mt-6 text-center text-sm text-slate-500">
                    New here?
                    <a href="{{ route('register') }}" class="text-[#2563eb] hover:text-[#1d4ed8]">Create an account</a>
                </p>
            </div>
            <!-- End: Sign in card -->
        </div>
    </div>
    <!-- End: Sign in -->
@endsection
