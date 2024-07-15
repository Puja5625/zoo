<?php

namespace App\Http\Controllers;
use App\Models\Fish;
use App\Models\Sponsoranimal;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function fishCreate(Request $request){
        $data= $this->getfishData($request);
        $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
        $request->image->move(public_path('an_image'), $img_name);
        $data['f_image'] =$img_name;
        Fish::create($data);
        return redirect()->route('fish')->with('success', 'Add animal Successfully!!');
       }
       public function show()
       {
          
           $fishs=Fish::paginate(5);
          
          
           return view('fish',compact('fishs'));
       }

       public function vshow()
       {
          
           $fishs=Fish::paginate(5);
          
           return view('visitor/fish',compact('fishs'));
       }

     
       public function sshow()
       {
          
           $fishs=Fish::paginate(5);
          
           return view('sponsor/fish',compact('fishs'));
       }
       public function sfshow($id)
       {
           
            $fish= Fish::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('sponsor/sponsorfish',compact('fish','sponsoranimals'));
       }
       public function finfoshow($id)
       {
           
            $fish= Fish::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('visitor/fishinfo',compact('fish','sponsoranimals'));
       }

       public function edit($id)
       {
           $fish=Fish::where('id',$id)->first()->toArray();
          return view('admin/editfish',compact('fish'));
       }

       public function update(Request $request,string $id)
       {
        $request->validate([
            'image'=>'required|image:jpeg,png,jpg,gif,jfif,svg',
        ]);
   
           $data= $this->getfishData($request);
           $img_name = time(). '.' .$request->image->getClientOriginalName();//39749574.png
           $request->image->move(public_path('an_image'), $img_name);
           $data['f_image'] =$img_name;
        
           Fish::where('id',$id)->update($data);
        
           return redirect()->route('showanimal')->with('warning', 'Update Successfully!!');
       }

       public function destory($id){
        Fish::where('id',$id)->delete();
        return redirect()->route('showanimal')->with('error', 'Successfully deleted!!');
      }



       private function getfishData($request){
       
       
        return [
            'f_name'=>$request->f_name,
            'f_species_name'=>$request->f_species_name,
            'f_dob'=>$$request->f_dob,
           
            'f_gender'=>$request->f_gender,
            'f_avg_lifespan' =>$request->f_avg_lifespan,
            'f_dietary_req' =>$request->f_dietary_req,
            'f_joindate' =>$request->f_joindate,
            'f_height' =>$request->f_height,
            'f_weight' =>$request->f_weight,
            'f_description' =>$request->f_description,
           
            'f_body_temp' =>$request->f_body_temp,
            'f_water_type' =>$request->f_water_type,
            'f_color_variant' =>$request->f_color_variant,
          


        ];
    }

}
