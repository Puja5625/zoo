<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use App\Models\Classification;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    function vacancy(){
        return view('admin/registervacancy');
    }

    public function vacancyCreate(Request $request){
        $data= $this->getVacancyData($request);

        Vacancy::create($data);
        return redirect()->route('regvacancy')->with('success', 'Vacancy added successfully!!');
       }

    public function show()
    {
        $vacancies=Vacancy::all()->toArray();
      
        return view('vacancy',compact('vacancies'));
    }
    
    public function vshow()
    {
        $vacancies=Vacancy::all()->toArray();
       
        return view('visitor/vacancy',compact('vacancies'));
    }
    public function vacancyShow()
    {
        $vacancies=Vacancy::when(request('searchkey'),function($query){
            $key=request('searchkey');
            $query->where('v_position','like','%'.$key.'%');
        })
          ->paginate(5);

        return view('admin/viewactivevacancy',compact('vacancies'));
    }

    public function edit($id)
    {
        $vacancy=Vacancy::where('id',$id)->first()->toArray();
       return view('admin/editvacancy',compact('vacancy'));
    }

    public function update(Request $request,string $id)
    {

        $data= $this->getVacancyData($request);
        Vacancy::where('id',$id)->update($data);

        return redirect()->route('activevacancy')->with('warning', 'Update Successfully!!');
    }

    public function destory($id){
        Vacancy::where('id',$id)->delete();
        return redirect()->route('activevacancy')->with('success', 'Successfully deleted!!');
      }




       private function getVacancyData($request){
        return [
            'v_position'=>$request->v_position,
            'v_description'=>$request->v_description,
            'v_type'=>$request->v_type,
            'v_start_date'=>$request->v_start_date,
            'v_end_date'=>$request->v_end_date,



        ];

    }
}
