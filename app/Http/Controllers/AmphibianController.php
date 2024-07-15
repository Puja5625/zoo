<?php

namespace App\Http\Controllers;
use App\Models\Amphibian;
use App\Models\Sponsoranimal;
use Illuminate\Http\Request;

class AmphibianController extends Controller
{
    public function amphibianCreate(Request $request){
        $data= $this->getamphibianData($request);
        $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
        $request->image->move(public_path('an_image'), $img_name);
        $data['a_image'] =$img_name;
        Amphibian::create($data);
        return redirect()->route('amphibian')->with('success', 'Add animal Successfully!!');
       }

       public function show()
       {
          
           $amphibians=Amphibian::paginate(5);
   
           return view('amphibian',compact('amphibians'));
       }

       public function vshow()
       {
          
           $amphibians=Amphibian::paginate(5);
   
           return view('visitor/amphibian',compact('amphibians'));
       }

       public function sshow()
       {
          
           $amphibians=Amphibian::paginate(5);
   
           return view('sponsor/amphibian',compact('amphibians'));
       }

       public function sashow($id)
       {
           
            $amphibian= Amphibian::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('sponsor/sponsoramphibian',compact('amphibian','sponsoranimals'));
       }
       public function ainfoshow($id)
       {
           
            $amphibian= Amphibian::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('visitor/amphibianinfo',compact('amphibian','sponsoranimals'));
       }


       public function edit($id)
       {
           $amphibian=Amphibian::where('id',$id)->first()->toArray();
          return view('admin/editamphibian',compact('amphibian'));
       }

       public function update(Request $request,string $id)
       {
        $request->validate([
            'image'=>'required|image:jpeg,png,jpg,gif,jfif,svg',
        ]);
   
           $data= $this->getamphibianData($request);
           $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
           $request->image->move(public_path('an_image'), $img_name);
           $data['a_image'] =$img_name;
        
           Amphibian::where('id',$id)->update($data);
        
           return redirect()->route('showanimal')->with('warning', 'Update Successfully!!');
       }

       public function destory($id){
        Amphibian::where('id',$id)->delete();
        return redirect()->route('showanimal')->with('error', 'Successfully deleted!!');
      }




       private function getamphibianData($request){
       
        return [
            'a_name'=>$request->a_name,
            'a_species_name'=>$request->a_species_name,
            'a_dob'=>$request->a_dob,
            'a_gender'=>$request->a_gender,
            'a_avg_lifespan' =>$request->a_avg_lifespan,
            'a_dietary_req' =>$request->a_dietary_req,
            'a_joindate' =>$request->a_joindate,
            'a_height' =>$request->a_height,
            'a_weight' =>$request->a_weight,
            'a_description' =>$request->a_description,
         
            'a_rep_type' =>$request->a_rep_type,
            'a_cluth_size' =>$request->a_clutch_size,
            'a_num_offspring' =>$request->a_num_offspring,
          


        ];

    }
}
