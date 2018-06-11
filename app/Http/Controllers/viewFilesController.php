<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewFilesController extends Controller
{
    public function index()
    {

        $files = DB::table('user_files')->orderBy('std','asc')->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass5()
    {

        $files = DB::table('user_files')->where('std','=',5)->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass6()
    {

        $files = DB::table('user_files')->where('std','=',6)->get();
        return view('files.index',['files'=>$files]);
    }
    public function showClass7()
    {

        $files = DB::table('user_files')->where('std','=',7)->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass8()
    {

        $files = DB::table('user_files')->where('std','=',8)->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass9()
    {

        $files = DB::table('user_files')->where('std','=',9)->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass10()
    {

        $files = DB::table('user_files')->where('std','=',10)->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass11()
    {

        $files = DB::table('user_files')->where('std','=',11)->get();
        return view('files.index',['files'=>$files]);
    }

    public function showClass12()
    {

        $files = DB::table('user_files')->where('std','=',12)->get();
        return view('files.index',['files'=>$files]);
    }
}
