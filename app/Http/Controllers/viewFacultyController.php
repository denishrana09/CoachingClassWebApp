<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class viewFacultyController extends Controller
{
    public function index()
    {
        $faculties =DB::table('faculties')->where('onIndex','<>',1)->get();
        return view('faculty.index',['faculties'=>$faculties]);
    }
}
