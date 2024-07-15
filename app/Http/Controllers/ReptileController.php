<?php

namespace App\Http\Controllers;
use App\Models\Reptile;
use App\Models\Sponsoranimal;
use Illuminate\Http\Request;

class ReptileController extends Controller
{
    public function reptileCreate(Request $request){
        $data= $this->getreptileData($request);
        $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
        $request->image->move(public_path('an_image'), $img_name);
        $data['r_image'] =$img_name;
        Reptile::create($data);
        return redirect()->route('reptile')->with('success', 'Add animal Successfully!!');
       }

       public function show()
       {
           
           $reptiles=Reptile::paginate(5);
         
           return view('reptile',compact('reptiles'));
       }

       public function vshow()
       {
           
           $reptiles=Reptile::paginate(5);
         
           return view('visitor/reptile',compact('reptiles'));
       }
     
       public function sshow()
       {
           
           $reptiles=Reptile::paginate(5);
         
           return view('sponsor/reptile',compact('reptiles'));
       }
       public function srshow($id)
       {
           
            $reptile= Reptile::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('sponsor/sponsorreptile',compact('reptile','sponsoranimals'));
       }
       public function rinfoshow($id)
       {
           
            $reptile= Reptile::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('visitor/reptileinfo',compact('reptile','sponsoranimals'));
       }


       public function edit($id)
       {
           $reptile=Reptile::where('id',$id)->first()->toArray();
          return view('admin/editreptile',compact('reptile'));
       }

       public function update(Request $request,string $id)
       {
        $request->validate([
            'image'=>'required|image:jpeg,png,jpg,gif,jfif,svg',
        ]);
   
           $data= $this->getreptileData($request);
           $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
           $request->image->move(public_path('an_image'), $img_name);
           $data['r_image'] =$img_name;
        
           Reptile::where('id',$id)->update($data);
        
           return redirect()->route('showanimal')->with('warning', 'Update Successfully!!');
       }

       public function destory($id){
        Reptile::where('id',$id)->delete();
        return redirect()->route('showanimal')->with('error', 'Successfully deleted!!');
      }






       private function getreptileData($request){
        
        return [
            'r_name'=>$request->r_name,
            'r_species_name'=>$request->r_species_name,
            'r_dob'=>$request->r_dob,
            'r_gender'=>$request->r_gender,
            'r_avg_lifespan' =>$request->r_avg_lifespan,
            'r_dietary_req' =>$request->r_dietary_req,
            'r_joindate' =>$request->r_joindate,
            'r_height' =>$request->r_height,
            'r_weight' =>$request->r_weight,
            'r_description' =>$request->r_description,
           
            'r_rep_type' =>$request->r_rep_type,
            'r_cluth_size' =>$request->r_clutch_size,
            'r_num_offspring' =>$request->r_num_offspring,
          


        ];

    }
}
