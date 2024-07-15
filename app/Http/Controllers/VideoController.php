<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

  
    public function videoCreate(Request $request){
        $data= $this->getvideoData($request);
        Video::create($data);
        return redirect()->route('showgallery')->with('success', 'Image Added Successfully!!');
       }

     



       private function getvideoData($request){
        
        return [
            
            $img_name = time(). '.' .$request->video->getClientOriginalName(),//39749574.png
            $request->video->move(public_path('videos'), $img_name),
            'v_file_name'=> $img_name,

          
        ];

    }

}
