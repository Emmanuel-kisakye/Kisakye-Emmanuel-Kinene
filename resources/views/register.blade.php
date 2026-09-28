@extends('layouts.auth')

@section('title', 'Create account — Campus Service Portal')

@section('content')
<!-- Start: Register -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.svg') }}" alt="Campus Service Portal" class="h-16 w-16"></a>
            </div>
            <!-- End: Brand -->

            <!-- Start: Register card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <div class="mb-6">
                    <h1 class="text-xl font-bold">Create your account</h1>
                    <p class="mt-1 text-sm text-slate-500">Students and lecturers can sign up here. If you work in a department such as Estates, ICT, or Halls, ask the helpdesk admin to add you.</p>
                    <p class="mt-2 text-xs text-[#d97706]">All fields are required.</p>
                </div>

                <!-- Start: Register form -->
                <form action="{{ route('dashboard') }}" method="get" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-600 mb-2">Full name <span class="text-[#d97706]">*</span></label>
                        <input type="text" id="name" name="name" required minlength="2" autofocus placeholder="Aisha Namuli" class="input-field">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">Campus email <span class="text-[#d97706]">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="aisha.namuli@campus.ac.ug" class="input-field">
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-slate-600 mb-2">I am a <span class="text-[#d97706]">*</span></label>
                        <select id="role" name="role" required class="input-field">
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-600 mb-2">Password <span class="text-[#d97706]">*</span></label>
                        <input type="password" id="password" name="password" required minlength="8" class="input-field">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-600 mb-2">Confirm password <span class="text-[#d97706]">*</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required minlength="8" class="input-field">
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Create account</button>
                </form>
                <!-- End: Register form -->

                <p class="mt-6 text-center text-sm text-slate-500">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-[#2563eb] hover:text-[#1d4ed8]">Sign in</a>
                </p>
            </div>
            <!-- End: Register card -->
        </div>
    </div>
    <!-- End: Register -->
@endsection
