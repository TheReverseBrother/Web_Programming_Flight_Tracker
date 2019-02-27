<h1 class = 'title'>Delete Passenger</h1>
<br>

<form class='forminput' action="<?=BASE_URL?>/deletepassengerprocess" method="post">
    <label for="passengerID">Passenger       :</label>
    <select name="passengerID" id="passengerID">
        <?php foreach ($locals['table'] as $row) {
            $id = $row['PassengerID'];
            $flightID= $row['FlightID'];
            $pName = $row['Name'];
            echo '<option value="'. $id .'">'. $flightID . " - " . $pName . '</option>';
        }?>
    </select><br>
    <input type="submit" value="Delete Passenger">
</form>
