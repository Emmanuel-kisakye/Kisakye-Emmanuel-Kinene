@extends('layouts.app')

@section('title', 'My account — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="max-w-2xl">
                <h1 class="text-xl font-semibold mb-2">Your account</h1>
                <p class="text-sm text-slate-500 mb-6">Change your name or password. Your role is set by the helpdesk admin.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Profile form -->
            <form action="{{ route('profile') }}" method="get" class="bg-white border border-slate-200 rounded-xl p-6 space-y-5 shadow-sm max-w-2xl">
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Full name</label>
                    <input class="input-field" name="name" value="Aisha Namuli">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Email</label>
                    <input type="email" class="input-field" name="email" value="aisha.namuli@campus.ac.ug">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Role</label>
                    <input class="input-field bg-slate-50" value="Student" disabled>
                    <p class="text-xs text-slate-500 mt-2">Role changes are performed by an administrator.</p>
                </div>
                <hr class="border-slate-200">
                <p class="text-sm font-medium text-slate-600">Change password (optional)</p>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Current password</label>
                    <input type="password" name="current_password" class="input-field">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">New password</label>
                    <input type="password" name="password" class="input-field">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Confirm new password</label>
                    <input type="password" name="password_confirmation" class="input-field">
                </div>
                <button type="submit" class="px-5 py-2.5 bg-[#2563eb] hover:bg-[#1d4ed8] rounded-lg text-sm font-medium text-white">Save changes</button>
            </form>
            <!-- End: Profile form -->
@endsection
