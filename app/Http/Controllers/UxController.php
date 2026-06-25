<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UxController extends Controller
{
    public function index()
    {
        $skills = config('ux');

        return view('ux', compact('skills'));
    }
}