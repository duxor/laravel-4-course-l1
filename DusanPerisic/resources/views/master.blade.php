<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dusan Perisic Course</title>

        <!-- Css-ovi -->
        {!! HTML::style('css/bootstrap.min.css') !!}
    </head>
    
    <body>
        <div class="container">
            @yield('content')
        </div>
        
        {!! HTML::script('js/bootstrap.min.js') !!}
        {!! HTML::script('js/jquery.min.js') !!}
    </body>
</html>