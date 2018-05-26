<?php

namespace App\Http\Controllers;

use App\UserFile;
use Illuminate\Http\Request;
use File;

class UserFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userfiles= UserFile::orderBy('id','DESC')->paginate(3);
        return view('UserFileCRUD.index',compact('userfiles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('UserFileCRUD.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url',
            'admin_id',
            'std',
            'description',
        ]);

        $request->merge(['admin_id'=>'1']);

        $fileName = $request->myfile->getClientOriginalName();
        $request->myfile->move(public_path('assets/pdf/'), $fileName);


        $request->merge(['url'=>$request->myfile->getClientOriginalName()]);
        UserFile::create($request->all());
        return redirect()->route('userfileCRUD.index')
            ->with('success','PDF added successfully');
    }

    public function show($id)
    {
        $userfile= UserFile::find($id);
        return view('UserFileCRUD.show',compact('userfile'));
    }

    public function edit($id)
    {
        $userfile= UserFile::find($id);
        return view('UserFileCRUD.edit',compact('userfile'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'url' => 'required',
            'std' => 'required',
            'admin_id' => 'required',
            'description' => 'required',
        ]);
        UserFile::find($id)->update($request->all());
        return redirect()->route('userfileCRUD.index')
            ->with('success','PDF updated successfully');
    }

    public function destroy($id)
    {
        $myfile = UserFile::find($id);
        $file_path = public_path('assets/pdf/'.$myfile->url);  // Value is not URL but directory file path
        if(File::exists($file_path)) {
            File::delete($file_path);
        }
        UserFile::find($id)->delete();
        return redirect()->route('userfileCRUD.index')
            ->with('success','File deleted successfully');
    }
}
