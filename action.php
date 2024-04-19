<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Writing Prompt</title>
    <script src="https://kit.fontawesome.com/eb2c206d83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles.css">
</head>

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

<body>

<?php
include('header.php');
?>
    
    <div id="progressbar">
        <h2>Action Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$ActionBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$ActionARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$ActionWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Unleashing%20a%20cascade%20of%20sparks%20from%20the%20welding%20torch,…">
            <p style="text-align:center">Unleashing a cascade of sparks from the welding torch,…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Maneuvering%20the%20antique%20key%20into%20the%20ornate%20lock,…">
            <p style="text-align:center">Maneuvering the antique key into the ornate lock,…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Shattering%20the%20silence%20with%20the%20roar%20of%20a%20revving%20chainsaw,…">
            <p style="text-align:center">Shattering the silence with the roar of a revving chainsaw,…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Carefully%20assembling%20the%20intricate%20puzzle%20pieces%20of…">
            <p style="text-align:center">Carefully assembling the intricate puzzle pieces of…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Flicking%20the%20switch,%20sending%20a%20surge%20of%20electricity%20through…">
            <p style="text-align:center">Flicking the switch, sending a surge of electricity through…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Hurdling%20over%20crates%20and%20barrels%20in%20the%20abandoned%20warehouse,…">
            <p style="text-align:center">Hurdling over crates and barrels in the abandoned warehouse,…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Plunging%20the%20shovel%20into%20the%20soft%20earth,%20uncovering…">
            <p style="text-align:center">Plunging the shovel into the soft earth, uncovering…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Activating%20the%20hidden%20panel,%20revealing%20a%20secret%20compartment%20with…">
            <p style="text-align:center">Activating the hidden panel, revealing a secret compartment with…</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Dashing%20through%20the%20labyrinthine%20corridors%20of%20the%20ancient%20castle,%20chasing%20after%20the%20elusive…">
            <p style="text-align:center">Dashing through the labyrinthine corridors of the ancient castle, chasing after the elusive…</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Action Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=A%20mysterious%20treasure%20chest%20hidden%20in%20a%20forgotten%20cavern.">
            <p style="text-align:center">A mysterious treasure chest hidden in a forgotten cavern.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Opening%20the%20door%20to%20a%20long-lost%20chamber%20in%20an%20ancient%20temple.">
            <p style="text-align:center">Opening the door to a long-lost chamber in an ancient temple.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Dissecting%20an%20alien%20artifact%20discovered%20in%20a%20distant%20galaxy.">
            <p style="text-align:center">Dissecting an alien artifact discovered in a distant galaxy.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Piecing%20together%20a%20shattered%20artifact%20with%20ancient%20runes.">
            <p style="text-align:center">Piecing together a shattered artifact with ancient runes.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Flipping%20the%20switch%20to%20power%20up%20a%20long-dormant%20machine.">
            <p style="text-align:center">Flipping the switch to power up a long-dormant machine.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Racing%20through%20a%20cluttered%20warehouse%20in%20pursuit%20of%20a%20stolen%20artifact.">
            <p style="text-align:center">Racing through a cluttered warehouse in pursuit of a stolen artifact.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Digging%20for%20buried%20artifacts%20in%20an%20archaeological%20excavation.">
            <p style="text-align:center">Digging for buried artifacts in an archaeological excavation.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Triggering%20a%20secret%20mechanism%20to%20reveal%20concealed%20valuables.">
            <p style="text-align:center">Triggering a secret mechanism to reveal concealed valuables.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=action&text=Pursuing%20a%20shadowy%20figure%20through%20the%20twisting%20passages%20of%20an%20abandoned%20castle.">
            <p style="text-align:center">Pursuing a shadowy figure through the twisting passages of an abandoned castle.</p>
        </a>
    </div>
</div>

    </div>
</body>
</html>


