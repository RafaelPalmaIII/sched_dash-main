<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'meeting_title' => 'required|string',
            'meeting_room' => 'required|string',
            'meeting_date' => 'required|date',
            'meeting_time' => 'required|string',
            'participants_email' => 'required|array',
            'files' => 'required|array',
        ]);

        $request->user()->requests()->create([
            'meeting_title' => $request->meeting_title,
            'meeting_room' => $request->meeting_room,
            'meeting_date' => $request->meeting_date,
            'meeting_time' => $request->meeting_time,
            'participants_email' => json_encode($request->participants_email),
            'files' => json_encode($request->files),
        ]);

        return redirect()->route('dashboard');
    }

    public function approve(Request $request, Request $approvalRequest)
    {
        $approvalRequest->update(['approved' => true, 'approver_id' => Auth::id()]);

        return redirect()->route('dashboard');
    }
}

