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
        <h2>Crime Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$CrimeBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$CrimeARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$CrimeWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Under%20the%20dim%20streetlight,%20the%20detective%20scrutinized...">
            <p style="text-align:center">Under the dim streetlight, the detective scrutinized...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=In%20the%20eerie%20silence%20of%20the%20crime%20scene,%20the%20investigator%20discovered...">
            <p style="text-align:center">In the eerie silence of the crime scene, the investigator discovered...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=With%20a%20furrowed%20brow,%20the%20detective%20questioned%20the%20suspect%20about...">
            <p style="text-align:center">With a furrowed brow, the detective questioned the suspect about...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Amidst%20the%20chaos%20of%20the%20investigation,%20the%20detective%20unraveled...">
            <p style="text-align:center">Amidst the chaos of the investigation, the detective unraveled...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=In%20the%20clandestine%20meeting,%20the%20informant%20disclosed%20critical%20information%20about...">
            <p style="text-align:center">In the clandestine meeting, the informant disclosed critical information about...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=With%20a%20chilling%20revelation,%20the%20investigator%20uncovered%20a%20sinister%20plot%20involving...">
            <p style="text-align:center">With a chilling revelation, the investigator uncovered a sinister plot involving...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=In%20the%20dimly%20lit%20alley,%20the%20detective%20stumbled%20upon...">
            <p style="text-align:center">In the dimly lit alley, the detective stumbled upon...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=With%20a%20stern%20gaze,%20the%20interrogator%20pressed%20the%20suspect%20for%20details%20on...">
            <p style="text-align:center">With a stern gaze, the interrogator pressed the suspect for details on...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=As%20the%20evidence%20mounted,%20the%20detective%20pieced%20together%20the%20puzzle%20of...">
            <p style="text-align:center">As the evidence mounted, the detective pieced together the puzzle of...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Crime Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=A%20high-profile%20art%20theft%20at%20a%20prestigious%20gallery.">
            <p style="text-align:center">A high-profile art theft at a prestigious gallery.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Unraveling%20a%20web%20of%20corruption%20within%20a%20powerful%20organization.">
            <p style="text-align:center">Unraveling a web of corruption within a powerful organization.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Investigating%20a%20series%20of%20mysterious%20disappearances%20in%20a%20small%20town.">
            <p style="text-align:center">Investigating a series of mysterious disappearances in a small town.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Cracking%20a%20complex%20code%20leading%20to%20an%20underground%20criminal%20network.">
            <p style="text-align:center">Cracking a complex code leading to an underground criminal network.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=A%20daring%20heist%20targeting%20a%20top-secret%20government%20facility.">
            <p style="text-align:center">A daring heist targeting a top-secret government facility.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=The%20pursuit%20of%20a%20notorious%20serial%20killer%20terrorizing%20the%20city.">
            <p style="text-align:center">The pursuit of a notorious serial killer terrorizing the city.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Infiltrating%20a%20drug%20cartel%20operation%20to%20dismantle%20their%20criminal%20empire.">
            <p style="text-align:center">Infiltrating a drug cartel operation to dismantle their criminal empire.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=A%20cybercrime%20investigation%20involving%20a%20sophisticated%20hacking%20scheme.">
            <p style="text-align:center">A cybercrime investigation involving a sophisticated hacking scheme.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=crime&text=Uncovering%20a%20political%20scandal%20involving%20bribery%20and%20extortion.">
            <p style="text-align:center">Uncovering a political scandal involving bribery and extortion.</p>
        </a>
    </div>
</div>

    </div>
</body>
</html>


