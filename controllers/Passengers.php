<?php return function($req, $res) {

    require_once ('models/PassengerModel.php');
    $GetTable = new Passenger();
    $fail = $req->query('fail');

    $db = require_once ('lib/database.php');
    $table = $GetTable->PassengerArray($db);

    $res->render('main', 'passengers', ['fail' => $fail,'Title' => 'Passengers','table'=>$table, 'fail' => $fail]);

} ?>