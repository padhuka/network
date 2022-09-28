<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    
    public function store(Request $request)
    {

        $request->validate([
            'body' => ['required'],
        ]);

        Status::create([
            'body' => $request->body,
            'identifier' => Str::random(32),
            'user_id' => Auth::user()->id()

        ]);
    }


}
