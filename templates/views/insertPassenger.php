<h1 class = 'title'>Insert Passenger</h1>
<br>
<div class='img'>
    <a data-fancybox='gallery' href='./images/Anationalpark.jpg'><img src='./images/Anationalpark.jpg' alt=''></a>
</div>
<br>
<br>

<form class='forminput' action="<?=BASE_URL?>/insertpassengerprocess" method="post">
    <label for="flightID">Flight ID       :</label>
    <select name="flightID" id="flightID">
        <?php foreach ($locals as $row) {
            $id = $row->FlightID;
            echo '<option value="'.$id.'">'.$id.'</option>';
        }?>
    </select><br>
    <label for="passengerName">Passenger Name : </label>
    <input type="text" id = "passengerName" name = "passengerName" required autofocus><br>
    <input type="submit" value="Add Passenger">
</form>
