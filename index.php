<?php

  // Include the Rapid library
  require_once('lib/Rapid.php');

  // Create a new Router instance
  $app = new \Rapid\Router();

  // Define some routes. Here: requests to / will be
  // processed by the controller at controllers/Home.php
  $app->GET('/',        'Home');
  $app->GET('/home',        'Home');
  $app->GET('/passengers',        'Passengers');
  $app->GET('/flights',        'Flights');
  // $app->GET('/example', 'Example');

  // Process the request
  $app->dispatch();

?>