<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Twip;

class MainController extends Controller
{
    public function welcome()
    {
        $twips = Twip::all();
        return view("welcome", compact('twips'));
    }
}
