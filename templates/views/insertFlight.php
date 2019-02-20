<h1 class = 'title'>Insert Flight</h1>
<br>
<div class='img'>
    <a data-fancybox='gallery' href='./images/Anationalpark.jpg'><img src='./images/Anationalpark.jpg' alt=''></a>
</div>
<br>
<br>

<form class='forminput' action="./insertanimaltransaction.php" method="post">
            <label for="parkID">Park ID       :</label>
            <input type="int" id = "parkID" name = "parkID" required autofocus><br>
            <label for="animalName">Animal Name: </label>
            <input type="text" id = "animalName" name = "animalName" required autofocus><br>
            <label for="species">Species: </label>
            <input type="text" id = "species" name = "species" required autofocus><br>
            <label for="population">Population    :</label>
            <input type="int" id = "population" name = "population" required><br>
            <input type="submit" value="Add Animal">
            </form>
