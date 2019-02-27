<?php return function($req, $res) {

    require_once ('models/PassengerModel.php');
    $GetTable = new Passenger();

    $db = require_once ('lib/database.php');
    $table = $GetTable->PassengerArray($db);

    $res->render('main', 'deletepassenger', [ 'Title' => 'Delete Passenger','table' =>$table]);

} ?>