@extends('layouts.admin')

@section('title', 'Edit department — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="max-w-2xl">
                <h1 class="text-xl font-semibold mb-2">Edit department</h1>
                <p class="text-sm text-slate-500 mb-6">New requests will use the updated department name right away.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Form -->
            <form action="{{ route('home') }}" method="get" class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm max-w-2xl">
                <div class="p-6 space-y-5">
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Name</label><input class="input-field" name="name" value="Estates"></div>
                    <div><label class="block text-sm font-medium text-slate-600 mb-2">Description</label><textarea class="input-field" name="description" rows="4">Leaks, lights, broken furniture, and air conditioning around campus.</textarea></div>
                </div>
                <div class="px-4 py-4 bg-white border-t border-slate-200 flex justify-between">
                    <a href="{{ route('home') }}" class="px-4 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 hover:bg-slate-100">Cancel</a>
                    <button class="px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]">Save department</button>
                </div>
            </form>
            <!-- End: Form -->
@endsection
