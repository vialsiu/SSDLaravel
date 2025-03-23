<?php

namespace App\Http\Controllers;

use App\Models\Gallery; 
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries', compact('galleries')); // this is the main view, not the partial
    }
}
