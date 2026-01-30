<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function show()
    {
        return view('public.feedback');
    }

    public function store(StoreFeedbackRequest $request)
    {
        $validated = $request->validated();

        Feedback::create([
            'name' => $validated['name'] ?? null,
            'email' => $validated['email'] ?? null,
            'feedback' => $validated['feedback'],
        ]);

        return redirect()->route('feedback')->with('success', 'Thank you for your feedback!');
    }
}
