<?php

namespace App\Http\Controllers;

use App\Twip;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwipsController extends Controller
{
    public function cast(){
        $twips = Twip::all();
        return $twips;
    }
}
