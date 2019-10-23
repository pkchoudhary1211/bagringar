<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class backendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function news(){
        return view('backend.news');
    }
    public function apiData(){
        $client = new Client();
        // try{
        //     $response = $client->get('https://jsonplaceholder.typicode.com/posts');
        // }catch (Exception $e) {
        //     dd($e);
        // }
        // dd(json_decode($response->getBody()));
        // $client = new Client();
        try{
            // $params['headers']=array
            $params['form_params'] =array('userId'=>1211,'title'=>'thi is toi','body'=>'testwd');
            $response = $client->post('https://jsonplaceholder.typicode.com/posts',$params);
            // $response = $client->send($response);
        }catch (Exception $e) {
            dd($e);
        // dd(json_decode($response->g
        // etBody()));
        }
        dd(json_decode($response->getBody()));
       
    }
}
