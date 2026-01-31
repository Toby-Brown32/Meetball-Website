<?php

namespace App\Http\Controllers;

use App\Models\Feedback;

class AdminFeedbackController extends Controller
{
    public function index()
    {
        $feedbackItems = Feedback::query()
            ->latest()
            ->paginate(50);

        return view('admin.feedback_index', compact('feedbackItems'));
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedback_show', compact('feedback'));
    }
}
