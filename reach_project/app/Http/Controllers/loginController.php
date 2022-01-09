<?php

namespace App\Http\Controllers;
use App\Models\login;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function checkdata()
    {
        return login::all();
    }
}
