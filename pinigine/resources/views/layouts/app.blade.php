<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       
        <!------ Include the above in your HEAD tag ---------->
        <link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
           
        </style>

        <title>Baldai</title>
    </head>
    <body>
    
            <div>
            <div class="container">
                @include('inc.navbar')
        
        @if(Request::is('/'))
        @include('inc.showcase')
                @endif
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    @yield('content')
                    
                    </div>
                    
                </div>
            </div>
        </div>
        <footer id="footer"class="text-center" >Copyrights 2018 &copy; Wood Pose</footer>   
        <script src="lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>