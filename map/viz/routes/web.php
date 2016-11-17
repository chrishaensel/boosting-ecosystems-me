<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

 

$app->get('/', function () use ($app) {
   

    $results = app('db')->select("SELECT * FROM edges LIMIT 10");

	 return view('ed')->with('results' , $results);
    
     

});



$app->get('/ecosystem/{country}', function ($country) use ($app) {
   
 $welcome = app('db')->select('SELECT * FROM pagecontent WHERE pagename = "home" AND section = "welcome" AND country = :country' , ['country' => $country]);


  $comment_cards = app('db')->select('SELECT comments FROM ecosystem, users WHERE ecosystem.comments != ""  AND ecosystem.userid = users.userid AND country = :country AND LENGTH(comments)> 100 ORDER BY RAND() LIMIT 10' , ['country' => $country]);
 
  $city = app('db')->select('SELECT * FROM pagecontent WHERE pagename = "home" AND section = "city" AND country = :country' , ['country' => $country]);

  return view('mir')
  ->with('comment_cards' , $comment_cards)
  ->with('welcome' , $welcome)
  ->with('country' , $country)
  ->with('city' , $city);

 
});

