<?php return function($req, $res) {

    require('models/PassengerModel.php');
    require('lib/FormUtils.php');
    $validate = new FormUtils();
    $db = require('lib/database.php');
    $passengerTable = new Passenger();

    $flightID = $req->body('flightID');
    $Name = $req->body('passengerName');

    $Name = $validate->validateSTRING($Name);
    if($Name != null)
    {
        $passengerTable->AddPassenger($db,$flightID,$Name);
        $res->redirect("/passengers");
    }
    $res->redirect("/passengers?fail=1");
} ?>