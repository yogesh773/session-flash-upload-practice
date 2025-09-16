<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function upload(Request $request)
    {
        $path = $request->file("file")->store('public');     
        return $path;
    }
}

