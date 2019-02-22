<?php return function($req, $res) {

    $db = require('lib/database.php');

    $flightName = $req->body('student_name');
    $db-> prepare('');
    $res->redirect("/InsertPassenger");

} ?>