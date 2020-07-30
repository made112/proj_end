
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <style>
        body{
            background-image: url("{{asset('img/back2.jpg')}}");
            background-repeat: no-repeat;
            background-position:center ;
            background-size: cover;
        }
        #participate{
            font-size: 40px;
        }
        #posts_img{
            display: none;
        }
        #posts_video{
            display: none;
        }
        .post_type{
            display: none;
        }
        #posts_speak{
            display: none;
        }
        #posts_line{
            display: none;
        }
        label{
            font-size: 20px;
            font-family: Algerian;
            color: white;
            font-family: SansArabLight;
        }
        #participate{
            font-family: TheSansArabic-Light ;
            font-size: 50px;
            color: white;
        }
    </style>
    <link href="fonts/TheSans-Bold.otf">
    <link href="fonts/The-Sans-Plain.otf">
    <link href="fonts/TheSansArabic-Light.otf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>





<section>

    <h1 id="participate" style="text-align: center;">مشاركة</h1>
</section>

@if(Session::has('flash_message_success'))
    <div  class="alert alert-success alert-block">
        <strong>{!!session('flash_message_success')!!}</strong>
    </div>
@endif
<body>



<section class="container d-flex align-content-center flex-wrap">
    <form method="POST" action="{{route('sharing.store')}}" enctype="multipart/form-data">
        @csrf


        <div class="container">
            <div class="col-md-3">
                <label for="occupational_report">الإسم</label>
                <input type="text" class="form-control" id="occupational_report" name="name">
                @error('name')
                <small class="form-text " style="color: red">{{$message}}</small>
                @enderror
            </div>


            <div class="col-md-3">
                <label for="occupational_report" style="font-size: 20px">السجل المهني </label>
                <input type="text" class="form-control" id="occupational_report" name="Prof_name">
                @error('Prof_name')
                <small class="form-text " style="color: red">{{$message}}</small>
                @enderror
            </div>



            <div class="col-md-3">

                <label for="occupational_report">البريد الإلكترني</label>
                <input type="text" class="form-control" id="occupational_report" name="email">
                @error('email')
                <small class="form-text " style="color: red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-3">

                <div class="form-group">

                    <label for="nationality">الجنسية</label>
                    <input type="text" class="form-control" id="nationality" name="nationality">
                    @error('nationality')
                    <small class="form-text " style="color: red">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <br>  <br>







        <div class="container">

            <div class="col-md-4">
                <label for="school">المدرسة</label>
                <input type="text" id="school " class="form-control" name="school">
                @error('school')
                <small class="form-text " style="color: red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-4">


                <label for="class">الصف</label>
                <input type="text" id="class"  class="form-control" name="class">
                @error('class')
                <small class="form-text " style="color: red">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">


                <label for="phone">رقم الجوال</label>
                <input type="text" id="phone" class="form-control" name="mobile">
                @error('mobile')
                <small class="form-text " style="color: red"> {{$message}}</small>
                @enderror
            </div>
        </div>
        <br>   <br>



        <div class="container">

            <div class="col-md-6">


                <label  for="exampleFormControlSelect1"> المنطقة التعليمية </label>
                <select name = "management" class="form-control" id="exampleFormControlSelect1 ">

                    <option value="">  </option>


                    <option  value="الإدارة العامة للتعليم بمنطقة"> الإدارة العامة للتعليم بمنطقة الرياض </option>
                    <option value="إدارة التعليم بمحافظة القويعية"> إدارة التعليم بمحافظة القويعية</option>
                    <option value="لتعليم بمحافظة حوطة بني تميم والحريق">  التعليم بمحافظة حوطة بني تميم والحريق</option>
                    <option value="إدارة التعليم بمحافظة الأفلاج " > إدارة التعليم بمحافظة الأفلاج</option>
                    <option value="إدارة التعليم بمحافظة وادي الدواسر">إدارة التعليم بمحافظة وادي الدواسر</option>
                    <option value ="إدارة التعليم بمحافظة المجمعة">=""إدارة التعليم بمحافظة المجمعة</option>
                    <option value = "إدارة التعليم بمحافظة الغاط">إدارة التعليم بمحافظة الغاط</option>
                    <option value="إدارة التعليم بمحافظة الزلفي" >إدارة التعليم بمحافظة الزلفي</option>
                    <option value="إدارة التعليم بمحافظة عفيف">إدارة التعليم بمحافظة عفيف</option>
                    <option value="إدارة التعليم بمحافظة الدوادمي">إدارة التعليم بمحافظة الدوادمي</option>
                    <option value="الإدارة العامة للتعليم بمنطقة القصيم">الإدارة العامة للتعليم بمنطقة القصيم</option>
                    <option value="12">إدارة التعليم بمحافظة عنيزة</option>
                    <option value="13">إدارة التعليم بمحافظة الرس</option>
                    <option value="14">إدارة التعليم بمحافظة البكيرية</option>
                    <option value="15">إدارة التعليم بمحافظة المذنب</option>
                    <option value="16">الإدارة العامة للتعليم بالمنطقة الشرقية</option>
                    <option value="17">الإدارة العامة للتعليم بمحافظة الأحساء</option>
                    <option value="18">إدارة التعليم بمحافظة حفر الباطن</option>
                    <option value="19">الإدارة العامة للتعليم بمنطقة الجوف</option>
                    <option value="20">الإدارة العامة للتعليم بمنطقة تبوك</option>
                    <option value="21">الإدارة العامة للتعليم بمنطقة الحدود الشمالية</option>
                    <option value="32">إدارة التعليم بمحافظة القريات</option>
                    <option value="33">الإدارة العامة للتعليم بمنطقة حائل</option>
                    <option value="34">الإدارة العامة للتعليم بمنطقة مكة المكرمة</option>
                    <option value="78978">الإدارة العامة للتعليم بمحافظة جدة</option>
                    <option value="789">الإدارة العامة للتعليم بمحافظة الطائف</option>
                    <option value="78978">إدارة التعليم بمحافظة القنفذة</option>
                    <option value="22121">إدارة التعليم بمحافظة الليث</option>
                    <option value="565">الإدارة العامة للتعليم بمنطقة المدينة المنورة</option>
                    <option value="4545">إدارة التعليم بمحافظة ينبع</option>
                    <option value="88">إدارة التعليم بمحافظة مهد الذهب</option>
                    <option value="868">إدارة التعليم بمحافظة العلا</option>
                    <option value="66">الإدارة العامة للتعليم بمنطقة عسير</option>
                    <option  value="5654">إدارة التعليم بمحافظة محايل عسير</option>
                    <option value="4565" >إدارة التعليم بمحافظة سراة عبيدة</option>
                    <option value="إدارة التعليم بمحافظة رجال ألمع">إدارة التعليم بمحافظة رجال ألمع</option>
                    <option value="إدارة التعليم بمحافظة بيشة">إدارة التعليم بمحافظة بيشة</option>
                    <option value="إدارة التعليم بمحافظة النماص" >إدارة التعليم بمحافظة النماص</option>
                    <option value="إدارة التعليم بمحافظة المخواة">إدارة التعليم بمحافظة المخواة</option>
                    <option value="إدارة التعليم بمحافظة المخواة">إدارة التعليم بمحافظة المخواة</option>
                    <option value="الإدارة العامة للتعليم بمنطقة جازان">الإدارة العامة للتعليم بمنطقة جازان</option>
                    <option value="إدارة التعليم بمحافظة صبيا">إدارة التعليم بمحافظة صبيا</option>
                    <option value="الإدارة العامة للتعليم بمنطقة نجران">الإدارة العامة للتعليم بمنطقة نجران</option>
                    <option value="إدارة التعليم بمحافظة ظهران الجنوب">إدارة التعليم بمحافظة ظهران الجنوب</option>












                </select>
                @if($errors->has('management'))
                    <span style="color:red;" class="help-block">
              {{ $errors->first('management') }}
         </span>
                @endif

            </div>
            <div class="col-md-6">
                <label for="exampleFormControlSelect1">المنطقة التي سيتم المشاركة في نشاطها</label>
                <select name= "areashare" class="form-control" id="exampleFormControlSelect1" >
                    <option value="">  </option>

                    <option value="1">مصر</option>
                    <option value="5">فلسطين</option>
                    <option value="6">سوريا</option>
                    <option value="45">السعودية</option>
                    <option value="45">الأردن</option>
                    <option value="7">أمريكا</option>
                    <option value="21">ألمانيا</option>
                    <option value="45">الإمارات</option>
                    <option value="456456">دبي</option>
                    <option value="456456">الكويت</option>
                    <option value="85">عمان</option>
                    <option value="1212">فرنسا</option>
                    <option value="75755">قطر</option>
                </select>
                @if($errors->has('areashare'))
                    <span style="color:red;" class="help-block">
              {{ $errors->first('areashare') }}
         </span>
                @endif

            </div>
        </div>
        <br>   <br>
        <div class="container">
            <div class="col-md-6">
                <label for="exampleFormControlSelect1">المرحلة الدراسية</label>
                <select name="edulevel"  class="form-control" id="exampleFormControlSelect1">
                    <option value=""></option>

                    <option value="ابتدائي">ابتدائي</option>
                    <option value="اعدادي">اعدادي</option>
                    <option value="ثانوي">ثانوي</option>
                </select>
                @if($errors->has('edulevel'))
                    <span style="color:red;" class="help-block">
              {{ $errors->first('edulevel') }}
         </span>
                @endif
            </div>

            <div class="col-md-6">
                <label for="sharesort">نوع المشاركة</label>
                <select  name="sharesort" class="form-control" id="sharesort">
                    <option value="">  </option>

                    <option  value="1">رسومات</option>
                    <option value="2">صور</option>
                    <option value="3">مقالات</option>
                    <option value="4">قصص</option>
                    <option value="5">تصامبم</option>
                    <option value="6">فيديو</option>
                    <option value="7">انفوجرافيك</option>
                    <option value="8">موشن</option>
                    <option value="9">جرافيك</option>
                    <option value="10">خط</option>
                    <option value="11"> أبيات شعرية</option>
                    <option value="12"> فرصة تطوعية</option>





                </select>
                @if($errors->has('sharesort'))
                    <span style="color:red;" class="help-block">
              {{ $errors->first('sharesort') }}
         </span>
                @endif

            </div>
        </div>


        <div class="col-md 6">
            <div class="post_type" id="posts_img" >
                <label for="exampleFormControlTextarea1" >اكتب الخط المراد كتابته </label>
                <textarea class="form-control" style="height: 68px" name="line2" id="exampleFormControlTextarea1" ></textarea>

                <input  name="photo" type="file">
            </div>



            </div>

        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <div class="post_type" id="posts_line">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" >اكتب الخط المراد كتابته </label>
                    <textarea class="form-control" style="height: 68px" name="line" id="exampleFormControlTextarea1" ></textarea>
                </div>
            </div>

        </div>




        <div class="col-md-6">
            <div class="post_type" id="posts_video">
                <input name="video" type="file">


            </div>
        </div>

        <div class="col-md-6">
            <div class="post_type" id="posts_speak">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" >اكتب الأبيات الشعرية المراد مشاركتها </label>
                    <textarea class="form-control" style="height: 68px" name="speak" id="exampleFormControlTextarea1" ></textarea>
                </div>
            </div>



        </div>

        <div class="col-md-6">
            <div class="post_type" id="posts_drawn">
                <input type="text">

            </div>
        </div>
        <div class="col-md-6">
            <div class="post_type" id="posts_motion">
                <input class="form-control" name="file" type="file">



            </div>
        </div>

        <input  class="btn btn btn-danger" style="position: relative ; top: 40px ; right: 50px "  type="submit" value="شارك الاّن">





    </form>

</section>


</body>











<script

        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        $('#sharesort').on('change', function() {
            $('.post_type').css('display','none');
            if(this.value == 2){
                $('#posts_img').css('display','block');
            }
            if(this.value == 6){
                $('#posts_video').css('display','block');
            }
            if(this.value == 10){
                $('#posts_line').css('display','block');
            }
            if(this.value == 8){
                $('#posts_motion').css('display','block');
            }
            if(this.value == 11){
                $('#posts_speak').css('display','block');
            }
        });
    });
</script>




</html>

