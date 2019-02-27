<?php return function($req, $res) {

    require('models/FlightModel.php');
    require('lib/FormUtils.php');
    $validate = new FormUtils();
    $flightModel = new Flight();
    $db = require_once ('lib/database.php');

    $flightID = $req->body('flightID');
    $Cname = $req->body('companyName');

    $flightID = $validate->validateSTRING($flightID);
    $checked = $validate->checkRegex($flightID);
    $Cname = $validate->validateSTRING($Cname);
    if($checked == null)
    {
        $res->redirect('/insertflight?fail=2');
    }
    if($flightID != null & $Cname != null)
    {
        $flightModel->AddFlight($db, $flightID, $Cname);
        $res->redirect('/flights');
    }
}
?>