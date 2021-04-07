<?php

namespace App\Http\Controllers;

use App\Models\TeacherStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{


 public function index(){
     return view('landing');

}

public  function saveStatus(){
     return view('admin\addstatus');
}

public  function storeStatus(Request $request){

     //return $request;
    // validate data

    $rules=['status'=>'required| max:100 | unique:teacherstatus,statusname'];
    $messages=['status.required'=>'الحقل مطلوب',
        'status.unique'=>'الحقل موجود مسبقا',

        ];
    $validator=Validator::make($request->all(), $rules, $messages);
    if($validator->fails()){
      // return  $validator ->errors();
        return redirect()->back()->withErrors($validator)->withInputs($request->all());
    }



    //save to db
    TeacherStatus::create([
        'statusname'=>$request->status
    ]);

    return redirect()->back()->with(['success'=>'تم الاضافة بنجاح']);



}
    //
}
