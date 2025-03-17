<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function create() {
        return view('blog.create');
    }

    function store(Request $request) {
        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);
    }

}
