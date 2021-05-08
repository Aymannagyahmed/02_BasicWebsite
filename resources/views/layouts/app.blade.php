<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Proj basicwebsite</title>
        <link rel="stylesheet" href="assets/css/app.css">
        <!-- Bootstrap v4.6.0 -->
        <link rel="stylesheet" href="assets/bootstrap-4.6.0/css/bootstrap.min.css">
<!-- Bootstrap v4.6.0 cdn
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
-->

    </head>
    <body>
        @include('inc.navbar')

        <div class="container">
            @if (Request::is('/'))
            @include('inc.showCase')
            @endif
            
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc.messages')
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
        <footer id="footer" class="text-center">
            <p>Copyright 2021 &copy; Test</p>

        </footer>




        <script src="assets/bootstrap-4.6.0/js/jquery-3.5.1.slim.min.js"></script>
        <script src="assets/bootstrap-4.6.0/js/bootstrap.bundle.min.js"></script>
        
        
<!-- Bootstrap v4.6.0 cdn
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
-->        
    
    </body>
</html>