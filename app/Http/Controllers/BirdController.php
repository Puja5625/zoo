<?php

namespace App\Http\Controllers;
use App\Models\Bird;
use App\Models\Sponsoranimal;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function birdCreate(Request $request){
        $data= $this->getbirdData($request);
        $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
        $request->image->move(public_path('an_image'), $img_name);
        $data['b_image'] =$img_name;
        Bird::create($data);
        return redirect()->route('bird')->with('success', 'Add animal Successfully!!');
       }

       public function show()
       {
        
           $birds=Bird::paginate(5);
       
           return view('bird',compact('birds'));
       }

       public function vshow()
       {
        
           $birds=Bird::paginate(5);
       
           return view('visitor/bird',compact('birds'));
       }
       public function sshow()
       {
        
           $birds=Bird::paginate(5);
       
           return view('sponsor/bird',compact('birds'));
       }
       public function sbshow($id)
       {
           
            $bird= Bird::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('sponsor/sponsorbird',compact('bird','sponsoranimals'));
       }
       public function binfoshow($id)
       {
           
            $bird= Bird::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('visitor/birdinfo',compact('bird','sponsoranimals'));
       }

       public function edit($id)
       {
           $bird=Bird::where('id',$id)->first()->toArray();
          return view('admin/editbird',compact('bird'));
       }

       public function update(Request $request,string $id)
       {
        $request->validate([
            'image'=>'required|image:jpeg,png,jpg,gif,jfif,svg',
        ]);
   
           $data= $this->getbirdData($request);
           $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
           $request->image->move(public_path('an_image'), $img_name);
           $data['b_image'] =$img_name;
        
           Bird::where('id',$id)->update($data);
        
           return redirect()->route('showanimal')->with('warning', 'Update Successfully!!');
       }

       public function destory($id){
        Bird::where('id',$id)->delete();
        return redirect()->route('showanimal')->with('error', 'Successfully deleted!!');
      }






       private function getbirdData($request){
       
        return [
            'b_name'=>$request->b_name,
            'b_species_name'=>$request->b_species_name,
            'b_dob'=>$request->b_dob,
            'b_gender'=>$request->b_gender,
            'b_avg_lifespan' =>$request->b_avg_lifespan,
            'b_dietary_req' =>$request->b_dietary_req,
            'b_joindate' =>$request->b_joindate,
            'b_height' =>$request->b_height,
            'b_weight' =>$request->b_weight,
            'b_description' =>$request->b_description,
           
            'b_nest_const' =>$request->b_nest_const,
            'b_cluth_size' =>$request->b_clutch_size,
            'b_wingspan' =>$request->b_wingspan,
            'b_ability_fly' =>$request->b_ability_fly,
            'b_color_variant' =>$request->b_color_variant,


        ];

    }


}
