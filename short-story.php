<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Writing Prompt</title>
    <script src="https://kit.fontawesome.com/eb2c206d83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Styles.css">

    <style>
        a {
    color: #000000;
    text-decoration: none;
}

a:hover {
    color:#00a6cf; 
    text-decoration:none; 
    cursor:pointer;  
}
    </style>

</head>
<body>
<?php
include('header.php');
?>
    
    <div id="progressbar">
        <h2>Short Story Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$SSBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$SSARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$SSWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=In%20the%20quiet%20town%20of%20[name],%20a%20mysterious%20stranger%20arrived,%20bringing%20with%20them...">
            <p style="text-align:center">In the quiet town of [name], a mysterious stranger arrived, bringing with them...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=As%20the%20clock%20struck%20midnight,%20the%20old%20bookshop%20on%20the%20corner%20revealed%20a%20hidden%20passage%20to...">
            <p style="text-align:center">As the clock struck midnight, the old bookshop on the corner revealed a hidden passage to...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=Under%20the%20flickering%20streetlamp,%20a%20forgotten%20letter%20led%20to%20a%20series%20of%20unexpected%20events...">
            <p style="text-align:center">Under the flickering streetlamp, a forgotten letter led to a series of unexpected events...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=In%20the%20attic%20of%20the%20abandoned%20mansion,%20a%20dusty%20music%20box%20played%20a%20haunting%20melody%20that...">
            <p style="text-align:center">In the attic of the abandoned mansion, a dusty music box played a haunting melody that...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=Amidst%20the%20crowded%20market,%20a%20chance%20encounter%20sparked%20a%20friendship%20that%20changed...">
            <p style="text-align:center">Amidst the crowded market, a chance encounter sparked a friendship that changed...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=With%20the%20first%20snowfall,%20a%20magical%20snow%20globe%20transported%20its%20owner%20to...">
            <p style="text-align:center">With the first snowfall, a magical snow globe transported its owner to...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=In%20the%20attic,%20an%20old%20photo%20album%20held%20snapshots%20of%20a%20forgotten%20love%20story%20between...">
            <p style="text-align:center">In the attic, an old photo album held snapshots of a forgotten love story between...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=At%20the%20crossroads%20of%20two%20worlds,%20a%20portal%20opened,%20allowing%20passage%20to...">
            <p style="text-align:center">At the crossroads of two worlds, a portal opened, allowing passage to...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=In%20the%20small%20café,%20a%20fortune%20teller's%20prediction%20set%20the%20protagonist%20on%20a%20quest%20to...">
            <p style="text-align:center">In the small café, a fortune teller's prediction set the protagonist on a quest to...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Short Story Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20small%20town%20grapples%20with%20the%20sudden%20appearance%20of%20mysterious%20crop%20circles.">
            <p style="text-align:center">A small town grapples with the sudden appearance of mysterious crop circles.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20writer%20discovers%20an%20ancient%20typewriter%20that%20brings%20their%20fictional%20characters%20to%20life.">
            <p style="text-align:center">A writer discovers an ancient typewriter that brings their fictional characters to life.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20photographer%20stumbles%20upon%20a%20hidden%20village%20that%20only%20appears%20during%20a%20lunar%20eclipse.">
            <p style="text-align:center">A photographer stumbles upon a hidden village that only appears during a lunar eclipse.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20time%20traveler%20accidentally%20swaps%20places%20with%20a%20historical%20figure%20and%20must%20navigate%20the%20past.">
            <p style="text-align:center">A time traveler accidentally swaps places with a historical figure and must navigate the past.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20group%20of%20friends%20explores%20an%20abandoned%20amusement%20park,%20encountering%20supernatural%20occurrences.">
            <p style="text-align:center">A group of friends explores an abandoned amusement park, encountering supernatural occurrences.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20painter%20discovers%20a%20magical%20paintbrush%20that%20turns%20their%20creations%20into%20portals.">
            <p style="text-align:center">A painter discovers a magical paintbrush that turns their creations into portals.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20long-lost%20family%20heirloom%20reveals%20a%20secret%20about%20an%20ancestor's%20adventurous%20past.">
            <p style="text-align:center">A long-lost family heirloom reveals a secret about an ancestor's adventurous past.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=An%20inventor%20creates%20a%20device%20that%20allows%20communication%20with%20parallel%20universes.">
            <p style="text-align:center">An inventor creates a device that allows communication with parallel universes.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=short-story&text=A%20mysterious%20carnival%20arrives%20in%20town,%20offering%20wishes%20with%20unexpected%20consequences.">
            <p style="text-align:center">A mysterious carnival arrives in town, offering wishes with unexpected consequences.</p>
        </a>
    </div>
</div>
</body>
</html>