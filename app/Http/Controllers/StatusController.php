<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use App\Http\Requests\StatusRequest;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    
    public function store(StatusRequest $request)
    {

      

        // Status::create([
        //     'body' => $request->body,
        //     'identifier' => Str::random(32),
        //     'user_id' => Auth::id(),

        // ]);

        // Auth::user()->statuses()->create([
        //     'body' => $request->body,
        //     'identifier' => Str::random(32),
          
        // ]);

        //lebih simple

        // Auth::user()->makeStatus($request->body);

        // lebih simple lagi dimasukkan ke StatusRequest
        $request->make($request->body);
        return redirect()->back();

    }


}
