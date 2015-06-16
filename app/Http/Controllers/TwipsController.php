<?php

namespace App\Http\Controllers;

use App\Twip;
use App\Http\Requests;
use App\Http\Requests\CreateTwipRequest;
use App\Http\Controllers\Controller;



class TwipsController extends Controller
{
    public function single_twip($id){
        $twip = Twip::findOrFail($id);
        return view('single', compact('twip'));
    }

    public function create(){
        return view('create');
    }

    public function store(CreateTwipRequest $request){
        Twip::create($request->all());
        return redirect('/');
    }
}
