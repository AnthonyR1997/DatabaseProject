<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HTML Test File</title>
    <meta name="author" content="Nick">
    <meta name="description" content="HTML Test File">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
    <link rel="icon" type="image/x-icon" href="Picture1.png" />
</head>

<body>
    <header></header>
    <main></main>
    <footer></footer>
    <script type="text/javascript" src=""></script>

    <div class="header">
        <h2>Event Manager</h2>
    </div>

    <div class="navbar">
        <a href="index.php" class="active">Home</a>
        <?php session_start();

        if(isset($_SESSION['username']))
        echo '<a href="profile.php" class="right">Profile</a>'; ?>
        <?php
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?>
        <a href="search.php" class="right">Search</a>
        <?php
        if(isset($_SESSION['username'])) {

          if($_SESSION['username'] == 'adminadmin') {
                echo '<a href="admin.php" class="right">Admin</a>';}

      }
         ?>

    </div>

    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav">
                <a href="profile.php">Info</a>
                <a href="profilereg.php">Registered</a>
            </div>
        </div>
        <div class="main">
    
                <h2>Project completed by:</h2>
                <h2>Anthony Robin</h2>
                <h2>Chris Kenneth Viray</h2>
                <h2>Nick Worthley</h2>
                <h2>For CSI 3450</h2>
        </div>
    </div>

    <div class="footer">
        <h5>Group names, class, date </h5>
    </div>
</body></html>
