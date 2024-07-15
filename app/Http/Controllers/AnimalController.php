<?php

namespace App\Http\Controllers;
use App\Models\Mammal;
use App\Models\Bird;
use App\Models\Fish;
use App\Models\Reptile;
use App\Models\Amphibian;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    function mammal(){
        return view('admin/mammal');
    }
    function bird(){
        return view('admin/bird');
    }
    function fish(){
        return view('admin/fish');
    }
    function reptile(){
        return view('admin/reptile');
    }
    function amphibian(){
        return view('admin/amphibian');
    }

    function sponsoranimal($id){
        $sponsors=Sponsor::all()->last();
        $mammal=Mammal::find($id);
        return view('sponsor/applysponsoranimal',compact('sponsors','mammal'));
    }
    function secsponsoranimal($id){
        $sponsors=Sponsor::all()->last();
        $bird=Bird::find($id);
        return view('sponsor/applysponsoranimal',compact('sponsors','bird'));
    }
   
    function thirdsponsoranimal($id){
        $sponsors=Sponsor::all()->last();
        $fish=Fish::find($id);
        return view('sponsor/applysponsoranimal',compact('sponsors','fish'));
    }
    function fourthsponsoranimal($id){
        $sponsors=Sponsor::all()->last();
        $reptile=Reptile::find($id);
        return view('sponsor/applysponsoranimal',compact('sponsors','reptile'));
    }
    function fifthsponsoranimal($id){
        $sponsors=Sponsor::all()->last();
        $amphibian=Amphibian::find($id);
        return view('sponsor/applysponsoranimal',compact('sponsors','amphibian'));
    }

    

    public function show()
    {
        
        $mammals=Mammal::when(request('msearchkey'),function($query){
            $key=request('msearchkey');
            $query->where('m_name','like','%'.$key.'%');
        })
          ->paginate(5);

        $birds=Bird::when(request('bsearchkey'),function($query){
            $key=request('bsearchkey');
            $query->where('b_name','like','%'.$key.'%');
        })
          ->paginate(5);

        $fishs=Fish::when(request('fsearchkey'),function($query){
            $key=request('fsearchkey');
            $query->where('f_name','like','%'.$key.'%');
        })
          ->paginate(5);

        $reptiles=Reptile::when(request('rsearchkey'),function($query){
            $key=request('rsearchkey');
            $query->where('r_name','like','%'.$key.'%');
        })
          ->paginate(5);

        $amphibians=Amphibian::when(request('asearchkey'),function($query){
            $key=request('asearchkey');
            $query->where('a_name','like','%'.$key.'%');
        })
          ->paginate(5);



        return view('admin/viewanimal',compact('mammals','birds','fishs','reptiles','amphibians'));
    }
}
