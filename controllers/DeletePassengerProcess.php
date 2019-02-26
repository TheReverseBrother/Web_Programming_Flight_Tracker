<?php return function($req, $res) {

    require('models/PassengerModel.php');
    $db = require('lib/database.php');
    $passengerTable = new Passenger();

    $passengerID = $req->body('passengerID');
    $passengerTable->DeletePassenger($db, $passengerID);


    $res->redirect("/passengers");

} ?>