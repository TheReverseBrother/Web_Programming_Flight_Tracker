<?php return function($req, $res) {
    require_once ('models/FlightModel.php');
    $GetTable = new Flight();

    $db = require_once ('lib/database.php');
    $table = $GetTable->FlightArray($db);
    $res->render('main', 'flights', $table);
} ?>