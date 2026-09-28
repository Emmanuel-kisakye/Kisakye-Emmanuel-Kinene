@extends('layouts.auth')

@section('title', 'Forgot password — Campus Service Portal')

@section('content')
<!-- Start: Forgot password -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.svg') }}" alt="Campus Service Portal" class="h-16 w-16"></a>
            </div>
            <!-- End: Brand -->

            <!-- Start: Reset request card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <h1 class="text-xl font-bold mb-2">Forgot your password?</h1>
                <p class="text-sm text-slate-500 mb-6">Enter the campus email on your account. We will send a link so you can choose a new password.</p>
                <!-- Start: Email form -->
                <form action="{{ route('password.reset') }}" method="get" class="space-y-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">Campus email</label>
                        <input type="email" id="email" name="email" required placeholder="you@campus.ac.ug" class="input-field">
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Send reset link</button>
                </form>
                <!-- End: Email form -->
                <p class="mt-6 text-center text-sm text-slate-500"><a href="{{ route('login') }}" class="text-[#2563eb] hover:text-[#1d4ed8]">Back to sign in</a></p>
            </div>
            <!-- End: Reset request card -->
        </div>
    </div>
    <!-- End: Forgot password -->
@endsection
