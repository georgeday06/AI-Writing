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
        <h2>Thriller Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$ThrillerBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$ThrillerARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$ThrillerWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=In%20the%20dimly%20lit%20alley,%20a%20shadowy%20figure%20emerged,%20setting%20off%20a%20chain%20of%20chilling%20events...">
            <p style="text-align:center">In the dimly lit alley, a shadowy figure emerged, setting off a chain of chilling events...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=With%20each%20passing%20minute,%20the%20protagonist%20realized%20the%20anonymous%20threat%20was%20getting%20closer,%20leaving%20a%20trail%20of...">
            <p style="text-align:center">With each passing minute, the protagonist realized the anonymous threat was getting closer, leaving a trail of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=Beneath%20the%20city's%20bustling%20facade,%20a%20clandestine%20organization%20plotted%20a%20sinister%20conspiracy%20that%20would...">
            <p style="text-align:center">Beneath the city's bustling facade, a clandestine organization plotted a sinister conspiracy that would...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=As%20the%20storm%20raged%20outside,%20a%20mysterious%20package%20arrived,%20containing%20clues%20to%20a%20decades-old%20mystery%20that...">
            <p style="text-align:center">As the storm raged outside, a mysterious package arrived, containing clues to a decades-old mystery that...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=In%20the%20abandoned%20warehouse,%20a%20tense%20standoff%20unfolded,%20revealing%20long-buried%20secrets%20that%20would...">
            <p style="text-align:center">In the abandoned warehouse, a tense standoff unfolded, revealing long-buried secrets that would...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=With%20a%20sudden%20twist%20of%20fate,%20the%20protagonist%20found%20themselves%20entangled%20in%20a%20web%20of%20deception%20that%20threatened%20to...">
            <p style="text-align:center">With a sudden twist of fate, the protagonist found themselves entangled in a web of deception that threatened to...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=Under%20the%20surveillance%20of%20unseen%20eyes,%20the%20main%20character%20discovered%20a%20hidden%20camera,%20signaling%20a%20relentless%20pursuit%20that...">
            <p style="text-align:center">Under the surveillance of unseen eyes, the main character discovered a hidden camera, signaling a relentless pursuit that...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=In%20the%20quiet%20suburb,%20a%20neighbor's%20ordinary%20facade%20unraveled%20to%20expose%20a%20dark%20secret%20that%20would...">
            <p style="text-align:center">In the quiet suburb, a neighbor's ordinary facade unraveled to expose a dark secret that would...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=As%20the%20phone%20rang%20ominously,%20a%20voice%20on%20the%20other%20end%20delivered%20a%20cryptic%20message%20that%20plunged%20the%20protagonist%20into%20a%20high-stakes%20game%20of...">
            <p style="text-align:center">As the phone rang ominously, a voice on the other end delivered a cryptic message that plunged the protagonist into a high-stakes game of...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Thriller Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20relentless%20pursuit%20by%20an%20unknown%20adversary%20in%20a%20high-tech%20cat-and-mouse%20game.">
            <p style="text-align:center">A relentless pursuit by an unknown adversary in a high-tech cat-and-mouse game.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=An%20investigative%20journalist%20unravels%20a%20conspiracy%20that%20reaches%20the%20highest%20echelons%20of%20power.">
            <p style="text-align:center">An investigative journalist unravels a conspiracy that reaches the highest echelons of power.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20gripping%20hostage%20situation%20in%20a%20crowded%20urban%20setting%20with%20hidden%20motives.">
            <p style="text-align:center">A gripping hostage situation in a crowded urban setting with hidden motives.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=An%20unsolved%20cold%20case%20is%20reopened,%20leading%20to%20a%20trail%20of%20unexpected%20revelations.">
            <p style="text-align:center">An unsolved cold case is reopened, leading to a trail of unexpected revelations.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20deadly%20virus%20outbreak%20sparks%20a%20race%20against%20time%20to%20prevent%20a%20global%20catastrophe.">
            <p style="text-align:center">A deadly virus outbreak sparks a race against time to prevent a global catastrophe.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20psychological%20thriller%20involving%20a%20mind-bending%20series%20of%20events%20that%20challenge%20reality.">
            <p style="text-align:center">A psychological thriller involving a mind-bending series of events that challenge reality.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20whistleblower%20exposes%20a%20corporate%20scandal,%20putting%20their%20life%20in%20imminent%20danger.">
            <p style="text-align:center">A whistleblower exposes a corporate scandal, putting their life in imminent danger.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20covert%20mission%20to%20infiltrate%20a%20criminal%20organization%20with%20far-reaching%20consequences.">
            <p style="text-align:center">A covert mission to infiltrate a criminal organization with far-reaching consequences.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=thriller&text=A%20small%20town%20harbors%20a%20dark%20secret,%20and%20an%20outsider's%20investigation%20threatens%20to%20unravel%20it%20all.">
            <p style="text-align:center">A small town harbors a dark secret, and an outsider's investigation threatens to unravel it all.</p>
        </a>
    </div>
</div>
</body>
</html>

