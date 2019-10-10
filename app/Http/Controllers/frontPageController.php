<?php

namespace App\Http\Controllers;

use view;
use App\Testimony;
use Illuminate\Http\Request;

class frontPageController extends Controller
{
    public function welcome()
    {
        $testimonies = Testimony::take(1)->inRandomOrder()->get();
        return view('welcome', compact('testimonies'));
    }

    public function outReach()
    {
        return view('outreach');
    }
}
