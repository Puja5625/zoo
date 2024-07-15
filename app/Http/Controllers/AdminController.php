<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    
    function adminLogin(){
        return view('admin/admin');
    }
   
    public function show()
    {
        $accounts=Admin::paginate(5);

        return view('admin/showadmin',compact('accounts'));
    }


    public function checkAdmin(Request $request){
        $email=$request->input('email');
        $pass=$request->input('password');
       
        $accounts=Admin::all()->last();
       
      
    if(isset($accounts)){
     if($email == $accounts['admin_email'] && password_verify($pass, $accounts['admin_pass'])){
        return redirect()->route('admindashboard');
     }else{
        return redirect()->route('adminlogin')->with('warning', 'No account Found!!');
     }
    }else{
        return redirect()->route('adminlogin')->with('warning', 'No account Found!!');
    }
  
    

    }



    function addAdmin(){
        return view('admin/addadmin');
    }
    public function adminCreate(Request $request){
        $data= $this->getAdminData($request);

        Admin::create($data);
        return redirect()->route('addadmin')->with('success', 'admin added successfully!!');
       }


       public function edit($id)
       {
           $account=Admin::where('id',$id)->first()->toArray();
          return view('admin/editadmin',compact('account'));
       }
   
       public function update(Request $request,string $id)
       {
   
           $data= $this->getAdminData($request);
        
           Admin::where('id',$id)->update($data);
        
           return redirect()->route('viewadmin')->with('warning', 'Update Successfully!!');
       }

       public function destory($id){
        Admin::where('id',$id)->delete();
        return redirect()->route('viewadmin')->with('error', 'Successfully deleted!!');
      }
   


       public function logout(Request $request){
        
        return redirect('/');
    }




       private function getAdminData($request){
        return [
            'admin_name'=>$request->admin_name,
            'admin_email'=>$request->admin_email,
            'admin_pass'=>  Hash::make($request['admin_pass']),




        ];

    }
   

}
