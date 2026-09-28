@extends('layouts.admin')

@section('title', 'New user — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="max-w-2xl">
                <h1 class="text-xl font-semibold mb-2">Add person</h1>
                <p class="text-sm text-slate-500 mb-6">Add a department staff member or another admin. Students sign up themselves.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Form -->
            <form action="{{ route('home') }}" method="get" class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm max-w-2xl">
                <div class="p-6 space-y-5">
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Full name</label><input class="input-field" name="name" placeholder="Full name"></div>
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Email</label><input type="email" class="input-field" name="email" placeholder="name@campus.ac.ug"></div>
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Role</label>
                    <select name="role" class="input-field"><option>Student</option><option selected>Staff</option><option>Admin</option></select></div>
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Temporary password</label><input type="password" class="input-field" name="password" placeholder="Minimum 8 characters"></div>
                </div>
                <div class="px-4 py-4 bg-white border-t border-slate-200 flex justify-between">
                    <a href="{{ route('home') }}" class="px-4 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 hover:bg-slate-100">Cancel</a>
                    <button class="px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]">Save person</button>
                </div>
            </form>
            <!-- End: Form -->
@endsection
