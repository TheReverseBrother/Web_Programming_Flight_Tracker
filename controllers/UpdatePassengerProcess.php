<?php

require('models/PassengerModel.php');
$passengerTable = new Passenger();
require('lib/FormUtils.php');
$validate = new FormUtils();
$db = require('lib/database.php');

$passengerID = $req->body('passengerID');
$flightID = $req->body('flightID');
$Name = $req->body('passengerName');


$Name = $validate->validateSTRING($Name);

if($Name != null )
{
    $passengerTable->UpdatePassenger($db,$passengerID,$Name,$flightID);
    $res->redirect("/passengers");

}
$res->redirect("/passengers?fail=1");

?>