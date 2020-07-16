
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css') }}">

        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">


        <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>


        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>


        <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

         

        <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />


        <script src="js/script.js" type="text/javascript"></script>

        <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        }); 
        // jquery end
        </script>
        @yield('before_head')
    </head>
    <body>
        
    @include('frontend.partials._header')


    <div class="main">

        @yield('main')
        
    </div>

     @include('frontend.partials._footer')


        <script src="{{ mix('js/all.js') }}"></script>
        @yield('before_body')
    </body>
</html>P