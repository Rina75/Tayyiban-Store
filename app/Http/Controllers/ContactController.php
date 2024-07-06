<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /// Method to display info page
    public function index()
    {
        return view('contact');
    }
}
