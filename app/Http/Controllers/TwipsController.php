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

    public function welcome()
    {
        $twips = Twip::latest()->get();
        return view("welcome", compact('twips'));
    }

    public function edit($id){
        $twip = Twip::findOrFail($id);
        return view('edit', compact('twip'));
    }

    public function update($id, CreateTwipRequest $request){
        $twip = Twip::findOrFail($id);
        $twip->update($request->all());
        return redirect($id);
    }
}
