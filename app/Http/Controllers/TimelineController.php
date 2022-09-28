<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // $following = Auth::user()->follows->pluck('id');
        // $statuses = Status::whereIn('user_id', $following)
        //                     ->orWhere('user_id', Auth::user()->id)
        //                     ->latest()
        //                     ->get();

    
        $statuses = Auth::user()->timeline();

    //cara lebih simple, menggunakan relasi



     //   $statuses = Auth::user()->statuses;
    
       //dd($statuses);
        return view('timeline', compact('statuses'));
    }
}
