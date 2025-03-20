<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function artists()
    {
        return view('artists');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        return redirect()->route('contact')->with('message', 'Your message has been sent successfully!');
    }
}
