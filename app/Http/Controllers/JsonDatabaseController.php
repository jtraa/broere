<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JsonDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$jsonString = file_get_contents('database.json');
       	$decode = json_decode($jsonString);
       	$array = $decode[0];		
		$collection = collect($array);
		$uniqueId = $collection->unique('id');
		$countUnique = $collection->countBy('id');
		dd($uniqueId);		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Make a new json data
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store json data
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       	$jsonString = file_get_contents('database.json');
       	$decode = json_decode($jsonString);
       	$array = $decode[0];		
		$collection = collect($array)->where('id', $id); 
		
		dd($collection->first);            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$jsonString = file_get_contents('database.json');
		$decode = json_decode($jsonString);
		$array = $decode[0];		
		$collection = collect($array)->where('id', $id); 
		
		
		
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
