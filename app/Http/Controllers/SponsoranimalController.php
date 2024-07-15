<?php

namespace App\Http\Controllers;
use App\Models\Sponsoranimal;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsoranimalController extends Controller
{

   

    public function sponsoranimalCreate(Request $request,$id){
        $data= $this->getsponsoranimalData($request,$id);
       
        Sponsoranimal::create($data);
        
        $sponsors= Sponsor::where('id',$id)->first();
       
        return redirect()->route('sponsoranimal','sponsors')->with('success', 'sposor animal successfully && look at the privious page!!');
       }

       public function show()
       {
           $sponsoranimals=Sponsoranimal::when(request('searchkey'),function($query){
            $key=request('searchkey');
            $query->where('sponsor_animal','like','%'.$key.'%');
        })
          ->paginate(5);
         
           
           return view('admin/showsponsoranimal',compact('sponsoranimals'));
       }


       public function destory($id){
        Sponsoranimal::where('id',$id)->delete();
        return redirect()->route('viewsponsoranimal')->with('error', 'Delete Successfully!!');
      }
  



       private function getsponsoranimalData($request,$id){
       
        return [
           'sponsor_id'=>$id,
           'total_price'=>$request->total_price,
           'start_date'=>$request->start_date,
           'end_date'=>$request->end_date,
           'sponsor_animal'=>$request->sponsor_animal,
           $img_name = time(). '.' .$request->image->getClientOriginalName(),//39749574.png
           $request->image->move(public_path('s_image'), $img_name),
           'signage_photo'=> $img_name,
           's_url'=>$request->s_url,

        ];
    }

}
