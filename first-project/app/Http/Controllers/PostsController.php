<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        
        $data = request()->validate([
            //for not required data 'other_field' => ''
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);
        
        //the first parameter is the folder where we want our resource save
        //the second is the driver to use s3 is one of those and it belongs to amazon
        //we will use public which is one local
        dd(request('image')->store('upload', 'public')); 

        auth()->user()->posts()->create($data);


        dd(request()->all());
    }
}
