<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class DemoCacheController extends Controller
{
    // Route: /users
    public function getUsers()
    {
        // First request fetches from DB, subsequent requests fetch from cache
        $users = Cache::remember('users_list', 300, function() {
            Log::info('Fetching users from database'); // Logs only on first DB hit
            return User::all();
        });

        return response()->json($users);
    }

    // Route: /users/clear-cache
    public function clearUsersCache()
    {
        Cache::forget('users_list'); // clears cache
        return response()->json(['message' => 'Users cache cleared']);
    }

    // Optional route: /check-cache
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
