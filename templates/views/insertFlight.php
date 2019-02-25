<h1 class = 'title'>Insert Flight</h1>
<br>
<div class='img'>
    <a data-fancybox='gallery' href='./images/Anationalpark.jpg'><img src='./images/Anationalpark.jpg' alt=''></a>
</div>
<br>
<br>

<form class='forminput' action="<?=BASE_URL?>/insertflightprocess" method="post">
    <label for="flightID">FlightID       :</label>
    <input type="text" id = "flightID" name = "flightID" required autofocus><br>
    <label for="companylName">Company Name: </label>
    <input type="text" id = "companyName" name = "companyName" required autofocus><br>
    <input type="submit" value="Add Flight">
</form>
