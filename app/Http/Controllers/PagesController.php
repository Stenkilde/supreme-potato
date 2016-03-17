<?php

namespace App\Http\Controllers;
use App\Compliment;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function roadmap()
    {
        return view('pages.roadmap');
    }

    public function compliment()
    {
        $compliments = Compliment::all();

        return view('pages.compliments', compact('compliments'));
    }
}
