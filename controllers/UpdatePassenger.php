<?php return function($req, $res) {

    require_once ('models/PassengerModel.php');
    $GetTable = new Passenger();

    $db = require_once ('lib/database.php');
    $table = $GetTable->PassengerArray($db);
    $res->render('main', 'updatepassenger', ['Title' => 'Update Passenger','table' =>$table]);

} ?>
