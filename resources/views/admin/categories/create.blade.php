@extends('layouts.admin')

@section('title', 'New category — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="max-w-2xl">
                <h1 class="text-xl font-semibold mb-2">Add category</h1>
                <p class="text-sm text-slate-500 mb-6">Students will see this category when they open a request.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Form -->
            <form action="{{ route('home') }}" method="get" class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm max-w-2xl">
                <div class="p-6 space-y-5">
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Department</label>
                    <select name="department" class="input-field">
                        <option>Estates</option>
                        <option>ICT Support</option>
                        <option>Halls</option>
                        <option>Hostels</option>
                        <option>Administration</option>
                    </select></div>
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Name</label><input class="input-field" name="name" placeholder="e.g. Carpentry"></div>
                </div>
                <div class="px-4 py-4 bg-white border-t border-slate-200 flex justify-between">
                    <a href="{{ route('home') }}" class="px-4 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 hover:bg-slate-100">Cancel</a>
                    <button class="px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]">Save category</button>
                </div>
            </form>
            <!-- End: Form -->
@endsection
