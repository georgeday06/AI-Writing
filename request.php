<?php
session_start();

require __DIR__ . '/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '';
$open_ai = new OpenAi($open_ai_key);

$prompt = isset($_GET['prompt']) ? $_GET['prompt'] : '';
$genre = isset($_GET['genre']) ? $_GET['genre'] : '';

$_SESSION['averageRating'] = $averageRating;
$_SESSION['genre'] = $genre;

try {
    if (!empty($prompt) && !empty($genre)) {
        $chat = $open_ai->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    "role" => "system",
                    "content" => "You are a chat bot made to review the writing based on three things. Quality of writing: [QUALITY_RATING]" . PHP_EOL . "Suitability to the topic: [SUITABILITY_RATING]" . PHP_EOL . "Readability of writing: [READABILITY_RATING]" . PHP_EOL . "They should be rated on a scale 1/10, and only say what you're rating and the rating itself. The theme is $genre. Be really harsh when grading."
                ],
                [
                    "role" => "user",
                    "content" => $prompt,
                ]
            ],
            'temperature' => 1.0,
            'max_tokens' => 40,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ]);

        $chat = json_decode($chat, true);

        if (isset($chat['choices'][0]['message']['content'])) {
            $assistantMessage = $chat['choices'][0]['message']['content'];

            // Extract numeric ratings using regular expressions
            preg_match_all('/(\d+)\/10/', $assistantMessage, $ratings);

            // Calculate the total and average ratings
            $totalRating = array_sum($ratings[1]);
            $averageRating = round($totalRating / count($ratings[1]), 2);

            // Store the variables in the session for server.php to access
            $_SESSION['averageRating'] = $averageRating;
            $_SESSION['genre'] = $genre;

            // Display the results
            echo $assistantMessage;
            echo "<br>Your Score: $averageRating";
        } else {
            echo "Unable to retrieve the assistant's message.";
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
