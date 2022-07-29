<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function working_start(Request $request)
    {
        $workings = new Working();
        $workings->user_id = auth()->id();
        $workings->working_start_time = new Carbon('now', 'Asia/Tokyo');
        $workings->save();

        return redirect('/home');
    }

    public function working_end(Request $request)
    {
        $workings = new Working();
        $workings->user_id = auth()->id();
        $workings->working_end_time = new Carbon('now', 'Asia/Tokyo');
        $workings->save();

        return redirect('/home');
    }

    public function breaking_start(Request $request)
    {
        $breakings = new Breaking();
        $breakings->user_id = auth()->id();
        $breakings->breaking_start_time = new Carbon('now', 'Asia/Tokyo');
        $breakings->save();

        return redirect('/home');
    }

    public function breaking_end(Request $request)
    {
        $breakings = new Breaking();
        $breakings->user_id = auth()->id();
        $breakings->breaking_end_time = new Carbon('now', 'Asia/Tokyo');

        return redirect('/home');
    }

}
