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
        <h2>Comedy Statistics</h2><br>
        <h4>Your Best Raiting:</h4>
        <?php echo "$ComedyBRating";?>
        <h4>Your Average Rating:</h4>
        <?php echo "$ComedyARating";?>
        <h4>Your Worst Rating:</h4>
        <?php echo "$ComedyWRating";?>
    </div>
    <div class="main" style="background-color:#333333;">
    <div class="SentenceStarter">
    <h2>Sentence Starters</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=With%20a%20mischievous%20grin,%20the%20character...">
            <p style="text-align:center">With a mischievous grin, the character...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=In%20a%20hilarious%20twist%20of%20fate,%20they%20suddenly...">
            <p style="text-align:center">In a hilarious twist of fate, they suddenly...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Trying%20their%20best%20to%20keep%20a%20straight%20face,%20they...">
            <p style="text-align:center">Trying their best to keep a straight face, they...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=With%20impeccable%20timing,%20the%20comedian%20delivers...">
            <p style="text-align:center">With impeccable timing, the comedian delivers...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Caught%20in%20a%20comical%20predicament,%20the%20protagonist...">
            <p style="text-align:center">Caught in a comical predicament, the protagonist...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=In%20a%20classic%20case%20of%20mistaken%20identity,%20they...">
            <p style="text-align:center">In a classic case of mistaken identity, they...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=With%20slapstick%20finesse,%20the%20character%20attempts...">
            <p style="text-align:center">With slapstick finesse, the character attempts...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=In%20a%20side-splitting%20turn%20of%20events,%20they%20find%20themselves...">
            <p style="text-align:center">In a side-splitting turn of events, they find themselves...</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Wielding%20a%20barrage%20of%20witty%20one-liners,%20the%20comedian...">
            <p style="text-align:center">Wielding a barrage of witty one-liners, the comedian...</p>
        </a>
    </div>
</div>
<div class="RandomTopic">
    <h2>Comedy Topics</h2>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Navigating%20a%20chaotic%20family%20dinner%20with%20unexpected%20guests.">
            <p style="text-align:center">Navigating a chaotic family dinner with unexpected guests.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Embarking%20on%20a%20disastrous%20blind%20date%20filled%20with%20awkward%20moments.">
            <p style="text-align:center">Embarking on a disastrous blind date filled with awkward moments.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Participating%20in%20a%20quirky%20town%20talent%20show%20with%20eccentric%20acts.">
            <p style="text-align:center">Participating in a quirky town talent show with eccentric acts.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Enduring%20a%20series%20of%20amusing%20mishaps%20during%20a%20vacation%20gone%20wrong.">
            <p style="text-align:center">Enduring a series of amusing mishaps during a vacation gone wrong.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Attempting%20to%20master%20a%20bizarre%20and%20humorous%20new%20skill%20or%20hobby.">
            <p style="text-align:center">Attempting to master a bizarre and humorous new skill or hobby.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Surviving%20a%20comically%20disastrous%20job%20interview%20situation.">
            <p style="text-align:center">Surviving a comically disastrous job interview situation.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Getting%20entangled%20in%20a%20hilarious%20case%20of%20mistaken%20identity.">
            <p style="text-align:center">Getting entangled in a hilarious case of mistaken identity.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Navigating%20the%20challenges%20of%20a%20whimsical%20and%20dysfunctional%20workplace.">
            <p style="text-align:center">Navigating the challenges of a whimsical and dysfunctional workplace.</p>
        </a>
    </div>
    <div class="GenreCatagory" style="width:87%; height:100px; background-color:lightgray; color:black; font-size:20px;">
        <a href="/writing.php?genre=comedy&text=Embarking%20on%20a%20comedic%20quest%20for%20the%20perfect%20cup%20of%20coffee%20or%20meal.">
            <p style="text-align:center">Embarking on a comedic quest for the perfect cup of coffee or meal.</p>
        </a>
    </div>
</div>

    </div>
</body>
</html>


