<?php

namespace App\Http\Controllers;

use App\Pictures;
use Illuminate\Http\Request;

class PictureCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pictures= Pictures::orderBy('id','DESC')->paginate(3);
        return view('PictureCRUD.index',compact('pictures'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('PictureCRUD.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
            'admin_id' => 'required',
            'description',
        ]);
        Pictures::create($request->all());
        return redirect()->route('pictureCRUD.index')
            ->with('success','Picture added successfully');
    }

    public function show($id)
    {
        $picture= Pictures::find($id);
        return view('PictureCRUD.show',compact('picture'));
    }

    public function edit($id)
    {
        $picture= Pictures::find($id);
        return view('PictureCRUD.edit',compact('picture'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'url' => 'required',
            'admin_id' => 'required',
            'description',
        ]);
        Pictures::find($id)->update($request->all());
        return redirect()->route('pictureCRUD.index')
            ->with('success','Picture updated successfully');
    }

    public function destroy($id)
    {
        Pictures::find($id)->delete();
        return redirect()->route('pictureCRUD.index')
            ->with('success','Picture deleted successfully');
    }
}
