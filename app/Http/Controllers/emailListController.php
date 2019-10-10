<?php

namespace App\Http\Controllers;

use App\emailList;
use Illuminate\Http\Request;

class emailListController extends Controller
{
    public function emails(Request $request)
    {
        $this->validate($request,[
            'email' => 'required | email',
        ]);
        $email = new emailList();
        $email->email = $request->email;
        $email->save();
        return redirect()->back()->with('success', 'You\'ve Succesfffully Subscribed');
    }
}
