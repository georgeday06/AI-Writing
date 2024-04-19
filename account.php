<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Fetch user data from the session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$regdate = $_SESSION['regdate'];
$userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    <link rel="stylesheet" href="css/account.css"> 
</head>

<body>
    <div id="main">
        <div class="account-container">
            <h2>Account Information</h2>
            <div class="info-group">
                <label>Username:</label>
                <p><?php echo $username; ?></p>
            </div>
            <div class="info-group">
                <label>Email Address:</label>
                <p><?php echo $email; ?></p>
            </div>
            <div class="info-group">
                <label>Registration Date:</label>
                <p><?php echo $regdate; ?></p>
            </div>
            <div class="info-group">
                <label>UserID (Debug):</label>
                <p><?php echo $userid; ?></p>
            </div>
            <br>
            <p><a href="index.php">Home</a></p>
        </div>
    </div>
</body>

</html>
