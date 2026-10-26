<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::latest()->get();

        return view('admin.journals.index', compact('journals'));
    }

    public function create()
    {
        return view('admin.journals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'publish_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('journals', 'public');
            $data['image'] = $path;
        }

        $data['is_active'] = $request->has('is_active');

        Journal::create($data);

        return redirect()->route('admin.journals.index')->with('success', 'Journal created successfully.');
    }

    public function edit(Journal $journal)
    {
        return view('admin.journals.edit', compact('journal'));
    }

    public function update(Request $request, Journal $journal)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'publish_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($journal->image && Storage::disk('public')->exists($journal->image)) {
                Storage::disk('public')->delete($journal->image);
            }
            $path = $request->file('image')->store('journals', 'public');
            $data['image'] = $path;
        }

        $data['is_active'] = $request->has('is_active');

        $journal->update($data);

        return redirect()->route('admin.journals.index')->with('success', 'Journal updated successfully.');
    }

    public function destroy(Journal $journal)
    {
        if ($journal->image && Storage::disk('public')->exists($journal->image)) {
            Storage::disk('public')->delete($journal->image);
        }
        $journal->delete();

        return redirect()->route('admin.journals.index')->with('success', 'Journal deleted successfully.');
    }
}
