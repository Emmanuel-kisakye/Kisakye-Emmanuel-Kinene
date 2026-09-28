@extends('layouts.app')

@section('title', 'Dashboard — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-slate-900">Good afternoon, Aisha</h1>
                <p class="text-slate-500 mt-1">Two of your tickets are still open. ICT has already picked up the projector in Hall B2.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Stats cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center"><i data-lucide="clipboard-list" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <div><p class="text-2xl font-bold">6</p><p class="text-sm text-slate-500">My tickets</p></div>
                    </div>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-amber-50 flex items-center justify-center"><i data-lucide="loader" class="w-5 h-5 text-[#d97706]"></i></div>
                        <div><p class="text-2xl font-bold">2</p><p class="text-sm text-slate-500">In progress</p></div>
                    </div>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 flex items-center justify-center"><i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600"></i></div>
                        <div><p class="text-2xl font-bold">3</p><p class="text-sm text-slate-500">Resolved</p></div>
                    </div>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center"><i data-lucide="bell" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <div><p class="text-2xl font-bold">4</p><p class="text-sm text-slate-500">Unread alerts</p></div>
                    </div>
                </div>
            </div>
            <!-- End: Stats cards -->

            <!-- Start: Your latest tickets -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 mb-4">
                <h2 class="text-lg font-semibold">Your latest tickets</h2>
                <a href="{{ route('requests.create') }}" class="inline-flex items-center px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>New ticket</a>
            </div>
            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50">
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Ticket</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Department</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Status</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Updated</th>
                                <th class="py-3 px-4 text-center text-sm font-semibold text-slate-500">Open</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-slate-200 hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm">Broken projector — Lecture Hall B2</td>
                                <td class="py-3 px-4 text-sm text-slate-500">ICT Support</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-amber-50 text-[#d97706]">In progress</span></td>
                                <td class="py-3 px-4 text-sm text-slate-500">12 min ago</td>
                                <td class="py-3 px-4 text-center"><a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="eye" class="w-4 h-4 inline"></i></a></td>
                            </tr>
                            <tr class="border-b border-slate-200 hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm">Leaking tap — Hostel Block C</td>
                                <td class="py-3 px-4 text-sm text-slate-500">Estates</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-[#2563eb]">Open</span></td>
                                <td class="py-3 px-4 text-sm text-slate-500">Yesterday</td>
                                <td class="py-3 px-4 text-center"><a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="eye" class="w-4 h-4 inline"></i></a></td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm">Lecture hall booking — A1</td>
                                <td class="py-3 px-4 text-sm text-slate-500">Academic Affairs</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-emerald-50 text-emerald-700">Resolved</span></td>
                                <td class="py-3 px-4 text-sm text-slate-500">2 days ago</td>
                                <td class="py-3 px-4 text-center"><a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="text-[#2563eb]"><i data-lucide="eye" class="w-4 h-4 inline"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: Your latest tickets -->
@endsection
