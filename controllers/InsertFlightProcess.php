<?php return function($req, $res) {

    require('models/FlightModel.php');
    $flightModel = new Flight();
    $db = require_once ('lib/database.php');

    $flightID = $req->body('flightID');
    $Cname = $req->body('companyName');

    $flightModel->AddFlight($db, $flightID, $Cname);
    $res->redirect('/flights');
}
?>