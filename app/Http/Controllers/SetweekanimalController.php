<?php

namespace App\Http\Controllers;
use App\Models\Mammal;
use App\Models\Bird;
use App\Models\Fish;
use App\Models\Reptile;
use App\Models\Amphibian;
use App\Models\Setweekanimal;
use Illuminate\Http\Request;

class SetweekanimalController extends Controller
{
    public function show()
    {
        
        $mammals=Mammal::paginate(3);
        $birds=Bird::paginate(3);
        $fishs=Fish::paginate(3);
        $reptiles=Reptile::paginate(3);
        $amphibians=Amphibian::paginate(3);
        $setanimals=Setweekanimal::all()->last();

        return view('admin/setweekanimal',compact('mammals','birds','fishs','reptiles','amphibians','setanimals'));
    }


    public function setmammalCreate(Request $request,$id){
        
        $data= $this->getSetmammalData($request,$id);
        Setweekanimal::create($data);
      
        
        return redirect()->route('showsetweekanimal')->with('success', 'Set week animal Successfully!!');
       }
     
      
       public function setbirdCreate(Request $request,$id){
        
        $data= $this->getSetbirdData($request,$id);
        Setweekanimal::create($data);
        return redirect()->route('showsetweekanimal')->with('success', 'Set week animal Successfully!!');
       }

       public function setfishCreate(Request $request,$id){
        
        $data= $this->getSetfishData($request,$id);
        Setweekanimal::create($data);
        return redirect()->route('showsetweekanimal')->with('success', 'Set week animal Successfully!!');
       }

       public function setreptileCreate(Request $request,$id){
        
        $data= $this->getSetreptileData($request,$id);
        Setweekanimal::create($data);
        return redirect()->route('showsetweekanimal')->with('success', 'Set week animal Successfully!!');
       }

       public function setamphibianCreate(Request $request,$id){
        
        $data= $this->getSetamphibianData($request,$id);
        Setweekanimal::create($data);
        return redirect()->route('showsetweekanimal')->with('success', 'Set week animal Successfully!!');
       }




       





       private function getSetmammalData($request,$id){
        $mammals= Mammal::where('id',$id)->first();
         return [
             'setweekan_name'=>$mammals['m_name'],
             'setweekan_species_name'=>$mammals['m_species_name'],
             'setweekan_dob'=>$mammals['m_dob'],
             'setweekan_gender'=>$mammals['m_gender'],
             'setweekan_joindate'=>$mammals['m_joindate'],
             'setweekan_description'=>$mammals['m_description'],
             'setweekan_image'=>$mammals['m_image'],
 
 
         ];
 
        }

        private function getSetbirdData($request,$id){
            $birds= Bird::where('id',$id)->first();
             return [
                 'setweekan_name'=>$birds['b_name'],
                 'setweekan_species_name'=>$birds['b_species_name'],
                 'setweekan_dob'=>$birds['b_dob'],
                 'setweekan_gender'=>$birds['b_gender'],
                 'setweekan_joindate'=>$birds['b_joindate'],
                 'setweekan_description'=>$birds['b_description'],
                 'setweekan_image'=>$birds['b_image'],
     
     
             ];
     
            }
            private function getSetfishData($request,$id){
                $fishs= Fish::where('id',$id)->first();
                 return [
                     'setweekan_name'=>$fishs['f_name'],
                     'setweekan_species_name'=>$fishs['f_species_name'],
                     'setweekan_dob'=>$fishs['f_dob'],
                     'setweekan_gender'=>$fishs['f_gender'],
                     'setweekan_joindate'=>$fishs['f_joindate'],
                     'setweekan_description'=>$fishs['f_description'],
                     'setweekan_image'=>$fishs['f_image'],
         
         
                 ];
         
                }

                private function getSetreptileData($request,$id){
                    $reptiles= Reptile::where('id',$id)->first();
                     return [
                         'setweekan_name'=>$reptiles['r_name'],
                         'setweekan_species_name'=>$reptiles['r_species_name'],
                         'setweekan_dob'=>$reptiles['r_dob'],
                         'setweekan_gender'=>$reptiles['r_gender'],
                         'setweekan_joindate'=>$reptiles['r_joindate'],
                         'setweekan_description'=>$reptiles['r_description'],
                         'setweekan_image'=>$reptiles['r_image'],
             
             
                     ];
             
                    }

                 private function getSetamphibianData($request,$id){
                        $amphibians= amphibian::where('id',$id)->first();
                         return [
                             'setweekan_name'=>$amphibians['a_name'],
                             'setweekan_species_name'=>$amphibians['a_species_name'],
                             'setweekan_dob'=>$amphibians['a_dob'],
                             'setweekan_gender'=>$amphibians['a_gender'],
                             'setweekan_joindate'=>$amphibians['a_joindate'],
                             'setweekan_description'=>$amphibians['a_description'],
                             'setweekan_image'=>$amphibians['a_image'],
                 
                 
                         ];
                 
                        }


}
