<h1 class = 'title'>Update Passenger</h1>
<br>
<div class='img'>
    <a data-fancybox='gallery' href='./images/Anationalpark.jpg'><img src='./images/Anationalpark.jpg' alt=''></a>
</div>
<br>
<br>

<form class='forminput' action="<?=BASE_URL?>/insertflightprocess" method="post">
    <form class='forminput' action="<?=BASE_URL?>/deletepassengerprocess" method="post">
        <label for="passengerID">Passenger       :</label>
        <select name="passengerID" id="passengerID">
            <?php foreach ($locals as $row) {
                $id = $row->PassengerID;
                $flightID= $row->FlightID;
                $pName = $row->Name;
                echo '<option value="'. $id .'">'. $flightID . " - " . $pName . '</option>';
            }?>
        </select><br>
        <label for="passengerID">Flight       :</label>
        <select name="flightID" id="flightID">
            <?php foreach ($locals as $row) {
                $flightID= $row->FlightID;
                echo '<option value="'. $flightID .'">'. $flightID . '</option>';
            }?>
        </select><br>
        <label for="passengerName">Passenger Name: </label>
        <input type="text" id = "passengerName" name = "passengerName" required autofocus>
        <input type="submit" value="Update Passenger">
    </form>