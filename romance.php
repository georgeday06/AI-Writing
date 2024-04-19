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
        <h2>Romance Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$RomanceBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$RomanceARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$RomanceWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=Under%20the%20starlit%20sky,%20their%20hearts%20entwined%20as%20they%20shared%20a%20moment%20of...">
            <p style="text-align:center">Under the starlit sky, their hearts entwined as they shared a moment of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=With%20a%20gentle%20touch,%20they%20exchanged%20glances,%20igniting%20a%20spark%20of...">
            <p style="text-align:center">With a gentle touch, they exchanged glances, igniting a spark of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=In%20the%20soft%20glow%20of%20candlelight,%20their%20laughter%20echoed,%20creating%20an%20atmosphere%20of...">
            <p style="text-align:center">In the soft glow of candlelight, their laughter echoed, creating an atmosphere of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=As%20the%20sun%20dipped%20below%20the%20horizon,%20they%20embraced,%20lost%20in%20the%20magic%20of...">
            <p style="text-align:center">As the sun dipped below the horizon, they embraced, lost in the magic of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=With%20a%20shy%20smile,%20they%20confessed%20their%20feelings,%20kindling%20the%20flame%20of...">
            <p style="text-align:center">With a shy smile, they confessed their feelings, kindling the flame of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=Amidst%20the%20blooming%20flowers,%20they%20walked%20hand%20in%20hand,%20savoring%20the%20sweetness%20of...">
            <p style="text-align:center">Amidst the blooming flowers, they walked hand in hand, savoring the sweetness of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=In%20the%20warmth%20of%20each%20other's%20gaze,%20they%20discovered%20the%20beauty%20of...">
            <p style="text-align:center">In the warmth of each other's gaze, they discovered the beauty of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=With%20a%20whispered%20promise,%20they%20sealed%20their%20love%20in%20a%20moment%20of...">
            <p style="text-align:center">With a whispered promise, they sealed their love in a moment of...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=Beneath%20the%20cherry%20blossom%20trees,%20they%20shared%20a%20tender%20kiss,%20capturing%20the%20essence%20of...">
            <p style="text-align:center">Beneath the cherry blossom trees, they shared a tender kiss, capturing the essence of...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Romance Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=A%20chance%20encounter%20that%20blossoms%20into%20a%20timeless%20love%20story.">
            <p style="text-align:center">A chance encounter that blossoms into a timeless love story.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=Navigating%20the%20challenges%20of%20a%20long-distance%20relationship%20with%20unwavering%20devotion.">
            <p style="text-align:center">Navigating the challenges of a long-distance relationship with unwavering devotion.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=The%20tender%20moments%20of%20a%20slow-burning%20romance%20that%20defies%20societal%20expectations.">
            <p style="text-align:center">The tender moments of a slow-burning romance that defies societal expectations.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=An%20unexpected%20reunion%20with%20a%20past%20love%20that%20reignites%20dormant%20feelings.">
            <p style="text-align:center">An unexpected reunion with a past love that reignites dormant feelings.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=The%20passion%20and%20intensity%20of%20a%20whirlwind%20romance%20that%20takes%20the%20lovers%20on%20a%20journey.">
            <p style="text-align:center">The passion and intensity of a whirlwind romance that takes the lovers on a journey.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=A%20love%20that%20transcends%20time,%20connecting%20souls%20across%20different%20eras%20or%20dimensions.">
            <p style="text-align:center">A love that transcends time, connecting souls across different eras or dimensions.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=Exploring%20the%20magic%20of%20a%20romantic%20getaway%20that%20strengthens%20the%20bond%20between%20partners.">
            <p style="text-align:center">Exploring the magic of a romantic getaway that strengthens the bond between partners.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=Overcoming%20obstacles%20and%20sacrifices%20for%20a%20love%20that%20conquers%20all%20challenges.">
            <p style="text-align:center">Overcoming obstacles and sacrifices for a love that conquers all challenges.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=romance&text=The%20exploration%20of%20self-love%20and%20acceptance%20as%20a%20foundation%20for%20a%20fulfilling%20romantic%20relationship.">
            <p style="text-align:center">The exploration of self-love and acceptance as a foundation for a fulfilling romantic relationship.</p>
        </a>
    </div>
</div>
</body>
</html>

