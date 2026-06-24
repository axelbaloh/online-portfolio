<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        $projects = config('projects');

        return view('web', compact('projects'));
    }
}