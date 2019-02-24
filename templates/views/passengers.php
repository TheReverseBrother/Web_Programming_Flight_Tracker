
<h1> All Current Passengers</h1>
<p> This Table shows all flights currently scheduled to fly over Ireland Today</p>
<br>
<table>
    <tr><td>PlaneID</td><td> Passenger</td></tr>
    <?php foreach ($locals as $row) { ?>
        <tr><td><?= $row->PlaneID?></td><td><?= $row->Name?></td></tr>
    <?php }?>
</table>

<form action='<?=BASE_URL?>/insertflight'>
    <input type ='submit' value ='Add FLight'>
</form