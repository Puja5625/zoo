<?php

namespace App\Http\Controllers;
use App\Models\Mammal;
use App\Models\Sponsoranimal;
use Illuminate\Http\Request;

class MammalController extends Controller
{
    public function mammalCreate(Request $request){
        $data= $this->getmammalData($request);
        $img_name = time(). '.' .$request->image->getClientOriginalExtension();//39749574.png
        $request->image->move(public_path('an_image'), $img_name);
        $data['m_image'] =$img_name;
        Mammal::create($data);
        return redirect()->route('mammal')->with('success', 'Add animal Successfully!!');
       }


       public function show()
       {
           
           $mammals=Mammal::paginate(5);

           return view('mammal',compact('mammals'));
       }
       public function vshow()
       {
           
           $mammals=Mammal::paginate(5);

           return view('visitor/mammal',compact('mammals'));
       }

       public function sshow()
       {
           
           $mammals=Mammal::paginate(5);

           return view('sponsor/mammal',compact('mammals'));
       }
       public function smshow($id)
       {
           
            $mammal= Mammal::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('sponsor/sponsormammal',compact('mammal','sponsoranimals'));
       }
       public function minfoshow($id)
       {
           
            $mammal= Mammal::where('id',$id)->first();
            $sponsoranimals=Sponsoranimal::all();
           return view('visitor/mammalinfo',compact('mammal','sponsoranimals'));
       }

       public function edit($id)
       {
           $mammal=Mammal::where('id',$id)->first()->toArray();
          return view('admin/editmammal',compact('mammal'));
       }

       public function update(Request $request,string $id)
       {
        $request->validate([
            'image'=>'required|image:jpeg,png,jpg,gif,jfif,svg',
        ]);
       
   
           $data= $this->getmammalData($request);
           $img_name = time(). '.' .$request->image->getClientOriginalExtension();//39749574.png
           $request->image->move(public_path('an_image'), $img_name);
           $data['m_image'] =$img_name;
        
           Mammal::where('id',$id)->update($data);
        
           return redirect()->route('showanimal')->with('warning', 'Update Successfully!!');
       }

       public function destory($id){
        Mammal::where('id',$id)->delete();
        return redirect()->route('showanimal')->with('error', 'Successfully deleted!!');
      }



       private function getmammalData($request){
       
        return [
            'm_name'=>$request->m_name,
            'm_species_name'=>$request->m_species_name,
            'm_dob'=>$request->m_dob,
            'm_gender'=>$request->m_gender,
            'm_avg_lifespan' =>$request->m_avg_lifespan,
            'm_dietary_req' =>$request->m_dietary_req,
            'm_joindate' =>$request->m_joindate,
            'm_height' =>$request->m_height,
            'm_weight' =>$request->m_weight,
            'm_description' =>$request->m_description,
           
            'm_gest_period' =>$request->m_gest_period,
            'm_category' =>$request->m_category,
            'm_avg_body_temp' =>$request->m_avg_body_temp,


        ];

    }
}
