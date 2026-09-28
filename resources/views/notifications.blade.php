@extends('layouts.app')

@section('title', 'Notifications — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="max-w-3xl flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-xl font-semibold">Notifications</h1>
                    <p class="text-sm text-slate-500 mt-1">Updates on your tickets. The same notes also go to your campus email.</p>
                </div>
                <span class="text-sm text-[#2563eb]">Mark all as read</span>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Notification list -->
            <div class="max-w-3xl space-y-3">
                <a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="block bg-white border border-blue-200 rounded-xl p-4 hover:bg-slate-50 shadow-sm">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-lg bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="refresh-cw" class="w-5 h-5 text-[#d97706]"></i></div>
                        <div>
                            <p class="text-sm font-medium">Status updated to In progress</p>
                            <p class="text-sm text-slate-500 mt-1">Broken projector — Lecture Hall B2 was assigned to Peter Muwanga.</p>
                            <p class="text-xs text-slate-400 mt-2">12 min ago · Unread</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="block bg-white border border-slate-200 rounded-xl p-4 hover:bg-slate-50 shadow-sm">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="message-square" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <div>
                            <p class="text-sm font-medium">New comment from Estates</p>
                            <p class="text-sm text-slate-500 mt-1">Technician scheduled for Monday on CSP-1038.</p>
                            <p class="text-xs text-slate-400 mt-2">1 hr ago</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="block bg-white border border-slate-200 rounded-xl p-4 hover:bg-slate-50 shadow-sm">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 flex items-center justify-center shrink-0"><i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600"></i></div>
                        <div>
                            <p class="text-sm font-medium">Request marked resolved</p>
                            <p class="text-sm text-slate-500 mt-1">Lecture hall booking — A1 is ready. Confirm or reopen if something is still wrong.</p>
                            <p class="text-xs text-slate-400 mt-2">2 days ago</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End: Notification list -->
@endsection
