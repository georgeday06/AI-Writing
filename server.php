<?php
session_start();
$errors = array();

$db = mysqli_connect('localhost', 'george_promptpal', '', 'george_promptpal');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to safely fetch data from POST
function test_input($data) {
    global $db;
    $data = trim($data);
    $data = stripslashes($data);
    return mysqli_real_escape_string($db, $data);
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Receive input values from the form
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password_1 = test_input($_POST['password_1']);
    $password_2 = test_input($_POST['password_2']);

    // Form validation: add corresponding errors to $errors array
    $errors = [];
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Check if user already exists
    $stmt = $db->prepare("SELECT * FROM users WHERE username=? OR email=? LIMIT 1");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT); // Encrypt password
        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $stmt->execute();
        
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
       
        $stmt = $db->prepare("INSERT INTO statistics (username) VALUES (?)");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        header('location: index.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    $errors = [];
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $stmt = $db->prepare("SELECT * FROM users WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $user['email']; // Store the email in the session
            $_SESSION['regdate'] = $user['regdate']; // Store the regdate in the session
            $_SESSION['userid'] = $user['userid']; // Storing user ID in session
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

if (isset($_SESSION['averageRating'], $_SESSION['genre'])) {
    $averageRating = $_SESSION['averageRating'];
    $genre = $_SESSION['genre'];

    if ($genre === 'Horror') {
        $stmt = $db->prepare("SELECT HorrorARating FROM users WHERE username = ?");
        $stmt->bind_param("s", $_SESSION['username']);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $existingAverage = $row['HorrorARating'];

        if ($averageRating > $existingAverage) {
            $stmt = $db->prepare("UPDATE users SET HorrorBRating = ?, HorrorARating = ? WHERE username = ?");
            $newAverage = ($existingAverage + $averageRating) / 2;
            $stmt->bind_param("dsi", $averageRating, $newAverage, $_SESSION['username']);
            $stmt->execute();
        } elseif ($averageRating < $existingAverage) {
            $stmt = $db->prepare("UPDATE users SET HorrorWRating = ?, HorrorARating = ? WHERE username = ?");
            $newAverage = ($existingAverage + $averageRating) / 2;
            $stmt->bind_param("dsi", $averageRating, $newAverage, $_SESSION['username']);
            $stmt->execute();
        }
    }
}

?>