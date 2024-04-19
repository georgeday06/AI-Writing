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
        <h2>Fantasy Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$FantasyBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$FantasyARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$FantasyWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
<div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=Beneath%20the%20ancient,%20twisted%20oak%20tree,%20a%20mystical%20portal%20opened,%20revealing...">
            <p style="text-align:center">Beneath the ancient, twisted oak tree, a mystical portal opened, revealing...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=In%20the%20ethereal%20glow%20of%20the%20moon,%20a%20magical%20creature%20emerged,%20possessing...">
            <p style="text-align:center">In the ethereal glow of the moon, a magical creature emerged, possessing...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=Upon%20uttering%20the%20enchanted%20words,%20the%20protagonist%20found%20themselves%20transported%20to...">
            <p style="text-align:center">Upon uttering the enchanted words, the protagonist found themselves transported to...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=Amidst%20the%20swirling%20mists,%20a%20long-forgotten%20prophecy%20foretold%20the%20arrival%20of...">
            <p style="text-align:center">Amidst the swirling mists, a long-forgotten prophecy foretold the arrival of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=With%20a%20flick%20of%20the%20wizard's%20wand,%20an%20otherworldly%20realm%20materialized,%20featuring...">
            <p style="text-align:center">With a flick of the wizard's wand, an otherworldly realm materialized, featuring...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=In%20the%20hidden%20caverns%20of%20the%20mountain,%20a%20treasure%20chest%20held%20an%20artifact%20of%20unimaginable%20power,%20capable%20of...">
            <p style="text-align:center">In the hidden caverns of the mountain, a treasure chest held an artifact of unimaginable power, capable of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=As%20the%20ancient%20tome%20was%20opened,%20a%20spell%20was%20cast,%20conjuring...">
            <p style="text-align:center">As the ancient tome was opened, a spell was cast, conjuring...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=Within%20the%20enchanted%20forest,%20mythical%20beings%20gathered%20to%20discuss%20the%20fate%20of...">
            <p style="text-align:center">Within the enchanted forest, mythical beings gathered to discuss the fate of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=Beneath%20the%20starry%20sky,%20the%20chosen%20one%20embarked%20on%20a%20quest%20to%20retrieve%20the%20legendary%20artifact%20known%20as...">
            <p style="text-align:center">Beneath the starry sky, the chosen one embarked on a quest to retrieve the legendary artifact known as...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Fantasy Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=The%20quest%20to%20recover%20a%20stolen%20dragon%20egg%20from%20a%20treacherous%20sorcerer.">
            <p style="text-align:center">The quest to recover a stolen dragon egg from a treacherous sorcerer.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=A%20kingdom%20on%20the%20brink%20of%20war,%20threatened%20by%20a%20dark%20wizard's%20nefarious%20plans.">
            <p style="text-align:center">A kingdom on the brink of war, threatened by a dark wizard's nefarious plans.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=Exploring%20the%20floating%20islands%20in%20the%20sky,%20home%20to%20mystical%20creatures%20and%20hidden%20civilizations.">
            <p style="text-align:center">Exploring the floating islands in the sky, home to mystical creatures and hidden civilizations.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=The%20awakening%20of%20an%20ancient,%20slumbering%20giant%20that%20holds%20the%20key%20to%20restoring%20balance.">
            <p style="text-align:center">The awakening of an ancient, slumbering giant that holds the key to restoring balance.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=A%20journey%20through%20the%20mystical%20Mirror%20Maze,%20where%20reality%20and%20illusion%20intertwine.">
            <p style="text-align:center">A journey through the mystical Mirror Maze, where reality and illusion intertwine.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=The%20discovery%20of%20a%20hidden%20city%20deep%20within%20the%20heart%20of%20an%20enchanted%20forest.">
            <p style="text-align:center">The discovery of a hidden city deep within the heart of an enchanted forest.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=A%20magical%20academy%20where%20young%20apprentices%20learn%20to%20harness%20the%20power%20of%20elemental%20magic.">
            <p style="text-align:center">A magical academy where young apprentices learn to harness the power of elemental magic.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=The%20battle%20against%20a%20malevolent%20curse%20that%20transforms%20the%20land%20into%20a%20perpetual%20winter.">
            <p style="text-align:center">The battle against a malevolent curse that transforms the land into a perpetual winter.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=fantasy&text=A%20prophecy%20foretelling%20the%20rise%20of%20a%20hero%20destined%20to%20defeat%20a%20colossal,%20ancient%20serpent.">
            <p style="text-align:center">A prophecy foretelling the rise of a hero destined to defeat a colossal, ancient serpent.</p>
        </a>
    </div>
</div>
    </div>
</body>
</html>


