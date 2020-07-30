<?php

namespace App\Http\Controllers;

use App\sharing;
use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function view($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.video')->with('data',$data);


    }
    public function viewmotion($sharing_id){
    $data = sharing::where('sharing_type',$sharing_id)->get();
    return view('sharing.motion')->with('data',$data);


}
    public function viewline($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.line')->with('data',$data);


    }
    public function viewphoto($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.photo')->with('data',$data);


    }
    public function viewvideo($sharing_id){
//        $data = sharing::where('sharing_type', '=','6')
        $data = sharing::where('sharing_type',$sharing_id)->get();

        return view('sharing.video')->with('data',$data);


    }
    public function viewenfo($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.enfograph')->with('data',$data);


    }
}
