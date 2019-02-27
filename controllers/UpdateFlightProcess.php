<?php
require('models/FlightModel.php');
$flightModel = new Flight();
$db = require_once ('lib/database.php');
require('lib/FormUtils.php');
$validate = new FormUtils();

$flightID = $req->body('flightID');
$Cname = $req->body('companyName');
$Cname = $validate->validateSTRING($Cname);
if($Cname != null)
{
    $flightModel->UpdateFlight($db,$flightID,$Cname);
    $res->redirect('/flights');
}


$res->redirect('/flights?fail=1');


?>