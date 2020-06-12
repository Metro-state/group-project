<?php
  require_once('initialize.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/main_style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles/custom_nav.css" type="text/css">
        <title>OMDB - Online Movie Database</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="./mainStyleSheet.css">
    </head>

<body class="body_background">
<div id="wrap">
    <div id="nav">
        <ul>
            <a href="index.php">
              <li class="horozontal-li-logo">
              <img src ="./images/OMDB_logo.png">
              <br/>OMDB - Online Movie Database</li>
            </a>

            <a href="movies.php">
              <li <?php if($nav_selected == "MOVIES"){ echo 'class="current-page"'; } ?>>
              <img src="./images/video.png">
              <br/>Movies</li>
            </a>

            <a href="people.php">
              <li <?php if($nav_selected == "PEOPLE"){ echo 'class="current-page"'; } ?>>
                <img src="./images/director.png">
                <br/>People</li>
            </a>

            <a href="songs.php">
              <li <?php if($nav_selected == "SONGS"){ echo 'class="current-page"'; } ?>>
              <img src="./images/music.png">
              <br/>Songs</li>
            </a>

            <a href="reports.php">
              <li <?php if($nav_selected == "REPORTS"){ echo 'class="current-page"'; } ?>>
              <img src="./images/information.png">
              <br/>Reports</li>
            </a>

            <a href="puzzles.php">
              <li <?php if($nav_selected == "PUZZLES"){ echo 'class="current-page"'; } ?>>
                <img src="./images/jigsaw.png">
                <br/>Puzzles</li>
            </a>

        <a href="help.php">
          <li <?php if($nav_selected == "HELP"){ echo 'class="current-page"'; } ?>>
            <img src="./images/help.png">
            <br/>Help</li>
        </a>

      </ul>
      <br />
    </div>


    <table style="width:1250px">
      <tr>
        <?php
            if ($left_buttons == "YES") {
        ?>

        <td style="width: 120px;" valign="top">
        <?php
            if ($nav_selected == "Home") {
                include("./index.php");
            } elseif ($nav_selected == "Movies") {
                include("./left_menu_list.php");
            } elseif ($nav_selected == "TIMELINE") {
                include("./left_menu_timeline.php");
            } elseif ($nav_selected == "REPORTS") {
                include("./left_menu_reports.php");
            } elseif ($nav_selected == "MOVIES") {
                include("./left_menu_movies.php");
            } elseif ($nav_selected == "HISTORY") {
                include("./left_menu_history.php");
            } elseif ($nav_selected == "TREND") {
              include("./left_menu_trend.php");
           } elseif ($nav_selected == "SETUP") {
            include("./left_menu_setup.php");
          } elseif ($nav_selected == "ABOUT") {
          include("./left_menu_about.php");
          }elseif ($nav_selected == "HELP") {
                include("./left_menu_help.php");
            } else {
                include("./left_menu.php");
            }
        ?>
        </td>
        <td style="width: 1100px;" valign="top">
        <?php
          } else {
        ?>
        <td style="width: 100%;" valign="top">
        <?php
          }
        ?>
