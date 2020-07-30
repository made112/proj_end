
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap2.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<section>
    <h1 id="participate" style="text-align: center;">معرض المشاركات</h1>
</section>


<section class="container d-flex align-content-start flex-wrap gallery">

    <div  class="gallery_button"> <a href="{{url('view/1')}}"> <button><pre style= "color: white "  >      رسومات    </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-photo/2')}}" ><button><pre style="color: white" >        صور         </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view/3')}}"><button><pre style="color: white" >      مقالات       </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view/4')}}"> <button><pre style="color: white" >       قصص       </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view/5')}}"> <button><pre style="color: white" >       تصاميم      </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-video/6')}}"> <button><pre style="color: white" >    فيديوهات     </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-info/7')}}"> <button><pre style="color: white" >    انفو جرافيك   </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-motion/8')}}"> <button><pre style="color: white" > موشن جرافيك </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-line/10')}}"> <button><pre style="color: white" >          خط         </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-line/11')}}"> <button><pre style="color: white" >   أبيات شعرية  </pre></button></a>
    </div>
    <div class="gallery_button"> <a href="{{url('view-line/12')}}"><button><pre style="color: white" >  فرص تطوعية  </pre></button></a>
    </div>


</section>


</html>

{{--@extends('layouts.app')--}}
{{--<html lang="en">--}}



{{--<head>--}}
{{--    <style>--}}
{{--        .aaa{--}}

{{--            position: relative;--}}
{{--            top: 100px;--}}

{{--            left: 400px;--}}
{{--            font-size: 40px;--}}
{{--            text-align: center;--}}

{{--        }--}}
{{--        .mmm{--}}
{{--            position: relative;--}}

{{--            left: 400px;--}}
{{--            font-size: 40px;--}}
{{--            text-align: center;--}}

{{--        }--}}
{{--    </style>--}}
{{--    @section('head')--}}

{{--        <title>halo</title>--}}

{{--    @stop--}}
{{--</head>--}}
{{--<body >--}}
{{--<div class="col-md-6">--}}
{{--<div class="aaa">--}}
{{--    <a href="{{url('view/2')}}" class="btn btn-danger">الصور</a>--}}
{{--    <a href="{{url('view/6')}}" class="btn btn-danger"> الفيديو</a>--}}
{{--    <a href="{{url('view/1')}}" class="btn btn-danger">رسومات</a>--}}
{{--    <a href="{{url('view/3')}}" class="btn btn-danger">مقالات</a>--}}
{{--    <a href="{{url('view/4')}}" class="btn btn-danger">قصص</a>--}}
{{--    <a href="{{url('view/5')}}" class="btn btn-danger">تصامبم</a>--}}


{{--</div>--}}
{{--</div>--}}
{{--<br><br><br><br><br><br><br><br><br>--}}


{{--<div class="col-md-6">--}}
{{--<div class="mmm">--}}
{{--    <a href="{{url('view/7')}}" class="btn btn-danger">انفوجرافيك</a>--}}
{{--    <a href="{{url('view-motion/8')}}" class="btn btn-danger">موشن</a>--}}
{{--    <a href="{{url('view/9')}}" class="btn btn-danger">جرافيك</a>--}}
{{--    <a href="{{url('view-line/10')}}"class="btn btn-danger">خط</a>--}}
{{--    <a href="{{url('view/11')}}"class="btn btn-danger">أبيات شعرية</a>--}}
{{--    <a href="{{url('view/12')}}"class="btn btn-danger">فرصة تطوعية</a>--}}


{{--</div>--}}
{{--</div>--}}




{{--</body>--}}






{{--</html>--}}