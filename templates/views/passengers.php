
<h1> All Current Passengers</h1>
<p> This Table shows all flights currently scheduled to fly over Ireland Today</p>
<br>
<table>
    <tr><td>Flight ID</td><td> Passenger</td></tr>
    <?php foreach ($locals as $row) { ?>
        <tr><td><?= $row->FlightID?></td><td><?= $row->Name?></td></tr>
    <?php }?>
</table>

<form action='<?=BASE_URL?>/insertpassengers'>
    <input type ='submit' value ='Add Passenger'>
</form>

<form id="dooby" action='<?=BASE_URL?>/deletepassengers' >
    <input type ='submit' value ='Delete Passenger'>
</form>