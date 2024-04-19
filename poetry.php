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
        <h2>Poetry Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$PoetryBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$PoetryARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$PoetryWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Beneath%20the%20azure%20sky,%20I%20pen%20a%20verse%20about...">
            <p style="text-align:center">Beneath the azure sky, I pen a verse about...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=In%20the%20gentle%20embrace%20of%20twilight,%20I%20find%20inspiration%20in...">
            <p style="text-align:center">In the gentle embrace of twilight, I find inspiration in...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=With%20each%20stroke%20of%20the%20pen,%20I%20weave%20a%20tapestry%20of%20words%20depicting...">
            <p style="text-align:center">With each stroke of the pen, I weave a tapestry of words depicting...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Amidst%20the%20symphony%20of%20nature,%20my%20verses%20dance%20to%20the%20rhythm%20of...">
            <p style="text-align:center">Amidst the symphony of nature, my verses dance to the rhythm of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=In%20the%20quiet%20hours%20of%20night,%20my%20thoughts%20intertwine%20with...">
            <p style="text-align:center">In the quiet hours of night, my thoughts intertwine with...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=With%20the%20brush%20of%20dawn's%20first%20light,%20I%20paint%20a%20poem%20reflecting...">
            <p style="text-align:center">With the brush of dawn's first light, I paint a poem reflecting...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Beneath%20the%20silvery%20glow%20of%20the%20moon,%20I%20conjure%20verses%20about...">
            <p style="text-align:center">Beneath the silvery glow of the moon, I conjure verses about...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=In%20the%20tender%20moments%20of%20solitude,%20my%20poetry%20explores...">
            <p style="text-align:center">In the tender moments of solitude, my poetry explores...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=With%20the%20fragrance%20of%20blossoms,%20my%20verses%20bloom%20with%20reflections%20on...">
            <p style="text-align:center">With the fragrance of blossoms, my verses bloom with reflections on...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Poetry Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=The%20beauty%20and%20transience%20of%20fleeting%20moments%20in%20nature.">
            <p style="text-align:center">The beauty and transience of fleeting moments in nature.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=A%20journey%20through%20the%20labyrinth%20of%20emotions%20and%20self-discovery.">
            <p style="text-align:center">A journey through the labyrinth of emotions and self-discovery.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Reflections%20on%20the%20passage%20of%20time%20and%20the%20inevitability%20of%20change.">
            <p style="text-align:center">Reflections on the passage of time and the inevitability of change.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Celebrating%20the%20resilience%20and%20strength%20found%20in%20the%20human%20spirit.">
            <p style="text-align:center">Celebrating the resilience and strength found in the human spirit.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Exploring%20the%20complexities%20of%20love,%20its%20joys,%20and%20heartaches.">
            <p style="text-align:center">Exploring the complexities of love, its joys, and heartaches.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=An%20ode%20to%20the%20wonders%20and%20mysteries%20of%20the%20universe%20and%20cosmos.">
            <p style="text-align:center">An ode to the wonders and mysteries of the universe and cosmos.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Capturing%20the%20essence%20of%20a%20cityscape%20and%20the%20stories%20it%20holds.">
            <p style="text-align:center">Capturing the essence of a cityscape and the stories it holds.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=Musing%20on%20the%20delicate%20balance%20between%20light%20and%20darkness%20in%20life.">
            <p style="text-align:center">Musing on the delicate balance between light and darkness in life.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=poetry&text=The%20interplay%20of%20dreams%20and%20reality,%20blurring%20the%20boundaries%20of%20the%20mind.">
            <p style="text-align:center">The interplay of dreams and reality, blurring the boundaries of the mind.</p>
        </a>
    </div>
</div>
</body>
</html>


