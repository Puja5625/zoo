<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\Visitor;
use App\Models\Admin;
use App\Models\Setweekanimal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   
   
    function index(){
        $setanimals=Setweekanimal::all()->last();
        return redirect()->route('viewtest','setanimals');
    }
    function gallery(){
        return view('gallery');
    }
    function sponsorGallery(){
      
        return view('sponsor/gallery');
    }
    function sponsoranimal(){
        return view('sponsor/animal');
    }
    function sponsorTestimonial(){
        $sponsors=Sponsor::all()->last();
        return redirect()->route('atest','sponsors');
    }

    function visitorGallery(){
       
        return view('visitor/gallery');
    }
    function visitorAnimal(){
        return view('visitor/animal');
    }
    function visitorVacancy(){
        return view('visitor/vacancy');
    }
   


    function contact(){
        return view('contact');
    }

    
    function vacancy(){
        return view('vacancy');
    }
   

        public function tshow()
    {
       
        $sponsors=Sponsor::all()->last();
     
        return view('sponsor/testimonial',compact('sponsors'));
    }

    function vcontact(){
        $visitors=visitor::all()->last();
        $accounts=Admin::all()->last();
        return view('visitor/contact',compact('visitors','accounts'));
    }

  

    function contactMessagePost(Request $request){
        $request -> validate([
            'sendemail'=>'required|email',

        ]);
        $token=str::random(64);

        // DB::table('password_reset_tokens')->insert([
        //     'email'=>$request->email,
        //     'token'=>$token,
        //     'created_at'=>Carbon::now()
        // ]);
        $contacts= $this->getContactData($request);
        Mail::send('emails/sendcontactmessge',['contacts' => $contacts], function ($message) use ($request){
            $message->to($request->sendemail);
            $message->subject("Contact Message");
        });

        return redirect()->route('vcontact')->with('success','We have send an email to contact message!');
    }


   

    private function getContactData($request){
        return [
            'f_firstname'=>$request->f_firstname,
            'f_lastname'=>$request->f_lastname,
            'f_email'=>$request->f_email,
            'f_sendemail'=>$request->f_sendemail,
            'f_message' =>$request->f_message,


        ];

    }



}
