<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\Classification;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function gallery(){
        return view('admin/addgallery');
    }

    public function galleryCreate(Request $request){
        $data= $this->getgalleryData($request);
        Gallery::create($data);
        return redirect()->route('showgallery')->with('success', 'Image Added Successfully!!');
       }

       public function show()
       {
           $galleries=Gallery::all()->toArray();
           $videos=Video::all()->toArray();
   
           return view('admin/addgallery',compact('galleries','videos'));
       }

       public function gshow()
       {
           $galleries=Gallery::all()->toArray();
           $videos=Video::all()->toArray();
         
           return view('gallery',compact('galleries','videos'));
       }
       public function vshow()
       {
           $galleries=Gallery::all()->toArray();
           $videos=Video::all()->toArray();
          
           return view('visitor/gallery',compact('galleries','videos'));
       }
       public function sshow()
       {
           $galleries=Gallery::all()->toArray();
           $videos=Video::all()->toArray();
          
           return view('sponsor/gallery',compact('galleries','videos'));
       }

       public function destory($id){
        Gallery::where('id',$id)->delete();
        Video::where('id',$id)->delete();
        return redirect()->route('showgallery')->with('error', 'Successfully deleted!!');
      }

      


       private function getGalleryData($request){
        
        return [
            
            $img_name = time(). '.' .$request->image->getClientOriginalName(),//39749574.png
            $request->image->move(public_path('images'), $img_name),
            'g_file_name'=> $img_name,

          
        ];

    }
   
}
