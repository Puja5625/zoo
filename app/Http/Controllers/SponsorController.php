<?php

namespace App\Http\Controllers;
use App\Models\Sponsor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SponsorController extends Controller
{
    function sponsor(){

        return view('sponsor/sponsor');
    }
    

    public function sponsorCreate(Request $request){
        $data= $this->getSponsorData($request);

        Sponsor::create($data);
        return redirect()->route('registersponsor')->with('success', 'register successful!!');
       }

       public function show()
       {
        $sponsors=Sponsor::when(request('searchkey'),function($query){
            $key=request('searchkey');
            $query->where('s_name','like','%'.$key.'%');
        })
          ->paginate(5);

           return view('admin/showsponsor',compact('sponsors'));
       }

      
      


       public function sregshow()
       {
           $sponsors=Sponsor::all()->last();
          
           return view('sponsor/editsponsorprofile',compact('sponsors'));
       }
   
      
   
       public function update(Request $request,string $id)
       {
          
           $data= $this->getSponsorData($request);
           Sponsor::where('id',$id)->update($data);
   
           return view('sponsor/sponsorpage')->with('warning', 'Update Successfully!!');
       }
   
       public function destory($id){
        Sponsor::where('id',$id)->delete();
        return redirect()->route('viewsponsor')->with('error', 'Rejected successfully!!');
      }






    public function checkSponsor(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);
        $email=$request->input('email');
        $pass=$request->input('password');
       
        $sponsors=Sponsor::all()->last();
       
      
    if(isset($sponsors)){
     if($email == $sponsors['s_email'] && password_verify($pass, $sponsors['s_password'])){
        return redirect()->route('sponsorgallery');
     }else{
        return redirect()->route('loginsponsor')->with('error', 'No account Found!!');
     }
    
    }else{
        return redirect()->route('loginsponsor')->with('error', 'No account Found!!');
    }
    }


   





       private function getSponsorData($request){
        $request->validate([
            's_name'=>'required|string',
            's_existing_name'=>'required',
            's_phone_number'=>'required|min:11|integer',
            's_yearly_revenue'=>'required|integer',
            's_business_type'=>'required',
            's_email'=>'required|email',
            's_address'=>'required',
            's_password'=>'required|min:6',
           

        ]);
           return [
               's_name'=>$request->s_name,
               's_existing_name'=>$request->s_existing_name,
               's_phone_number'=>$request->s_phone_number,
               's_address'=>$request->s_address,
               's_yearly_revenue'=>$request->s_yearly_revenue,
               's_email'=>$request->s_email,
               's_password'=>Hash::make($request->s_password),
               's_business_type'=>$request->s_business_type,



           ];

       }
}
