<?php

namespace App\Http\Controllers;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    function classification(){
        return view('admin/classification');
    }

    public function classificationCreate(Request $request){
        $data= $this->getClassificationData($request);
        Classification::create($data);
        return redirect()->route('adminclassification')->with('success', 'Register Successfully!!');
       }

       public function show()
       {
           
           $classifications=Classification::paginate(2);
   
           return view('admin/showclassification',compact('classifications'));
       }

    




       private function getClassificationData($request){
        return [
            'class_display_name'=>$request->class_display_name,
            'class_table_name'=>$request->class_table_name,
           


        ];

    }
}
