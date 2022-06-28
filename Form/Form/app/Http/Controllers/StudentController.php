<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
//        echo"this is students controller";
        return view('/students/index');
    }

    public function create(Request $request)

    {
//        dd($_POST);
//        dd($request->input('name'));
        Detail::create([
            'name'=> $request-> input('name'),//first name table name second name chai form name
            'roll'=> $request-> input('roll'),
            'email'=> $request-> input('email'),
            'contact'=> $request-> input('contact'),


        ]);
    }

}
