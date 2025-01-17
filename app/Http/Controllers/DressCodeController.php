<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DressCodeController extends Controller
{
    // Display dress code for Sukuma Tribe
    public function showSukumaDressCode()
    {
        return view('dressCode.sukuma');  // Create a view for Sukuma Tribe
    }

    // Display dress code for Pare Tribe
    public function showPareDressCode()
    {
        return view('dressCode.pare');  // Create a view for Pare Tribe
    }

    // Display dress code for Chaga Tribe
    public function showChagaDressCode()
    {
        return view('dressCode.chaga');  // Create a view for Chaga Tribe
    }
}
