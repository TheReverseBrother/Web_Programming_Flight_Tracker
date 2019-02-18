<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $locals['Title'] ?? 'Template' ?></title>
  <link rel='stylesheet' href='../../../styles/reset.css'>
  <link rel='stylesheet' href='../../../styles/site.css'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 


</head>
<body>
<!--Add In Plane Image To Display Above the Menu system-->
  <header>
    <div class='titlecontainer'>
      <nav>
      <ul class = "menubar" >
            <li><a href="/home">Home</a></li>
            <li><a href="/flights">Flights</a></li>
            <li><a href="/passengers">Passengers</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class='maincontainer'>
      <br>
  <?= \Rapid\Renderer::VIEW_PLACEHOLDER ?>
  </main>
  <footer>
  <div class='footer'>
    <p>&copy; Private-Flight-Tracker Inc</p>
  </div>
</footer>
</body>
</html>