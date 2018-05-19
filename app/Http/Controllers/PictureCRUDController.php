<?php

namespace App\Http\Controllers;

use App\Pictures;
use Illuminate\Http\Request;
use File;
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
            'url',
            'admin_id',
            'description',
        ]);


        $request->merge(['admin_id'=>'1']);
//        $request->merge(['description'=>'']);

//        $photoName = time().'.'.$request->myfile->getClientOriginalExtension();
//        $photoName = $request->myfile->getClientOriginalName() .'.'.$request->myfile->getClientOriginalExtension();
        $photoName = $request->myfile->getClientOriginalName();
        $request->myfile->move(public_path('assets/img/Gallery'), $photoName);


        $request->merge(['url'=>$request->myfile->getClientOriginalName()]);
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
        $mypic = Pictures::find($id);
        $image_path = public_path('assets/img/Gallery/'.$mypic->url);  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Pictures::find($id)->delete();
        return redirect()->route('pictureCRUD.index')
            ->with('success','Picture deleted successfully');
    }
}
