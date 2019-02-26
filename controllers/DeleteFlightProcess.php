<?php return function($req, $res) {

    require('models/FlightModel.php');
    $db = require('lib/database.php');
    $FlightID = $req->body('flightID');
    $flModel = new Flight();
    $flModel->DeleteChildObjects($db,$FlightID);


    $flModel->DeleteFlight($db,$FlightID);

    $res->redirect("/flights");

} ?>