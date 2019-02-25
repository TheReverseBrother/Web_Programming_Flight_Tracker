<?php
    try
    {
        $config = require_once('config.php');
        // Include the Rapid library
        require_once('lib/Rapid.php');

        define('BASE_URL', $config['base_url']);
        // Create a new Router instance
        $app = new \Rapid\Router();

        // Define some routes. Here: requests to / will be
        // processed by the controller at controllers/Home.php
        $app->GET('/', 'Home');
        $app->GET('/home', 'Home');
        $app->GET('/passengers', 'Passengers');
        $app->GET('/flights', 'Flights');

        //Insert Delete Update Controllers
        $app->GET('/insertflight', 'InsertFlight');
        $app->GET('/insertpassengers', 'InsertPassenger');
        $app->GET('/deletepassengers', 'DeletePassenger');
        $app->GET('/deleteflight', 'DeleteFlight');

        //Insert Delete Update Processes
        $app->POST('/insertflightprocess', 'InsertFlightProcess');
        $app->POST('/insertpassengerprocess', 'InsertPassengerProcess');
        $app->POST('/deleteflightprocess', 'DeleteFlightProcess');
        $app->POST('/deletepassengerprocess', 'DeletePassengerProcess');




        // $app->GET('/example', 'Example');

        // Process the request
        $app->dispatch();
    }
    catch(\Rapid\RouteNotFoundException $e)
    {
        $res = $e->getRequestObject();
        $res->status(404);
        $res->render('main', '404', []);
    }
    catch(PDOException $e){

    }
    catch(Exception $e)
    {
        http_response_code(500);
        exit();
    }
?>