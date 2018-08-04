<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class viewGalleryController extends Controller
{
    public function index()
    {
        $pictures =DB::table('pictures')->orderBy('id','desc')->get();
        return view('gallery.index',['pictures'=>$pictures]);
    }
}
