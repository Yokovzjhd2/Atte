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

        return view('time_input', [
            "users" => $users
        ]);
    }

    public function input_time(Request $request)
    {

        $workings = new Working();
        $workings->user_id = auth()->id();
        $workings->working_start_time = new Carbon('now', 'Asia/Tokyo');
        $workings->working_end_time = new Carbon('now', 'Asia/Tokyo');
        $workings->save();

        $breakings = new Breaking();
        $breakings->user_id = auth()->id();
        $breakings->breaking_start_time = new Carbon('now', 'Asia/Tokyo');
        $breakings->breaking_end_time = new Carbon('now', 'Asia/Tokyo');
        $breakings->save();

        return redirect('/home');
    }
}
