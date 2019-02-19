<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $locals['Title'] ?? 'Template' ?></title>
  <link rel='stylesheet' href='<?= BASE_URL?>/assets/styles/reset.css'>
  <link rel='stylesheet' href='<?= BASE_URL?>/assets/styles/site.css'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>



</head>
<body>
<!--Add In Plane Image To Display Above the Menu system-->
  <header>
      <div class="img">
          <img src="<?=BASE_URL?>/assets/images/index.jpg" alt="" align="centre">
      </div>
      <br>
    <div class='titlecontainer'>

      <nav>
      <ul class = "menubar" >
            <li><a href="<?= BASE_URL?>/">Home</a></li>
            <li><a href="<?= BASE_URL?>/flights">Flights</a></li>
            <li><a href="<?= BASE_URL?>/passengers">Passengers</a></li>
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