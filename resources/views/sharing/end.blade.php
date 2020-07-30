
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">




    <title>vote</title>



</head>

<body>
@foreach($data as $item)
    <div class="col-md-6">
        <table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">الإسم</th>
        <th scope="col">درجة التصويت</th>


    </tr>
    </thead>
    <tbody>
    <tr>

        <pre><td>{{$item->name}}</td></pre>
        <pre> <td>{{$item->avg_percent}}</td></pre>

    </tr>

    </tbody>
</table>
    </div>
@endforeach
















</body>



</html>










