@extends('layouts.admin')

@section('title', 'Users — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div>
                    <h1 class="text-xl font-semibold">People</h1>
                    <p class="text-sm text-slate-500 mt-1">Student accounts, department staff, and helpdesk admins.</p>
                </div>
                <a href="{{ route('requests.create') }}" class="inline-flex items-center px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>Add person</a>
            </div>
            <!-- End: Page heading -->

            <!-- Start: User filters -->
            <form action="{{ route('home') }}" method="get" class="bg-white border border-slate-200 rounded-xl p-4 mb-6 grid grid-cols-1 sm:grid-cols-3 gap-3 shadow-sm">
                <input type="search" name="q" class="input-field" placeholder="Search name or email">
                <select name="role" class="input-field"><option>All roles</option><option>Student</option><option>Staff</option><option>Admin</option></select>
                <button type="submit" class="px-4 py-2.5 bg-[#2563eb] rounded-xl text-sm font-medium text-white hover:bg-[#1d4ed8]">Filter</button>
            </form>
            <!-- End: User filters -->

            <!-- Start: Users table -->
            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[640px]">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50">
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Name</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Email</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Role</th>
                                <th class="py-3 px-4 text-center text-sm font-semibold text-slate-500">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-slate-200 hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm">Aisha Namuli</td>
                                <td class="py-3 px-4 text-sm text-slate-500">aisha.namuli@campus.ac.ug</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-[#2563eb]">Student</span></td>
                                <td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td>
                            </tr>
                            <tr class="border-b border-slate-200 hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm">Daniel Okello</td>
                                <td class="py-3 px-4 text-sm text-slate-500">daniel.okello@campus.ac.ug</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-amber-50 text-[#d97706]">Staff</span></td>
                                <td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm">Joy Tiko</td>
                                <td class="py-3 px-4 text-sm text-slate-500">joy.tiko@campus.ac.ug</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-emerald-50 text-emerald-700">Admin</span></td>
                                <td class="py-3 px-4 text-center"><a href="{{ route('requests.edit', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: Users table -->
@endsection
