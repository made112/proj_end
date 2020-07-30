
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('asset/css/bootstrap2.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
</head>
<body>

<section>
        <h1 id="participate" style="text-align: center;">معرض المشاركات</h1>
</section>

<section class="gallery_filters">
        <select class="form-control" id="exampleFormControlSelect1">
                <option>منطقة 1</option>
                <option>منطقة 2</option>
                <option>منطقة 3</option>
                <option>منطقة 4</option>
                <option>منطقة 5</option>
                <option>منطقة 6</option>
                <option>منطقة 7</option>
                <option>منطقة 8</option>
                <option>منطقة 9</option>
                <option>منطقة 10</option>
                <option>منطقة 11</option>
                <option>منطقة 12</option>
                <option>منطقة 13</option>
        </select><br><br>

        <button>ترتيب حسب الأعلى تصويت</button>
</section>
@foreach($data as $item)

        <section class="container d-flex align-content-start flex-wrap">

                <div class="gallery_option">
                        <td>
                                <a href="{{asset('file/'.$item->file.'')}}"> {{($item->file.'')}}</a>
                        </td>





                        <div class="student_info">
                                <td> <a href="{{url('view-vote/ '.$item->id.'')}}" class="btn btn-success"> التصويت</a> </td>

                                <span class="student_name">{{$item->name}} </span>
                                <span><label class="vote_average">معدل التصويت: </label></span>

                                <label class="vote_button">* * * * *</label>
                        </div>
                </div>



        </section>
</body>
@endforeach


</html>
{{--@extends('layouts.app')--}}
{{--<html lang="en">--}}



{{--<head>--}}
{{--        <style>--}}
{{--                #image{--}}
{{--                        height: 320px;--}}
{{--                        width: 320px;--}}
{{--                }--}}
{{--                .vv{--}}
{{--                        display: none;--}}
{{--                }--}}

{{--        </style>--}}

{{--    @section('head')--}}

{{--        <title>halo</title>--}}

{{--    @stop--}}
{{--</head>--}}
{{--<body >--}}









{{--                @foreach($data as $item)--}}


{{--                        <table class="table table-bordered table-dark">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                        <th scope="col">ID</th>--}}
{{--                        <th scope="col"> المشاركة</th>--}}
{{--                        <th scope="col">اسم المشارك</th>--}}

{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                        <td>{{$item -> id}}</td>--}}

{{--                    <td> <video width="320" height="240" controls>--}}
{{--                            <source src="{{asset('video/'.$item->video.'')}}" type="video/mp4">--}}
{{--                        </video>--}}
{{--                    </td>--}}
{{--                        <td>{{$item->sharing_type}}</td>--}}
{{--                    <td> <a href="{{url('view-vote/ '.$item->id.'')}}" class="btn btn-success"> التصويت</a> </td>--}}


{{--                </tr>--}}

{{--                </tbody>--}}
{{--                                @endforeach--}}
{{--        </table>--}}

{{--</body>--}}







{{--</html>--}}


{{--                                <td id="image">--}}
{{--    <img src="{{asset('photo/'.$item->photo.'')}}">--}}

{{--</td>--}}








{{--                        <td> {{$item->line}} </td>--}}

{{--                        <td class="vv">--}}
{{--                        <label class="form-control">{{$item->name}} </label>--}}
{{--                        </td>--}}
{{--                        \--}}



{{--                        --}}{{--                <td>--}}
{{--                        --}}{{--                        <img  style="width: 90px; height: 90px;" src="{{asset('/images/offers/'.$offer->photo)}}">--}}
{{--                        --}}{{--                </td>--}}










{{--@foreach($data as $item)--}}
{{--        <div class="form-control">--}}
{{--                <label class="form-control">  {{$item->name}} </label>--}}
{{--        </div>--}}
{{--        <a href="" class="btn-block-danger">التصويت </a>--}}





{{--@endforeach--}}
{{--<script--}}

{{--        src="https://code.jquery.com/jquery-3.5.1.min.js"--}}
{{--        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script>--}}
{{--        $( document ).ready(function() {--}}
{{--                $('#sharesort').on('change', function() {--}}
{{--                        $('.post_type').css('display','none');--}}
{{--                        if(this.value == 2){--}}
{{--                                $('#posts_img').css('display','block');--}}
{{--                        }--}}
{{--                        if(this.value == 6){--}}
{{--                                $('#posts_video').css('display','block');--}}
{{--                        }--}}
{{--                        if(this.value == 10){--}}
{{--                                $('#posts_line').css('display','block');--}}
{{--                        }--}}
{{--                        if(this.value == 8){--}}
{{--                                $('#posts_motion').css('display','block');--}}
{{--                        }--}}

{{--                        if(this.value == 11){--}}
{{--                                $('#posts_speak').css('display','block');--}}
{{--                        }--}}

{{--                });--}}
{{--        });--}}
{{--</script>--}}










