<?php
  /*session_start();
  $SESSION["userName"] = "Bamse";
  $SESSION["userTracking"] = "$strPageTitle $strTaskNr";*/
  require("variables.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php echo $strPageTitle ?></title>
    <!-- NORMALIZE -->
    <link href="../../content/css/normalize.css" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- CUSTOM STYLESHEETS -->
    <link href="../../content/css/burgermenu.css" rel="stylesheet" />
    <link href="../../content/css/master.css" rel="stylesheet" />
    <link href="../../favicon.ico" rel="shortcut icon" >
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Space+Mono|Titillium+Web" rel="stylesheet" media="bogus">
  </head>


<!--BODY start-->
<body>

<!-- HEADER -->
<header>

  <nav>
    <a href="../../index.php"><img src="../../content/images/back.svg" alt="tilbage-til-forsiden" class="backsie">
    <p>TILBAGE TIL FORSIDEN</p></a>

    <ul>
      <li><a href="index.php">Loops Opgave 1</a></li>

<!-- EASY TASK-MENY BUTTONS (number of loops equal to amount of tasks) -->
    <?php
    for ($i = 2; $i <=20; $i++) {
      echo "<li><a href=\"task$i.php\">Loops Opgave $i</a></li>";
    }
    ?>

    </ul>
  </nav>

  <h1><?php echo $strPageTitle; ?></h1>
  <h2>Opgave <?php echo $strTaskNr; ?></h2><br>

</header>
