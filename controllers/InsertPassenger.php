<?php return function($req, $res) {

    require_once ('models/PassengerModel.php');
    $GetTable = new Passenger();

    $db = require_once ('lib/database.php');
    $table = $GetTable->getFlightIDS($db);

    $res->render('main', 'insertPassenger', ['Title' => 'Insert Passenger','table' => $table]);

} ?>
