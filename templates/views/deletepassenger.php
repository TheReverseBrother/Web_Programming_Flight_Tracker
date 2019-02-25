<h1 class = 'title'>Delete Passenger</h1>
<br>

<form class='forminput' action="<?=BASE_URL?>/deletepassengerprocess" method="post">
    <label for="flightID">Flight ID       :</label>
    <select name="flightID" id="flightID">
        <?php foreach ($locals as $row) {
            $id = $row->FlightID;
            echo '<option value="'. $id .'">'. $id .'</option>';
        }?>
    </select><br>
    <label for="passengerName">Passenger Name : </label>
    <input type="text" id = "passengerName" name = "passengerName"><br>
    <input type="submit" value="Add Passenger">
</form>
