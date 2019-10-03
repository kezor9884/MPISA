<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>{{config('app.name','MPISA')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        @include('include.navbar')
        <div class="container">
            @include('include.message')
            @yield('content')
        </div>

        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
