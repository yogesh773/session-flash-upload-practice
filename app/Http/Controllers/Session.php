<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session extends Controller
{
    //
     function login(Request $request)   
     {
       $request->session()->put("session", $request->input("session"));
       $request->session()->put("alldata", $request->input());
       
        return redirect('since');
     }
      function logout(){
        session()->pull('session');
        return redirect('since') ;
    
    
    }
}
 