<?php

namespace App\Http\Controllers;

class RequestFormController extends Controller
{
    /**
     * Display the request form view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('request_form');
    }
}

