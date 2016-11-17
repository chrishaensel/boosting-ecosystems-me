<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mapping ecosystems</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.26.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.26.0/mapbox-gl.css' rel='stylesheet' />


    <link rel=stylesheet href="/css/style.css">
    <link rel=stylesheet href="/css/material.css">


 
<!-- Latest compiled and minified JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div id="intro-bg" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>Mapping Ecosystems @yield('country')</h1>
            @yield('welcome')
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>All the things you said</h3>

            <ul id="comment-card" class="list-inline">
              @yield('comment_cards')
            </ul>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <button  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Load more</button> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @yield('city_map')
        </div>
 

    </div>


     

</body>
</html>
