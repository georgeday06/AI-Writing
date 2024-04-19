<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Writing Prompt</title>
    <script src="https://kit.fontawesome.com/eb2c206d83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Styles.css">

    
</head>
<body>

    <?php include('header.php');
    ?>

    <div id="progressbar">
        <h2>Your Statistics</h2><br>
        <h4>Your Favourite Genre:</h4>
        <?php echo "$favouriteGenre";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$averageRating";?>
        <h4>Your Best Rating:</h4>
        <?php echo "$bestRating";?>
        <h4>Your Best Rated Genre:</h4>
        <?php echo "$bestGenre";?>
        <h4>Registration Date:</h4>
        <p><?php echo $regdate; ?></p>
    </div>

    <div id="main">
    <div class="catagoryLine1" onclick="window.location.href='horror.php'" style="background-image: url('https://samwhit.georgeday.uk/img/horror.jpg')">
        <h2 style="text-align:center;">Horror</h2>
    </div>
    <div class="catagoryLine1" onclick="window.location.href='romance.php'" style="background-image: url('https://samwhit.georgeday.uk/img/romance.jpg')">
        <h2 style="text-align:center;">Romance</h2>
    </div>
    <div class="catagoryLine1" onclick="window.location.href='action.php'" style="background-image: url('https://samwhit.georgeday.uk/img/action.jpg')">
        <h2 style="text-align:center;">Action</h2>
    </div>
    <div class="catagoryLine1" onclick="window.location.href='scifi.php'" style="background-image: url('https://samwhit.georgeday.uk/img/SciFi.jpg')">
        <h2 style="text-align:center;">Science Fiction</h2>
    </div>
    <div class="catagoryLine2" onclick="window.location.href='fantasy.php'" style="background-image: url('https://samwhit.georgeday.uk/img/fantasy.jpg')">
        <h2 style="text-align:center;">Fantasy</h2>
    </div>
    <div class="catagoryLine2" onclick="window.location.href='thriller.php'" style="background-image: url('https://samwhit.georgeday.uk/img/thriller.jpg')">
        <h2 style="text-align:center;">Thriller</h2>
    </div>
    <div class="catagoryLine2" onclick="window.location.href='crime.php'" style="background-image: url('https://samwhit.georgeday.uk/img/crime.png')">
        <h2 style="text-align:center;">Crime</h2>
    </div>
    <div class="catagoryLine2" onclick="window.location.href='comedy.php'" style="background-image: url('https://samwhit.georgeday.uk/img/comdey.jpg')">
        <h2 style="text-align:center;">Comedy</h2>
    </div>
    <div class="catagoryLine3" onclick="window.location.href='children.php'" style="background-image: url('https://samwhit.georgeday.uk/img/children.png')">
        <h2>Children</h2>
    </div>
    <div class="catagoryLine3" onclick="window.location.href='short-story.php'" style="background-image: url('https://samwhit.georgeday.uk/img/shortstory.jpg')">
        <h2>Short Story</h2>
    </div>
    <div class="catagoryLine3" onclick="window.location.href='historical.php'" style="background-image: url('https://samwhit.georgeday.uk/img/historical.jpg')">
        <h2>Historical</h2>
    </div>
    <div class="catagoryLine3" onclick="window.location.href='poetry.php'" style="background-image: url('https://samwhit.georgeday.uk/img/poetry.PNG')">
        <h2>Poetry</h2>
    </div>
    </div>
</body>
</html>

