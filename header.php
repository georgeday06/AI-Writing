<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Styles.css">
</head>
<body>

<?php 
  include('server.php');
  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
  }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: login.php");
  }

    $regdate = $_SESSION['regdate'];
    $userid = $_SESSION['userid'];

    $stmt = $db->prepare("SELECT * FROM statistics WHERE username=?");
    $stmt->bind_param("s", $_SESSION['username']); // "s" indicates that the parameter is a string
    $stmt->execute();
    $result = $stmt->get_result();
    $stats = $result->fetch_assoc();
    $stmt->close(); // Close the statement after fetching the data

    $favouriteGenre = $stats['FavouriteGenre'];
    $averageRating = $stats['AvgRating'];
    $bestRating = $stats['BestRating'];
    $bestGenre = $stats['BestGenre'];
    $totalGames = $stats['totalGames'];
    $totalScore = $stats['totalScore'];
    
    if ($totalScore != 0) {
        $averageRating = ($totalScore / $totalGames);
    } else {
        // Handle the case where $totalScore is zero
        $averageRating = 0;  // or any other appropriate value
    }

    $HorrorBRating = $stats['HorrorBRating'];
    $HorrorARating = $stats['HorrorARating'];
    $HorrorWRating = $stats['HorrorWRating'];

    $RomanceBRating = $stats['RomanceBRating'];
    $RomanceARating = $stats['RomanceARating'];
    $RomanceWRating = $stats['RomanceWRating'];

    $ActionBRating = $stats['ActionBRating'];
    $ActionARating = $stats['ActionARating'];
    $ActionWRating = $stats['ActionWRating'];

    $SciFiBRating = $stats['SciFiBRating'];
    $SciFiARating = $stats['SciFiARating'];
    $SciFiWRating = $stats['SciFiWRating'];

    $FantasyBRating = $stats['FantasyBRating'];
    $FantasyARating = $stats['FantasyARating'];
    $FantasyWRating = $stats['FantasyWRating'];

    $ThrillerBRating = $stats['ThrillerBRating'];
    $ThrillerARating = $stats['ThrillerARating'];
    $ThrillerWRating = $stats['ThrillerWRating'];

    $CrimeBRating = $stats['CrimeBRating'];
    $CrimeARating = $stats['CrimeARating'];
    $CrimeWRating = $stats['CrimeWRating'];

    $ComedyBRating = $stats['ComedyBRating'];
    $ComedyARating = $stats['ComedyARating'];
    $ComedyWRating = $stats['ComedyWRating'];

    $ChildrenBRating = $stats['ChildrenBRating'];
    $ChildrenARating = $stats['ChildrenARating'];
    $ChildrenWRating = $stats['ChildrenWRating'];

    $SSBRating = $stats['SSBRating'];
    $SSARating = $stats['SSARating'];
    $SSWRating = $stats['SSWRating'];

    $HistoricalBRating = $stats['HistoricalBRating'];
    $HistoricalARating = $stats['HistoricalARating'];
    $HistoricalWRating = $stats['HistoricalWRating'];

    $PoetryBRating = $stats['PoetryBRating'];
    $PoetryARating = $stats['PoetryARating'];
    $PoetryWRating = $stats['PoetryWRating'];
?>

<div id="header">
        <a href="index.php"><button class="button-9" style="margin-right=30px;">Home</button></a>
        <button class="button-9" role="button">Daily Prompt</button>
        <h1 style="text-align:left;padding-left:50px;display:inline-block; padding-right:50px;font-size:72px; color:#FFFFFF;text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">AI Writing Prompt</h1>
        <?php
        if (empty($_SESSION['success'])) {
            echo '<a href="login.php"><button class="button-9" role="button">Login</button></a>';
        } else {
            echo '<a href="account.php"><button class="button-9" role="button">My Account</button></a>';
            echo '<a href="signout.php"><button class="button-9" role="button" style="margin-left: 8px;">Sign Out</button></a>';
        }
?>

</div>
</body>
</html>