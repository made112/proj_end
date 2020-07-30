
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f1fd9d736e10e001347fc63&product=inline-share-buttons" async="async"></script>

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
    <select name="areashare" class="form-control" id="exampleFormControlSelect1" data-route="{{ url('filter-data-photo') }}" data-csrf="{{ csrf_token() }} ">
        <option value=""> </option>

        <option value="1">مصر</option>
        <option value="2">فلسطين</option>
        <option value="3">سوريا</option>
        <option value="4">السعودية</option>
        <option value="5">الأردن</option>
        <option value="6">أمريكا</option>
        <option value="7">ألمانيا</option>
        <option value="8">الإمارات</option>
        <option value="9">دبي</option>
        <option value="10">الكويت</option>
        <option value="11">عمان</option>
        <option value="12">فرنسا</option>
        <option value="13">قطر</option>
    </select>

        <button>ترتيب حسب الأعلى تصويت</button>
</section>
<div id="results">
@foreach($data as $item)
        <div class="col-md-4">

<section class="container d-flex align-content-start flex-wrap">

        <div class="gallery_option">

                        <img  style="height: 320px;width: 320px" src="{{asset('photo/'.$item->photo.'')}}">




                <div class="student_info">
                        <td> <a href="{{url('view-vote/ '.$item->id.'')}}" class="btn btn-success"> التصويت</a> </td>

                        <span class="student_name">{{$item->name}} </span>
                        <span><label class="vote_average">معدل التصويت: </label></span>

                        <label class="vote_button"></label>
                </div>
        </div>





</section>

        </div>


    @endforeach

</div>
<div class="col-md-6">
    <div class="sharethis-inline-share-buttons">
        <div class="sharethis-inline-share-buttons">


    </div>
</div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script>

            var countrySelectBox    = document.getElementById('exampleFormControlSelect1');
            var dataContainer       = document.getElementById('results');

            countrySelectBox.onchange = function() {

                $.ajax({
                    url: this.dataset.route,
                    data: {
                        '_token': this.dataset.csrf,
                        'id': this.value
                    },
                    type: 'post',
                    success: function(data) {
                        console.log(data);
                        dataContainer.innerHTML = data;
                    }
                });

            }
        </script>

</body>





</html>