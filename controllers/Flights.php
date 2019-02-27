<?php return function($req, $res) {
    require_once ('models/FlightModel.php');
    $GetTable = new Flight();
    $fail = $req->query('fail');

    $db = require_once ('lib/database.php');
    $table = $GetTable->FlightArray($db);
    $res->render('main', 'flights', ['fail' => $fail ,'Title' => 'Flights','table'=> $table]);
} ?>