<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.Laravel = {csrfToken: '{{csrf_token() }}'}</script>
        <meta name="_token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ mix( '/css/app.css' ) }}">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Laravel and  Vue</title>
    </head>
    <body>
        <div id="app">
               <div class="container">

                  @include('partials.nav')

                  <!-- Main component for a primary marketing message or call o action -->
                  <div class="jumbotron">

                    <router-view></router-view>

                  </div>
                </div> <!-- /container -->
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
