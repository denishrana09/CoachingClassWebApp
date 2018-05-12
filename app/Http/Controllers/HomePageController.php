<?php

namespace App\Http\Controllers;

use App\TimeTable;
use Illuminate\Http\Request;
use App\faculty;
use App\Pictures;


class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = faculty::all();
        $pictures = Pictures::all();
        return view('welcome',['faculties'=>$faculties,'pictures'=>$pictures]);
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
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function show(TimeTable $timeTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeTable $timeTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeTable $timeTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeTable $timeTable)
    {
        //
    }
}
