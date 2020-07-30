<?php

namespace App\Http\Controllers;

use App\Http;
use App\Http\Requests\SharingRequest;
use App\vote;
use App\sharing;
use GuzzleHttp\Psr7\Request;

class SharingController extends Controller
{
    public function create()
    {
        return view('sharing.create');
    }

    public function show()
    {
        return view('sharing.show');
    }


    public function store(SharingRequest $request)
    {


        if ($request->hasFile('photo')) {
            //            dd($request->file('photo'));

            $file_name_img = $this->saveImage($request->photo, 'public/photo');


            sharing::create([

                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'photo' => $file_name_img,
                'line' => $request->input('line2'),



            ]);
        } elseif ($request->hasFile('video')) {
            $file_name_video = $this->saveVideo($request->video, 'public/video');
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,

                'video' => $file_name_video,



            ]);
        } elseif ($request->input('line')) {
            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,


                'line' => $request->input('line'),



            ]);
        } elseif ($request->input('speak')) {

            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'speak' => $request->speak


            ]);
        }


//        elseif ($request->input('line2')) {
//            $file_name_img = $this->saveImage($request->photo, 'public/photo');
//
//            //            dd($request->input('line'));
//            sharing::create([
//                'name' => $request->name,
//                'Prof_name' => $request->Prof_name,
//                'nationality' => $request->nationality,
//                'email' => $request->email,
//                'edu_area' => $request->management,
//                'edu_level' => $request->edulevel,
//                'school' => $request->school,
//                'class' => $request->class,
//                'mobile' => $request->mobile,
//                'edu_share' => $request->areashare,
//                'sharing_type' => $request->sharesort,
//                'photo' => $file_name_img,
//
//
//                'line2' => $request->input('line2'),
//
//
//
//
//

//
//            ]);
        elseif ($request->hasFile('video')) {
            $file_name_video = $this->saveVideo($request->video, 'public/video');
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,

                'video' => $file_name_video,



            ]);
        }




        return redirect()->back()->with('flash_message_success', 'تم إضافة المشاركة بنجاح');
    }


    function saveImage($photo, $folder)
    {
        //save photo in folder
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/photo');
        $photo->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveVideo($video, $folder)
    {
        //save video in folder
        $file_extension = $video->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/video');
        $video->move($destinationPath, $file_name);

        return $file_name;
    }

    function saveFile($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/file');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }

    /**
     * filtering data throught ajax
     * @param int $id
     */
    public function filterDataVideo() {
        $data = sharing::where('edu_share', request()->id)->get();
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-md-4">';
            $html_data .= '<section class="container d-flex align-content-start flex-wrap">';
            $html_data .= '<div class="gallery_option">';
            $html_data .= '<video width="320" height="320" controls>';
            $html_data .= '<source src="' .asset('video/'.$item->video.'') . '" type="video/mp4">';
            $html_data .= '</video>';
            $html_data .= '<div class="student_info">';
            $html_data .= '<td><a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-success"> التصويت</a></td>';
            $html_data .= '<span class="student_name">' . $item->name . '.</span>';
            $html_data .= '<span><label class="vote_average">معدل التصويت: </label></span>';
            $html_data .= '<label class="vote_button">* * * * *</label>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</section>';
            $html_data .= '</div>';
        }
        return $html_data;
    }
    public function filterDataPhoto() {
        $data = sharing::where('edu_share', request()->id)->get();
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-md-4">';
            $html_data .= '<section class="container d-flex align-content-start flex-wrap">';
            $html_data .= '<div class="gallery_option">';
            $html_data .='<img style="height: 320px;width: 320px"src= "'.asset('photo/'.$item->photo.'').'"> ';

            $html_data .= '<div class="student_info">';
            $html_data .= '<td> <a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-success"> التصويت</a> </td>';

            $html_data .= '<span class="student_name">' . $item->name . '.</span>';
            $html_data .= '<span><label class="vote_average">معدل التصويت: </label></span>';

            $html_data .= '<label class="vote_button">* * * * *</label>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</section>';
            $html_data .= '</div>';


        }
        return $html_data;
    }

}
