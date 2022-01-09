<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function englishWebsite()
    {
        return view('ReachWebsite');
    }
}
