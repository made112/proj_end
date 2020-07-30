<?php

namespace App\Http\Controllers;

use App\vote;
use Illuminate\Http\Request;
use App\Http\Requests\VoteRequest;
use phpDocumentor\Reflection\Types\Void_;


class VoteController extends Controller
{
    public function store( VoteRequest $request    ){

        vote::create([
            'name' =>$request->name ,
            'email' =>$request->email ,
            'avg_percent'=>$request->avg_percent,
            'sharing_id'=>$request->sharing_id,
            'sharing_type'=>$request->s

        ]);

        return redirect()->back()->with('flash_message_success' , 'تم التصويت بنجاح' );




    }
    public function index(){
        $data =  vote::orderBy('avg_percent','desc')->get();
        return view('sharing.end', compact('data')) ;
}
}
