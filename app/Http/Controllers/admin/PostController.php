<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function create() {
        return view('admin.post.create');
    }

    public function store(Request $request){
        dd($request);
    }
}