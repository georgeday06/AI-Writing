<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Writing Prompt</title>
    <script src="https://kit.fontawesome.com/eb2c206d83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Styles.css">

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
        <h2>Horror Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$HorrorBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$HorrorARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$HorrorWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=Beneath%20the%20pale%20moonlight,%20an%20eerie%20sound%20echoed%20through%20the%20desolate%20graveyard,%20signaling.">
        <p style="text-align:center">Beneath the pale moonlight, an eerie sound echoed through the desolate graveyard, signaling...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=In%20the%20creaking%20darkness%20of%20the%20abandoned%20mansion,%20a%20shadowy%20figure%20emerged,%20haunting.">
        <p style="text-align:center">In the creaking darkness of the abandoned mansion, a shadowy figure emerged, haunting...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=As%20the%20wind%20whispered%20through%20the%20ancient%20trees,%20a%20chilling%20presence%20stirred,%20foretelling.">
        <p style="text-align:center">As the wind whispered through the ancient trees, a chilling presence stirred, foretelling...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=Amidst%20the%20flickering%20candlelight,%20a%20bloodcurdling%20scream%20pierced%20the%20air,%20foreshadowing.">
        <p style="text-align:center">Amidst the flickering candlelight, a bloodcurdling scream pierced the air, foreshadowing...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=In%20the%20ominous%20silence%20of%20the%20haunted%20asylum,%20a%20ghostly%20apparition%20manifested,%20revealing.">
        <p style="text-align:center">In the ominous silence of the haunted asylum, a ghostly apparition manifested, revealing...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=With%20each%20step%20down%20the%20narrow%20corridor,%20an%20unsettling%20feeling%20of%20dread%20enveloped%20the%20character,%20hinting%20at.">
        <p style="text-align:center">With each step down the narrow corridor, an unsettling feeling of dread enveloped the character, hinting at...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=As%20the%20protagonist%20uncovered%20the%20cryptic%20journal,%20they%20realized%20the%20horrifying%20truth%20about.">
        <p style="text-align:center">As the protagonist uncovered the cryptic journal, they realized the horrifying truth about...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=In%20the%20ghostly%20glow%20of%20the%20abandoned%20lighthouse,%20an%20otherworldly%20phenomenon%20emerged,%20signaling.">
        <p style="text-align:center">In the ghostly glow of the abandoned lighthouse, an otherworldly phenomenon emerged, signaling...</p>
    </a>
</div>
<div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
    <a href="/writing.php?genre=horror&text=Beneath%20the%20surface%20of%20the%20murky%20lake,%20a%20malevolent%20force%20stirred,%20unleashing.">
        <p style="text-align:center">Beneath the surface of the murky lake, a malevolent force stirred, unleashing...</p>
    </a>
</div>


    </div>
<div class="RandomTopic">
    <h2>Horror Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=A%20curse%20that%20plagues%20a%20small,%20isolated%20village%20with%20unexplainable%20phenomena.">
            <p style="text-align:center">A curse that plagues a small, isolated village with unexplainable phenomena.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=The%20restless%20spirits%20of%20a%20haunted%20family%20seeking%20vengeance%20in%20an%20old%20mansion.">
            <p style="text-align:center">The restless spirits of a haunted family seeking vengeance in an old mansion.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=An%20ancient,%20forbidden%20ritual%20that%20unleashes%20dark%20forces%20upon%20an%20unsuspecting%20town.">
            <p style="text-align:center">An ancient, forbidden ritual that unleashes dark forces upon an unsuspecting town.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=The%20malevolent%20presence%20haunting%20a%20long-forgotten%20cemetery%20and%20its%20unsuspecting%20visitors.">
            <p style="text-align:center">The malevolent presence haunting a long-forgotten cemetery and its unsuspecting visitors.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=The%20mysteries%20and%20horrors%20hidden%20within%20the%20depths%20of%20an%20abandoned%20psychiatric%20hospital.">
            <p style="text-align:center">The mysteries and horrors hidden within the depths of an abandoned psychiatric hospital.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=A%20haunted%20asylum%20with%20a%20dark%20history,%20where%20the%20boundaries%20between%20reality%20and%20nightmare%20blur.">
            <p style="text-align:center">A haunted asylum with a dark history, where the boundaries between reality and nightmare blur.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=A%20malevolent%20entity%20that%20manifests%20through%20a%20cursed%20artifact,%20terrorizing%20its%20possessors.">
            <p style="text-align:center">A malevolent entity that manifests through a cursed artifact, terrorizing its possessors.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=The%20chilling%20events%20that%20unfold%20during%20a%20stormy%20night%20in%20a%20remote%20and%20isolated%20lighthouse.">
            <p style="text-align:center">The chilling events that unfold during a stormy night in a remote and isolated lighthouse.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=horror&text=A%20malevolent%20spirit%20trapped%20within%20the%20confines%20of%20a%20mysterious,%20sunken%20ship.">
            <p style="text-align:center">A malevolent spirit trapped within the confines of a mysterious, sunken ship.</p>
        </a>
    </div>
</div>
    </div>
</body>
</html>


