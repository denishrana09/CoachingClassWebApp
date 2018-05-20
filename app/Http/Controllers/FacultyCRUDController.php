<?php

namespace App\Http\Controllers;

use App\faculty;
use Illuminate\Http\Request;

class FacultyCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faculties= faculty::orderBy('id','DESC')->paginate(5);
        return view('FacultyCRUD.index',compact('faculties'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FacultyCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'qualification' => 'required',
            'Subject' => 'required',
            'description',
        ]);
        faculty::create($request->all());
        return redirect()->route('facultyCRUD.index')
            ->with('success','Faculty added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
//    public function show(faculty $faculty)
    public function show($id)
    {
        $faculty= faculty::find($id);
        return view('FacultyCRUD.show',compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty= faculty::find($id);
        return view('FacultyCRUD.edit',compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'qualification' => 'required',
            'Subject' => 'required',
            'description',
        ]);
        faculty::find($id)->update($request->all());
        return redirect()->route('facultyCRUD.index')
            ->with('success','Faculty updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        faculty::find($id)->delete();
        return redirect()->route('facultyCRUD.index')
            ->with('success','Faculty deleted successfully');
    }
}
