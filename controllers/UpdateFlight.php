<?php return function($req, $res) {

    require_once ('models/FlightModel.php');
    $GetTable = new Flight();

    $db = require_once ('lib/database.php');
    $table = $GetTable->getFlightIDS($db);

    $res->render('main', 'updateflight', ['Title' => 'Update Flight','table' =>$table]);

} ?>
