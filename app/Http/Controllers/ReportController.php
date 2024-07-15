<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

use App\Models\Ticket;
use App\Models\Admin;
class ReportController extends Controller
{
        public function report($id){
           $invoice=Ticket::find($id);
           $admins=Admin::all()->last();
           $pdf = App::make('dompdf.wrapper');
           $print='<div style="margin:20px;padding:20px;">';
          
           $print.='<h1 align="center">Payment receipt</h1>';
           $print.='<p>Receipt No: <b>'.$invoice['id'].'</b></p>';
           $print.='<p>Paid Date: <b>'.$invoice['t_date'].'</b></p>';
           $print.='<p>Name: <b>'.$invoice['book_name'].'</b></p>';
          
           $print.='<hr>';
           $print.='<table style="width: 500px;">';
           $print.='<tr>';
           $print.='<td>child_num</td>';
           $print.='<td>regular_num</td>';
           $print.='<td>student_num</td>';
           $print.='<td>Total Price</td>';
           $print.='</tr>';

           $print.='<tr>';
           $print.='<td> <h3>'.$invoice['child_num'].'</h3></td>';
           $print.='<td> <h3>'.$invoice['regular_num'].'</h3></td>';
           $print.='<td> <h3>'.$invoice['student_num'].'</h3></td>';
           $total=$invoice->regular_num * 3000 +  $invoice->child_num * 2000 +$invoice->student_num * 2500 ;
           $print.='<td> <h3>'.$total.'ks</h3></td>';
           $print.='</tr>';

           $print.='</table>';
           $print.='<hr>';
        //    $print.='<span> Print By: <b>'.$admins['admin_name'].'</b></span>';
        //    $print.='</br>';
           $print.='<span> Print Date: <b>'.date('Y m d').'</b></span>';
           $print.='</div>';
           $pdf->loadHTML($print);  
           return $pdf->stream();

        }
      
     
}