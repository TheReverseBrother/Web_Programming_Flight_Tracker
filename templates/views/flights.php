
<h1> All Current Flights Overhead</h1>
<?php if($locals['fail'] == 1){?>
    <p id="error">Incorrect Input Please Enter Valid Lettors/Numbers</p>
<?php }?>
<p> This Table shows all flights currently scheduled to fly over Ireland Today</p>
<br>
<table>
    <tr><td>Flight ID</td><td> Company</td></tr>
    <?php foreach ($locals['table'] as $row) { ?>
    <tr><td><?= $row['FlightID']?></td><td><?= $row['Company']?></td></tr>
    <?php }?>
</table>

<form action='<?=BASE_URL?>/insertflight'>
    <input type ='submit' value ='Add Flight'>
</form>

<form action='<?=BASE_URL?>/deleteflight'>
    <input type ='submit' value ='Delete Flight'>
</form>
<form action='<?=BASE_URL?>/updateflight'>
    <input type ='submit' value ='Update Flight'>
</form>

