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
        <h2>Historical Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$HistoricalBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$HistoricalARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$HistoricalWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
<div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=Against%20the%20backdrop%20of%20a%20bustling%20market%20square,%20a%20group%20of%20revolutionaries%20plotted...">
            <p style="text-align:center">Against the backdrop of a bustling market square, a group of revolutionaries plotted...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=Amid%20the%20echoing%20footsteps%20of%20soldiers,%20a%20clandestine%20meeting%20unfolded,%20addressing...">
            <p style="text-align:center">Amid the echoing footsteps of soldiers, a clandestine meeting unfolded, addressing...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=In%20the%20opulent%20halls%20of%20a%20royal%20palace,%20a%20fateful%20decision%20was%20made,%20shaping...">
            <p style="text-align:center">In the opulent halls of a royal palace, a fateful decision was made, shaping...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=Beneath%20the%20flickering%20candlelight%20of%20a%20secret%20chamber,%20a%20historic%20treaty%20was%20negotiated,%20altering...">
            <p style="text-align:center">Beneath the flickering candlelight of a secret chamber, a historic treaty was negotiated, altering...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=As%20the%20ink%20dried%20on%20the%20parchment,%20a%20declaration%20was%20signed,%20marking%20the%20beginning%20of...">
            <p style="text-align:center">As the ink dried on the parchment, a declaration was signed, marking the beginning of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=In%20the%20midst%20of%20a%20crowded%20town%20square,%20a%20passionate%20orator%20delivered%20a%20speech%20addressing...">
            <p style="text-align:center">In the midst of a crowded town square, a passionate orator delivered a speech addressing...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=Within%20the%20smoke-filled%20room,%20delegates%20from%20different%20nations%20debated%20the%20fate%20of...">
            <p style="text-align:center">Within the smoke-filled room, delegates from different nations debated the fate of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=In%20the%20hushed%20corridors%20of%20power,%20a%20conspiracy%20brewed,%20aiming%20to%20change%20the%20course%20of...">
            <p style="text-align:center">In the hushed corridors of power, a conspiracy brewed, aiming to change the course of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=As%20the%20old%20manuscript%20was%20discovered,%20it%20revealed%20a%20forgotten%20chapter%20in%20the%20history%20of...">
            <p style="text-align:center">As the old manuscript was discovered, it revealed a forgotten chapter in the history of...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Historical Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20plotting%20and%20execution%20of%20a%20key%20event%20during%20the%20American%20Revolution.">
            <p style="text-align:center">The plotting and execution of a key event during the American Revolution.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20underground%20activities%20of%20resistance%20fighters%20during%20World%20War%20II.">
            <p style="text-align:center">The underground activities of resistance fighters during World War II.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical

&text=The%20political%20intrigue%20leading%20to%20a%20pivotal%20moment%20in%20the%20French%20Revolution.">
            <p style="text-align:center">The political intrigue leading to a pivotal moment in the French Revolution.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20secret%20negotiations%20that%20shaped%20the%20outcome%20of%20a%20significant%20peace%20treaty.">
            <p style="text-align:center">The secret negotiations that shaped the outcome of a significant peace treaty.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20signing%20of%20a%20foundational%20document%20in%20the%20establishment%20of%20a%20new%20nation.">
            <p style="text-align:center">The signing of a foundational document in the establishment of a new nation.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20impactful%20speech%20that%20stirred%20the%20emotions%20of%20a%20nation%20during%20a%20pivotal%20era.">
            <p style="text-align:center">The impactful speech that stirred the emotions of a nation during a pivotal era.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20diplomatic%20discussions%20and%20debates%20at%20a%20crucial%20international%20conference.">
            <p style="text-align:center">The diplomatic discussions and debates at a crucial international conference.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20conspiracies%20and%20power%20struggles%20within%20a%20historical%20royal%20court.">
            <p style="text-align:center">The conspiracies and power struggles within a historical royal court.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=historical&text=The%20discovery%20of%20a%20forgotten%20manuscript%20shedding%20light%20on%20a%20mysterious%20historical%20event.">
            <p style="text-align:center">The discovery of a forgotten manuscript shedding light on a mysterious historical event.</p>
        </a>
    </div>
</div>
</div>
</body>
</html>

