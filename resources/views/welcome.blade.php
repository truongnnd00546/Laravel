<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
            <form action="{{url('payment')}}" method="POST" role="form">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary">PayPal</button>
            </form>
        </div>
    </div>
</body>
</html>
