
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}
    <link rel="stylesheet" href={{asset('asset/css/bootstrap1.min.css')}}>
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<header class="mainBody">
    <nav>
        <ul>
            <li><a href={{route('sharing.create')}}>مشاركة</a></li>
            <li><a href={{route('sharing.show')}}>معرض المشاركات</a></li>
        </ul>
    </nav>
</header>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/images.png" class="d-block w-100" alt="there is no image!!">
            <div class="carousel-caption d-none d-md-block">
                <div id="footer" dir="rtl" lang="ar">
                    <h1 id="blue">
                        13 في واحد
                    </h1>
                    <div id="block">
                        <h1>المملكة العربية السعودية <br> الدليل السياحي</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




</html>