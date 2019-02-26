<h1 class = 'title'>Update Flight</h1>
<br>
<div class='img'>
    <a data-fancybox='gallery' href='./images/Anationalpark.jpg'><img src='./images/Anationalpark.jpg' alt=''></a>
</div>
<br>
<br>

<form class='forminput' action="<?=BASE_URL?>/updateflightprocess" method="post">
    <select name="flightID" id="flightID">
        <?php foreach ($locals as $row) {
            $id = $row->FlightID;
            echo '<option value="'. $id .'">'. $id .'</option>';
        }?><br>
    <label for="companyName">Company Name: </label>
    <input type="text" id = "companyName" name = "companyName" required autofocus><br>
    <input type="submit" value="Add Flight">
</form>
