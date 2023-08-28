<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller

{
    //
    public function home(){
        return view('guest.home');
    }
}