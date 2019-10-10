<?php

namespace App\Http\Controllers\Admin;

use App\r;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\HeroHeaderSection;
use App\Http\Controllers\Controller;

class HeroHeaderSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = HeroHeaderSection::all();
        return view('admin.hero_section/index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hero_section/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'header_title' => 'required',
            'header_desc' => 'required',
            'hero_img' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('hero_img');
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = Str::random(5) .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/hero-section'))
            {
                mkdir('uploads/hero-section', 0777 , true);
            }
            $image->move('uploads/hero-section',$imagename);
        }else {
            $imagename = 'hero_1.jpg';
        }

        $hero = new HeroHeaderSection();
        $hero->header_title = $request->header_title;
        $hero->header_desc= $request->header_desc;
        $hero->hero_btn_url= $request->hero_btn_url;
        $hero->hero_img = $imagename;
        $hero->save();
        return redirect()->route('hero-section.index')->with('success', 'Hero Section Succesfffully Added');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = HeroHeaderSection::find($id);
        return view('admin.hero_section.edit',compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'header_title' => 'required',
            'header_desc' => 'required',
            'hero_img' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('hero_img');
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = Str::random(5) .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/hero-section'))
            {
                mkdir('uploads/hero-section', 0777 , true);
            }
            $image->move('uploads/hero-section',$imagename);
        }else {
            $imagename = 'hero_1.jpg';
        }

        $hero->header_title = $request->header_title;
        $hero->header_desc= $request->header_desc;
        $hero->hero_btn_url= $request->hero_btn_url;
        $hero->hero_img = $imagename;
        $hero->save();
        return view('admin.hero-section.edit',compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }
}
