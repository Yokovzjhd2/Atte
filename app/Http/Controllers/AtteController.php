<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Working;
use App\Models\Breaking;
use Carbon\Carbon;


class AtteController extends Controller
{
    public function manage()
    {
        $users = Auth::user();

        return view('time_input',[
            "users" => $users
        ]);
    }

    public function input_time(Request $request)
    {
        $users = Auth::user();

        $input_time = $request([
            'working_start_time' => Carbon::now(),
            'working_end_time' => Carbon::now(),
            'breaking_start_time' => Carbon::now(),
            'breaking_end_time' => Carbon::now()
        ]);
        
        $working = new Working();
        $working->user_id = auth()->id();
        $working->working_start_time = $request->working_start_time;
        $working->working_end_time = $request->working_end_time;
        $working->save();

        $breaking = new Breaking();
        $working->user_id = auth()->id();
        $breaking->breaking_start_time = $request->breaking_start_time;
        $breaking->breaking_end_time = $request->breaking_end_time;
        $breaking->save();

        return redirect('/home');

    }
    
}
