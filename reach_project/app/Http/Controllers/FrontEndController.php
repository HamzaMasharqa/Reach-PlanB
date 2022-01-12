<?php

namespace App\Http\Controllers;
use App\Models\news;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function englishWebsite()
    {
        return view('ReachWebsite');
    }

    public function getAllPosts()
    {
        $news = \App\Models\news::paginate(4);

        return view('ReachWebSiteArabic', compact('news'));
    }
}
