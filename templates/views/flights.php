
<h1> All Current Flights Overhead</h1>
<p> This Table shows all flights currently scheduled to fly over Ireland Today</p>
<br>
<table>
    <tr><td>Flight ID</td><td> Company</td></tr>
    <?php foreach ($locals as $row) { ?>
    <tr><td><?= $row->FlightID?></td><td><?= $row->Company?></td></tr>
    <?php }?>
</table>

<form action='<?=BASE_URL?>/insertflight'>
    <input type ='submit' value ='Add FLight'>
</form