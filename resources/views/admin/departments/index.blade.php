@extends('layouts.admin')

@section('title', 'Departments — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div>
                    <h1 class="text-xl font-semibold">Departments</h1>
                    <p class="text-sm text-slate-500 mt-1">Departments that receive requests. Add one if a new unit starts using the helpdesk.</p>
                </div>
                <a href="{{ route('requests.create') }}" class="inline-flex items-center px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>Add department</a>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Departments table -->
            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-50">
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Name</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Description</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Categories</th>
                            <th class="py-3 px-4 text-center text-sm font-semibold text-slate-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Estates</td><td class="py-3 px-4 text-sm text-slate-500">Leaks, lights, and furniture</td><td class="py-3 px-4 text-sm">4</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">ICT Support</td><td class="py-3 px-4 text-sm text-slate-500">Network, AV, accounts, hardware</td><td class="py-3 px-4 text-sm">4</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Halls</td><td class="py-3 px-4 text-sm text-slate-500">Lecture halls, labs, event spaces</td><td class="py-3 px-4 text-sm">3</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Hostels</td><td class="py-3 px-4 text-sm text-slate-500">Residential blocks and sanitation</td><td class="py-3 px-4 text-sm">3</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Administration</td><td class="py-3 px-4 text-sm text-slate-500">Appointments and document requests</td><td class="py-3 px-4 text-sm">2</td><td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                    </tbody>
                </table>
            </div>
            <!-- End: Departments table -->
@endsection
