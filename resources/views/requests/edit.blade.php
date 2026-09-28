@extends('layouts.app')

@section('title', 'Edit ticket — Campus Service Portal')

@section('content')
<!-- Start: Page heading -->
            <div class="max-w-3xl">
                <a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="inline-flex items-center text-sm text-slate-500 hover:text-slate-900 mb-4"><i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>Back to ticket</a>
                <h1 class="text-xl font-semibold mb-2">Edit ticket</h1>
                <p class="text-sm text-slate-500 mb-6">You can change the details while the ticket is still open.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Edit form -->
            <form action="{{ route('requests.store') }}" method="post" class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm max-w-3xl">
                <div class="p-6 space-y-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-2">What's wrong?</label>
                        <input class="input-field" name="title" value="Broken projector — Lecture Hall B2">
                    </div>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-slate-600 mb-2">Department</label>
                            <select name="department" class="input-field">
                                <option selected>ICT Support</option>
                                <option>Estates</option>
                                <option>Halls</option>
                                <option>Hostels</option>
                                <option>Administration</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-600 mb-2">Category</label>
                            <select name="category" class="input-field">
                                <option selected>Projectors &amp; AV</option>
                                <option>Network / Wi-Fi</option>
                                <option>Hardware repair</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-2">Priority</label>
                        <select name="priority" class="input-field"><option>Low</option><option>Medium</option><option selected>High</option></select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-2">Description</label>
                        <textarea name="description" rows="6" class="input-field">The projector in Lecture Hall B2 powers on but shows a blank blue screen. Happened during the 10am lecture on 11 Sep. HDMI from the podium laptop does not detect a display.</textarea>
                    </div>
                </div>
                <div class="px-4 py-4 bg-white border-t border-slate-200 flex justify-between">
                    <a href="{{ route('requests.show', ['serviceRequest' => 1]) }}" class="inline-flex items-center px-4 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 hover:bg-slate-100">Cancel</a>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]"><i data-lucide="save" class="w-4 h-4 mr-2"></i>Save changes</button>
                </div>
            </form>
            <!-- End: Edit form -->
@endsection
