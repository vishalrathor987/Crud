<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){

        return view("register");
    }
    public function store(Request $req){

        $students = new Student;
        $students->product_name = $req->product_name;
        $students->prize = $req->prize;
        $students->description = $req->description;
        // dd($students);
        $students->save();
        return redirect()->back();
      
    }
}
