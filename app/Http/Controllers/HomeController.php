<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork; // Import the Artwork model

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index'); // Allow guests to see homepage
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::latest()->take(8)->get();
        return view('index', compact('artworks'));
    }

    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('home'); // Authenticated users see the dashboard
    }
}
