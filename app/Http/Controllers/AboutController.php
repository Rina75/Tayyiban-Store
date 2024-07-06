<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about'); // Pastikan Anda memiliki file view yang sesuai, misalnya resources/views/about.blade.php
    }
}

// Lakukan hal yang sama untuk ServicesController, PortfolioController, PricingController, ContactController
