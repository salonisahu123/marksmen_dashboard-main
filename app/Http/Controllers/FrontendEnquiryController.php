<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use App\Models\JobApplication;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class FrontendEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'project_location' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'product_portfolio' => 'required|string|max:255',
            'requirements' => 'nullable|string',
        ]);

        $validated['status'] = 'new';

        ProductEnquiry::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Your enquiry has been submitted successfully.',
        ]);
    }

    public function contact(Request $request)
    {

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'mobile_number' => [
                'required',
                'string',
                'max:20',
            ],

            'location' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'nullable',
                'email',
                'max:255',
            ],

            'product_enquiry' => [
                'required',
                'string',
                'max:255',
            ],

            'message' => [
                'nullable',
                'string',
            ],
        ]);

        $contactEnquiry = ContactEnquiry::create($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Enquiry submitted successfully.',
            ]);
        }

        return redirect()
            ->back()
            ->with('success', 'Enquiry submitted successfully.');
    }

    public function career(Request $request)
    {
        Log::info('Hit career endpoint');
        try {
            $validated = $request->validate([
                'job_opening_id' => 'nullable|integer',
                'full_name' => 'required|string|max:255',
                'mobile_number' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'current_city' => 'required|string|max:255',
                'total_experience' => 'required|string|max:255',
                'highest_qualification' => 'nullable|string|max:255',
                'brief_note' => 'nullable|string',
                'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            ]);

            if ($request->hasFile('resume')) {
                $path = $request->file('resume')->store('resumes', 'public');
                $validated['resume_path'] = $path;
            } else {
                $validated['resume_path'] = '';
            }

            $validated['status'] = 'new';

            JobApplication::create($validated);
        } catch (ValidationException $e) {
            Log::error('Validation failed', $e->errors());

            return response()->json(['success' => false, 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('Job application failed: '.$e->getMessage());

            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Your application has been submitted successfully.',
        ]);
    }
}
