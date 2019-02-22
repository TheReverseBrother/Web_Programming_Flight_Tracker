<?php
    $config = require_once('config.php');
  // Include the Rapid library
  require_once('lib/Rapid.php');
  define('BASE_URL',$config['base_url']);
  // Create a new Router instance
  $app = new \Rapid\Router();

  // Define some routes. Here: requests to / will be
  // processed by the controller at controllers/Home.php
  $app->GET('/',        'Home');
  $app->GET('/home',        'Home');
  $app->GET('/passengers',        'Passengers');
  $app->GET('/flights',        'Flights');
  $app->GET('/insertflight',        'InsertFlight');
  $app->GET('/insertpassenger',        'InsertPassenger');
  // $app->GET('/example', 'Example');

  // Process the request
  $app->dispatch();
?>