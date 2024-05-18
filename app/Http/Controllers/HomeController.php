<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(Request $request){
        Log::info('Received message request', [
            'request_data' => $request->all()
        ]);
        return response()->json(['message' => 'Request received successfully'], 200);
    }
}
