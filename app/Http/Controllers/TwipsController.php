<?php

namespace App\Http\Controllers;

use App\Twip;
//use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class TwipsController extends Controller
{
    public function single_twip($id){
        $twip = Twip::findOrFail($id);
        return view('single', compact('twip'));
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $input=Request::all();
        Twip::create($input);
        return redirect('/');
    }
}
