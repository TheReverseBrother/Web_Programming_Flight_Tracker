<?php return function($req, $res) {
    $fail = $req->query('fail');
    $res->render('main', 'insertFlight', [
        'fail' => $fail ,
        'Title' => 'Add Flight'
    ]);

} ?>
