<?php

namespace App\Http\Controllers;

use App\Testimony;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class testimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request,[
                'fullname' => 'required',
                'email' => 'required',
                'profile_pic' => 'required|mimes:jpeg,jpg,bmp,png',
                'message' => 'required| max:50'
            ]);
            $image = $request->file('profile_pic');
            if (isset($image))
            {
                $currentDate = Carbon::now()->toDateString();
                $imagename = Str::random(5) .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
                if (!file_exists('uploads/testimony'))
                {
                    mkdir('uploads/testimony', 0777 , true);
                }
                $image->move('uploads/testimony',$imagename);
            }else {
                $imagename = 'default.png';
            }
    
            $testimony = new Testimony();
            $testimony->fullname = $request->fullname;
            $testimony->email = $request->email;
            $testimony->message = $request->message;
            $testimony->profile_pic = $imagename;
            $testimony->save();
            return redirect()->route('welcome')->with('success', 'Thanks for for testifying');
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
