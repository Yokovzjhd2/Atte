<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Working;
use App\Models\Breaking;

class AtteController extends Controller
{
    public function manage()
    {
        return view('time_input');
    }

    
}
