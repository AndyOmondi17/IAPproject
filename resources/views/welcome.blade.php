<!DOCTYPE html>
<html lang="en">
<head>
    <title>IAP Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    {{View::make('header')}}    
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    #slider-Img{
        height: 400px;
    }
    .formlogin{
        height: 500px;
        padding-top:100px;

    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color:#35443585 !important;
    }
    .trending-img{
        height:100px;
    }
    .trending-item{
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
</style>
</html>