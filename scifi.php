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
        <h2>Sci-FI Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$SciFiBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$SciFiARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$SciFiWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=Beneath%20the%20neon%20glow%20of%20the%20metropolis,%20a%20futuristic%20android%20pondered...">
            <p style="text-align:center">Beneath the neon glow of the metropolis, a futuristic android pondered...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=With%20a%20hum,%20the%20spacecraft%20accelerated,%20propelling%20the%20crew%20toward...">
            <p style="text-align:center">With a hum, the spacecraft accelerated, propelling the crew toward...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=In%20the%20virtual%20realm,%20a%20sentient%20AI%20contemplated%20the%20implications%20of...">
            <p style="text-align:center">In the virtual realm, a sentient AI contemplated the implications of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=Amidst%20the%20flickering%20holograms,%20a%20scientist%20discovered%20the%20key%20to...">
            <p style="text-align:center">Amidst the flickering holograms, a scientist discovered the key to...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=With%20a%20quantum%20leap,%20the%20time%20traveler%20found%20themselves%20in%20a%20future%20where...">
            <p style="text-align:center">With a quantum leap, the time traveler found themselves in a future where...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=In%20the%20bioengineered%20cityscape,%20a%20rebel%20contemplated%20the%20consequences%20of...">
            <p style="text-align:center">In the bioengineered cityscape, a rebel contemplated the consequences of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=Beneath%20the%20alien%20sky,%20a%20lone%20explorer%20marveled%20at%20the%20wonders%20of...">
            <p style="text-align:center">Beneath the alien sky, a lone explorer marveled at the wonders of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=With%20a%20neural%20link,%20minds%20connected,%20unraveling%20the%20mysteries%20of...">
            <p style="text-align:center">With a neural link, minds connected, unraveling the mysteries of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=In%20the%20augmented%20reality,%20a%20hacker%20uncovered%20a%20hidden%20truth%20about...">
            <p style="text-align:center">In the augmented reality, a hacker uncovered a hidden truth about...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Sci-Fi Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=Exploring%20the%20intricacies%20of%20a%20society%20governed%20by%20advanced%20AI.">
            <p style="text-align:center">Exploring the intricacies of a society governed by advanced AI.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=A%20journey%20to%20distant%20galaxies%20in%20search%20of%20a%20habitable%20exoplanet.">
            <p style="text-align:center">A journey to distant galaxies in search of a habitable exoplanet.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=The%20ethical%20dilemmas%20surrounding%20the%20creation%20of%20sentient%20androids.">
            <p style="text-align:center">The ethical dilemmas surrounding the creation of sentient androids.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=A%20breakthrough%20in%20quantum%20technology%20that%20alters%20the%20fabric%20of%20reality.">
            <p style="text-align:center">A breakthrough in quantum technology that alters the fabric of reality.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=A%20rebellion%20against%20a%20dystopian%20regime%20ruled%20by%20powerful%20corporations.">
            <p style="text-align:center">A rebellion against a dystopian regime ruled by powerful corporations.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=The%20consequences%20of%20genetic%20manipulation%20leading%20to%20enhanced%20abilities.">
            <p style="text-align:center">The consequences of genetic manipulation leading to enhanced abilities.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=Contact%20with%20extraterrestrial%20life%20and%20the%20challenges%20of%20interstellar%20diplomacy.">
            <p style="text-align:center">Contact with extraterrestrial life and the challenges of interstellar diplomacy.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=The%20exploration%20of%20parallel%20universes%20through%20a%20groundbreaking%20experiment.">
            <p style="text-align:center">The exploration of parallel universes through a groundbreaking experiment.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=sci-fi&text=A%20post-apocalyptic%20world%20where%20survivors%20adapt%20to%20a%20technologically%20transformed%20environment.">
            <p style="text-align:center">A post-apocalyptic world where survivors adapt to a technologically transformed environment.</p>
        </a>
    </div>
</div>
</body>
</html>

