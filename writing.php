<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Writing Prompt</title>
    <script src="https://kit.fontawesome.com/eb2c206d83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Styles.css">
    <style>
        #chat-container {
            max-width: 80%;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #chat-box {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
        }

        .chat-message {
            background-color: #f1f0f0;
            color: #000;
            padding: 8px 12px;
            margin-bottom: 10px;
            border-radius: 10px;
            max-width: 70%;
        }

        .chat-message-received {
            background-color: #3CBC8D;
            padding: 8px 12px;
            margin-bottom: 10px;
            border-radius: 10px;
            max-width: 70%;
        }

        #user-input {
            width: calc(100% - 80px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }

        #send-btn {
            width: 60px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #3CBC8D;
            color: #fff;
            cursor: pointer;
            margin: 10px;
        }

        #send-btn:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }

        #send-btn:hover {
            background-color: #369872;
        }
    </style>
</head>
<body>
    <?php
    include('header.php');
    $genre = $_GET['genre'] ?? ''; // Use the null coalescing operator to handle undefined values
    $text = $_GET['text'] ?? '';
    $message = "Your selected theme is " . $genre . ". Your selected text is: " . $text . " Please enter your writing and press submit.";
    ?>
    <div id="progressbar">
        <h2>Horror Statistics</h2><br>
        <h4>Your Best Rating:</h4>
        <div id="bestRating"></div>
        <h4>Your Average Rating:</h4>
        <div id="averageRating"></div>
        <h4>Your Worst Rating:</h4>
        <div id="worstRating"></div>
    </div>
    <div id="main">
        <div id="chat-container">
            <div id="chat-box">
                <div class="chat-message"><?php echo $message ?></div>
                <div class="chat-message-received" id="response-message"></div>
            </div>
            <input type="text" id="user-input" placeholder="Enter your writing.">
            <button id="send-btn" onclick="sendWriting()">Send</button>
        </div>
    </div>

    <script>
    function sendWriting() {
        var userInput = document.getElementById('user-input').value;
        var btn = document.getElementById('send-btn');

        if (userInput.trim() === "") {
            alert("Please enter your writing.");
            return;
        }

        // Disable the button to prevent multiple clicks
        btn.disabled = true;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('response-message').innerHTML = this.responseText;
                updateRatings(this.responseText);
            } else if (this.readyState == 4) {
                // Enable the button if there was an error or the request is completed
                btn.disabled = false;
            }
        };
        xhttp.open('GET', 'request.php?prompt=' + encodeURIComponent(userInput) + '&genre=<?php echo $genre; ?>', true);
        xhttp.send();
    }

    function updateRatings(response) {
        var ratings = JSON.parse(response);
        var bestRating = ratings.choices[0].message.content.split('\n')[0];
        var averageRating = ratings.choices[0].message.content.split('\n')[1];
        var worstRating = ratings.choices[0].message.content.split('\n')[2];

        document.getElementById('bestRating').innerText = bestRating;
        document.getElementById('averageRating').innerText = averageRating;
        document.getElementById('worstRating').innerText = worstRating;
    }
</script>
</body>
</html>
