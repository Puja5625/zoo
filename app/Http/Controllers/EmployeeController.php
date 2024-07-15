<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use App\Notifications\MyFirstNotification;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    
    public function employeeCreate(Request $request,$id){
        
       
       
        $data= $this->getEmployeeData($request,$id);

        Employee::create($data);
        
        // $applications= Application::where('id',$id)->first();
        $application = Application::find($id); // Ensure this returns an Application instance
        if ($application) {
            $details = "<h1>Job accept message!<h1> <br> <p> I will accept your CV && Welcome To My <b>Zoo</b>";
            Notification::route('mail', $application->a_email)
            ->notify(new MyFirstNotification($details));            

            $application->delete();
            return redirect()->route('viewapplication')->with('success', 'Accepted && Send email successfully!!');
        } else {
            return redirect()->route('viewapplication')->with('error', 'Application not found!');
        }
    }

       public function employee()
       {
           $employees=Employee::paginate(5);
   
           return view('visitor/employeelist',compact('employees'));
       }

       public function show()
       {
           $employees=Employee::when(request('searchkey'),function($query){
            $key=request('searchkey');
            $query->where('employee_name','like','%'.$key.'%');
        })
          ->paginate(5);
   
           return view('admin/showemployee',compact('employees'));
       }

       public function destory($id){
        Employee::where('id',$id)->delete();
        return redirect()->route('viewemployee')->with('error', 'Successfully deleted!!');
      }
   

       private function getEmployeeData($request,$id){
       $applications= Application::where('id',$id)->first();
        return [
            'Employee_name'=>$applications['a_fullname'],
            'Email'=>$applications['a_email'],
            'Phone'=>$applications['a_phone'],

        ];

    }



}
