<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Intervention\Image\Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('template.studentlist',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');

            $filename = time().'_'.$image->getClientOriginalName();
            $image_path = 'assets/students/images/';
           $image->move($image_path, $filename);
            
            
        }
        $data = [
        'full_name'=>$request->full_name,
        'father_name'=>$request->father_name,
        'phone'=>$request->phone,
        'class'=>$request->class,
        'roll_no'=>$request->roll_no,
        'monthly_fee'=>$request->monthly_fee,
        'reming'=>$request->reming,
        'advance'=>$request->advance,
        'father_cnic'=>$request->father_cnic,
        'date_of_birth'=>$request->date_of_birth,
        'word_date_of_barth'=>$request->word_date_of_barth,
        'father_occuption'=>$request->father_occuption,
        'monthly_income'=>$request->monthly_income,
        'nationality'=>$request->nationality,
        'religion'=>$request->religion,
        'last_school'=>$request->last_school,
        'slc_no'=>$request->slc_no,
        'last_attended_class'=>$request->last_attended_class,
        'admited_class'=>$request->admited_class,
        'home_address'=>$request->home_address,
        'district'=>$request->district,
        'tehsil'=>$request->tehsil,
        'image'=>$filename,
            
        ];
       Student::create($data);
       return back()->with('massage','Data insert successfuly!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
