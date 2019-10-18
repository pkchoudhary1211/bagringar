<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeIndex()
    {
        return view('frontend.home');
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
        //
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
    public function parichy(){  
        return view('frontend.prichay');
    }
    public function bagriStory(){
        return view('frontend.bagri_story');
    }
    public function narenStory(){
        return view('frontend.naren_story');
    }
    public function history(){
        return view('frontend.history');
    }
    public function newsList(){
        return view('frontend.news');
    }
    public function hospital(){
        return view('frontend.hospital');
    }
    public function education(){
        return view('frontend.education');
    }
    public function places(){
        return view('frontend.places');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function photoGallery(){
        return view('frontend.photo_gallery');
    }
}
