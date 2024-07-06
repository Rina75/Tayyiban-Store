<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    // Method to display info page
    public function index()
    {
        return view('info');
    }

    // Other methods for additional functionality
}
