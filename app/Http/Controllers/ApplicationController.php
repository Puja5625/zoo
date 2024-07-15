<?php

namespace App\Http\Controllers;
use App\Models\Application;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    function application(){
        return view('visitor/applyvacancy');
    }

    public function applicationCreate(Request $request){
        $data= $this->getApplicationData($request);
        Application::create($data);
        return redirect()->route('apply')->with('success', 'Apply Successfully!! && You can check employee list after two days!!');
       }

      

       public function show()
    {
        $applications=Application::when(request('searchkey'),function($query){
            $key=request('searchkey');
            $query->where('a_fullname','like','%'.$key.'%');
        })
          ->paginate(5);

        return view('admin/showapplication',compact('applications'));
    }

    

    public function destory($id){
        Application::where('id',$id)->delete();
        return redirect()->route('viewapplication')->with('error', 'Successfully deleted!!');
      }


    


       private function getApplicationData($request){
        $request->validate([
            'cv'=>'required|file',
        ]);
        
        return [
            'a_fullname'=>$request->a_fullname,
            'a_email'=>$request->a_email,
            'a_phone'=>$request->a_phone,
            $img_name = time(). '.' .$request->cv->getClientOriginalName(),//39749574.png
            $request->cv->move(public_path('images'), $img_name),
            'a_cv'=> $img_name,

            'v_end_date'=>$request->v_end_date,



        ];

    }
    
   
}
