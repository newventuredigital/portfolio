<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michael Roach | <?php if (isset($title)) {echo $title;} ?></title>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/michaelroach.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic|Roboto+Slab:700,300' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  </head>
  <body>
  <?php include("inc/analytics.php"); ?>
  
  <header>
    <div class="row">
      <div class="s-container">
      <a href="index.php">
        <div class="logo">
          <img src="img/michael-roach-mark-2x.jpg" width="114">
        </div>
        <div class="name">Michael Roach</div>
      </a>
      </div>

      <div class="nav-wrap show-for-large-up">
        <ul class="navigation show-for-large-up">
          <?php include("navigation.php");?>
        </ul>
      </div>
    </div>

    <div class="row text-center">
      <div class="hamburger show-for-small-up hide-for-large-up"><a href="#" id="mobile-button"><i class="fa fa-bars"></i> Menu</a></div>
        <ul id="mobile-navigation" style="display:none;">
          <?php include("navigation.php");?>
        </ul>
    </div>
  </header>