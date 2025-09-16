<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    //
    function adduser(Request $request){
        $request->session()->flash("massage","add flash user sucessfully");
        
        return redirect('flash');
    }
    
    }

