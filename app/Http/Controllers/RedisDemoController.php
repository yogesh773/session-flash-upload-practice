<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class RedisDemoController extends Controller
{
    // Store a value in Redis
    public function storeMessage()
    {
        // Store "Hello Redis!" for 10 minutes
        Cache::put('my_message', 'Hello Redis!', 10);

        return "Message stored in Redis!";
    }

    // Retrieve value from Redis
    public function getMessage()
    {
        $message = Cache::get('my_message', 'No message found in Redis');

        return "Message from Redis: " . $message;
    }

    // Delete value from Redis
    public function deleteMessage()
    {
        Cache::forget('my_message');

        return "Message deleted from Redis!";
    }
}
