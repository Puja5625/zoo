<?php

namespace App\Http\Controllers;
use App\Models\Setweekanimal;
use App\Models\Testimonail;
use App\Models\Sponsor;


use Illuminate\Http\Request;

class TestimonailController extends Controller
{
    
    function sindex(){
        $setanimals=Setweekanimal::all()->last();
        return redirect()->route('viewtest','setanimals');
    }
   

    public function testimonialCreate(Request $request,$id){
        $data= $this->gettestData($request,$id);
       
        Testimonail::create($data);
        
        $sponsors= Sponsor::where('id',$id)->first();
       
        return redirect()->route('sponsortestimonial','sponsors')->with('success', 'test message successfully!!');
       }


       public function show()
    {
        $tests=Testimonail::all();
      
        $setanimals=Setweekanimal::all()->last();
        
        return view('index',compact('tests','setanimals'));
    }
  

       private function gettestData($request,$id){
       
        return [
            'test_message'=>$request->test_message,
           'sponsor_id'=>$id,
        ];
    }

}
