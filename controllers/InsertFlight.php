<?php return function($req, $res) {

    $res->render('main', 'insertFlight', [
        'Title' => 'Add Flight'
    ]);

} ?>
