<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class DemoCacheController extends Controller
{
   
    public function getUsers()
    {
        
        $users = Cache::remember('users_list', 300, function() {
            Log::info('Fetching users from database'); 
            return User::all();
        });

        return response()->json($users);
    }

    
    public function clearUsersCache()
    {
        Cache::forget('users_list'); 
        return response()->json(['message' => 'Users cache cleared']);
    }

    
    public function checkCache()
    {
        if (Cache::has('users_list')) {
            return response()->json([
                'exists' => true,
                'value' => Cache::get('users_list')
            ]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}
