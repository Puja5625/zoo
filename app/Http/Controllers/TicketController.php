<?php

namespace App\Http\Controllers;
use App\Models\Ticket;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    function ticket(){
        return view('bookticket');
    }
    function vTicket(){
        $tickets=Ticket::all();
        return  view('visitor/bookticket',compact('tickets'));
    }


    public function ticketCreate(Request $request){
        $data= $this->getTicketData($request);
       
        Ticket::create($data);
        
      
        $total=$request->regular_num * 3000 +  $request->child_num * 2000 +$request->student_num * 2500 ;
        return redirect()->route('vbookticket')->with('success', "Successfully book ticket!!Total prize is : $total ks");
       }

       public function show()
       {
           $tickets=Ticket::when(request('searchkey'),function($query){
            $key=request('searchkey');
            $query->where('book_name','like','%'.$key.'%');
        })
          ->paginate(5);
        
           return view('admin/showticket',compact('tickets'));
       }
    



       private function getTicketData($request){
        return [
            'book_name'=>$request->book_name,
            'child_num'=>$request->child_num,
            'student_num'=>$request->student_num,
            'regular_num'=>$request->regular_num,
            't_date'=>$request->t_date,



        ];

    }

}
