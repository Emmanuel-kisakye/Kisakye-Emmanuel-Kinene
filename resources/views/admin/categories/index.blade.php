@extends('layouts.admin')

@section('title', 'Categories — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div>
                    <h1 class="text-xl font-semibold">Categories</h1>
                    <p class="text-sm text-slate-500 mt-1">The options students see on the form, grouped under each department.</p>
                </div>
                <a href="{{ route('requests.create') }}" class="inline-flex items-center px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>Add category</a>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Categories table -->
            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-50">
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Name</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Department</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Open tickets</th>
                            <th class="py-3 px-4 text-center text-sm font-semibold text-slate-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm">Projectors &amp; AV</td><td class="py-3 px-4 text-sm text-slate-500">ICT Support</td><td class="py-3 px-4 text-sm">3</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm">Plumbing</td><td class="py-3 px-4 text-sm text-slate-500">Estates</td><td class="py-3 px-4 text-sm">5</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm">Lecture hall booking</td><td class="py-3 px-4 text-sm text-slate-500">Halls</td><td class="py-3 px-4 text-sm">2</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="hover:bg-slate-50"><td class="py-3 px-4 text-sm">Appointment</td><td class="py-3 px-4 text-sm text-slate-500">Administration</td><td class="py-3 px-4 text-sm">1</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                    </tbody>
                </table>
            </div>
            <!-- End: Categories table -->
@endsection
