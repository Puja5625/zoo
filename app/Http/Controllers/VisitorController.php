<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Sponsor;
use App\Models\Vacancy;
use App\Models\Ticket;
use App\Models\Application;
use App\Models\Classification;
use App\Models\Employee;
use App\Models\Admin;
use App\Models\Mammal;
use App\Models\Bird;
use App\Models\Fish;
use App\Models\Reptile;
use App\Models\Amphibian;
use App\Models\Sponsoranimal;
use Illuminate\Support\Facades\Hash;
class VisitorController extends Controller
{
    function visitor(){

        return view('visitor/visitor');
    }
   

   public function visitorCreate(Request $request){
     $data= $this->getVisitorData($request);
     Visitor::create($data);
     return redirect()->route('registervisitor')->with('success', 'Register Successfully!!');
    }

    public function show()
    {
        
        $visitors=Visitor::when(request('searchkey'),function($query){
                    $key=request('searchkey');
                    $query->where('v_firstname','like','%'.$key.'%');
                })
                  ->paginate(5);

        return view('admin/showvisitor',compact('visitors'));
    }
  
    public function dshow()
    {
        //
        $visitors=Visitor::paginate(5);
        $sponsors=Sponsor::paginate(5);
        $vacancies=Vacancy::paginate(5);
        $tickets=Ticket::paginate(5);
        $applications=Application::paginate(5);
        $employees=Employee::paginate(5);
        $accounts=Admin::paginate(5);
        $mammals=Mammal::paginate(5);
        $birds=Bird::paginate(5);
        $fishs=Fish::paginate(5);
        $reptiles=Reptile::paginate(5);
        $amphibians=Amphibian::paginate(5);
        $totalanimal=$mammals->total()+$birds->total()+$fishs->total()+$reptiles->total()+$amphibians->total();
        $sponsoranimals=Sponsoranimal::all();
        $totalprice=0;
        foreach($sponsoranimals as $sponsoranimal){
            $totalprice +=$sponsoranimal['total_price'];
        }
        return view('admin/admindashboard',compact('visitors','sponsors','vacancies','tickets','applications','employees','accounts','totalanimal','totalprice'));
    }
    public function vregshow()
    {
        $visitors=visitor::all()->last();
     
        return view('visitor/editvisitorprofile',compact('visitors'));
    }

   

    public function update(Request $request,string $id)
    {
       
        $data= $this->getVisitorData($request);
        Visitor::where('id',$id)->update($data);

        return view('visitor/visitorpage')->with('warning', 'Update Successfully!!');
    }






    public function checkVisitor(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);
        $email=$request->input('email');
        $pass=$request->input('password');
       
        $visitors=visitor::all()->last();
       
      
    if( isset($visitors)){
        if($email == $visitors['v_email'] && password_verify($pass, $visitors['v_password'])){
            return redirect()->route('visitorgallery');
        }else{
            return redirect()->route('loginvisitor')->with('error', 'No account Found!!');
        }
    
    }else{
         return redirect()->route('loginvisitor')->with('error', 'No account Found!!');
    }
    }

    public function destory($id){
      Visitor::where('id',$id)->delete();
      return redirect()->route('viewvisitor')->with('error', 'Delete Successfully!!');
    }



    private function getVisitorData($request){
        $request->validate([
            'v_firstname'=>'required|string',
            'v_lastname'=>'required|string',
            'v_email'=>'required|email',
            'v_address'=>'required',
            'v_password'=>'required|min:6',
           

        ]);
        return [
            'v_firstname'=>$request->v_firstname,
            'v_lastname'=>$request->v_lastname,
            'v_email'=>$request->v_email,
            'v_address'=>$request->v_address,
            'v_password' => Hash::make($request['v_password']),


        ];

    }

}
