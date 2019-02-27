<h1 class = 'title'>Insert Flight</h1>
<br>
<?php if($locals['fail'] == 2){?>
    <p id="error">Please Enter Flight ID As 2 letters followed by 4 Numbers</p>
<?php }?>

<form class='forminput' action="<?=BASE_URL?>/insertflightprocess" method="post">
    <label for="flightID">FlightID       :</label>
    <input type="text" id = "flightID" name = "flightID" required autofocus><br>
    <label for="companylName">Company Name: </label>
    <input type="text" id = "companyName" name = "companyName" required autofocus><br>
    <input type="submit" value="Add Flight">
</form>
