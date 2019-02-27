<?php return function($req, $res) {

    $db = require_once ('lib/database.php');
    require_once ('models/FlightModel.php');
    $Getflight = new Flight();
    $flightIDList = $Getflight->getFlightIDs($db);

    $res->render('main', 'deleteflight', ['Title' => 'Delete Flight','table'=> $flightIDList]);

} ?>