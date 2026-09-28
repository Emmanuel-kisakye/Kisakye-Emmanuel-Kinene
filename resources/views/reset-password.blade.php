@extends('layouts.auth')

@section('title', 'Choose a new password — Campus Service Portal')

@section('content')
<!-- Start: New password -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.svg') }}" alt="Campus Service Portal" class="h-16 w-16"></a>
            </div>
            <!-- End: Brand -->

            <!-- Start: New password card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <h1 class="text-xl font-bold mb-2">Choose a new password</h1>
                <p class="text-sm text-slate-500 mb-6">Use at least 8 characters. You will sign in again after you save it.</p>
                <!-- Start: New password form -->
                <form action="{{ route('login') }}" method="get" class="space-y-5">
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-600 mb-2">New password</label>
                        <input type="password" id="password" name="password" required minlength="8" class="input-field">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-600 mb-2">Confirm new password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required minlength="8" class="input-field">
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Update password</button>
                </form>
                <!-- End: New password form -->
            </div>
            <!-- End: New password card -->
        </div>
    </div>
    <!-- End: New password -->
@endsection
