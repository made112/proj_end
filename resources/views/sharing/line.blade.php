
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
                <td> {{$item->line}} </td>


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