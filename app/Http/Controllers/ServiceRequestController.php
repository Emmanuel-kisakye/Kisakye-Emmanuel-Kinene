<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\ServiceRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceRequestController extends Controller
{
    public function index(): View
    {
        $serviceRequests = ServiceRequest::query()
            ->with(['department', 'category'])
            ->latest()
            ->get();

        return view('requests.index', compact('serviceRequests'));
    }

    public function create(): View
    {
        $departments = Department::query()->with('categories')->orderBy('name')->get();

        return view('requests.create', compact('departments'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department_id' => ['required', 'exists:departments,id'],
            'category_id' => ['required', 'exists:categories,id'],
            'priority' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string'],
            'attachment' => ['nullable', 'file', 'max:5120', 'mimes:jpg,jpeg,png,pdf,webp'],
        ]);

        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('attachments', 'public');
        }

        $serviceRequest = ServiceRequest::query()->create([
            'user_id' => auth()->id(),
            'department_id' => $validated['department_id'],
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'description' => $validated['description'],
            'priority' => $validated['priority'],
            'status' => 'Open',
            'attachment_path' => $attachmentPath,
        ]);

        return redirect()
            ->route('requests.show', $serviceRequest)
            ->with('status', 'Ticket submitted successfully.');
    }

    public function show(ServiceRequest $serviceRequest): View
    {
        $serviceRequest->load(['department', 'category']);

        return view('requests.show', compact('serviceRequest'));
    }

    public function edit(ServiceRequest $serviceRequest): View
    {
        $departments = Department::query()->with('categories')->orderBy('name')->get();
        $serviceRequest->load(['department', 'category']);

        return view('requests.edit', compact('serviceRequest', 'departments'));
    }

    public function update(Request $request, ServiceRequest $serviceRequest): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department_id' => ['required', 'exists:departments,id'],
            'category_id' => ['required', 'exists:categories,id'],
            'priority' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string'],
            'status' => ['required', 'string', 'max:50'],
            'attachment' => ['nullable', 'file', 'max:5120', 'mimes:jpg,jpeg,png,pdf,webp'],
        ]);

        if ($request->hasFile('attachment')) {
            $validated['attachment_path'] = $request->file('attachment')->store('attachments', 'public');
        }

        $serviceRequest->update([
            'department_id' => $validated['department_id'],
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'description' => $validated['description'],
            'priority' => $validated['priority'],
            'status' => $validated['status'],
            'attachment_path' => $validated['attachment_path'] ?? $serviceRequest->attachment_path,
        ]);

        return redirect()
            ->route('requests.show', $serviceRequest)
            ->with('status', 'Ticket updated.');
    }

    public function destroy(ServiceRequest $serviceRequest): RedirectResponse
    {
        $serviceRequest->delete();

        return redirect()
            ->route('requests.index')
            ->with('status', 'Ticket deleted.');
    }
}
