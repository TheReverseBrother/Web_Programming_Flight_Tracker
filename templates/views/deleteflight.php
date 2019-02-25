<h1 class = 'title'>Delete Flight</h1>
<br>

<form class='forminput' action="<?=BASE_URL?>/deleteflightprocess" method="post">
    <label for="flightID">Flight ID       :</label>
    <select name="flightID" id="flightID">
        <?php foreach ($locals as $row) {
            $id = $row->FlightID;
            echo '<option value="'. $id .'">'. $id .'</option>';
        }?>
    </select><br>
    <input type="submit" value="Delete Passenger">
</form>
