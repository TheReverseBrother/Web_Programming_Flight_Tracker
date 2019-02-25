<?php return function($req, $res) {

    require('models/PassengerModel.php');
    $db = require_once ('lib/database.php');
    $passengerTable = new Passenger();

    $flightID = $req->body('flightID');
    $Name = $req->body('passengerName');

    $passengerTable->AddPassenger($db,$flightID,$Name);


    $res->redirect("/flights");

} ?>