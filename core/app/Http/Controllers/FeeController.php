<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Fee;

class FeeController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('template.addfee',compact('student'));
    }
     public function showlist()
    {
        return view('template.addfeesearch');
    }
    public function ajax(Request $request){
        $search_name = $request->search_by_name;
        $search_class = $request->search_by_class;
        $search_roll = $request->search_by_roll;

      $data = Student::select("*")->when($search_name,function($q) use ($search_name){
        $q->where('full_name','LIKE', '%'.$search_name.'%');
      })->when($search_class,function($q) use ($search_class){
        $q->where('class',$search_class);
      })->when($search_roll,function($q) use ($search_roll){
        $q->where('roll_no',$search_roll);
      })->get();
        return response()->json($data);
    }
    public function free_from(Request $request){
      $id = $request->id;
      $data = Student::whereId($id)->first();
      return view('template.addfee',compact('data'));
    }
}
