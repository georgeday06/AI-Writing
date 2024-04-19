<?php
include('server.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'src/Exception.php';

/* The main PHPMailer class. */
require 'src/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'src/SMTP.php';

$error = "";

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (!$email) {
        $error .= "<p>Invalid email address, please type a valid email address!</p>";
    } else {
        $sel_query = "SELECT * FROM `users` WHERE email='" . $email . "'";
        $results = mysqli_query($db, $sel_query);
        $row = mysqli_num_rows($results);

        if ($row == "") {
            $error .= "<p>No user is registered with this email address!</p>";
        }
    }

    if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br /><a href='javascript:history.go(-1)'>Go Back</a>";
    } else {
        $expFormat = strtotime("+1 day");
        $expDate = date("Y-m-d H:i:s", $expFormat);
        $key = md5(2418 * 2 + $email);
        $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
        $key = $key . $addKey;

        // Use prepared statements for better security
        $query = "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "sss", $email, $key, $expDate);
        mysqli_stmt_execute($stmt);

        $output = '<p>Dear user,</p>';
        $output .= '<p>Please click on the following link to reset your password.</p>';
        $output .= '<p>-------------------------------------------------------------</p>';
        $output .= '<p><a href="https://www.samwhit.georgeday.uk/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">https://www.samwhit.georgeday.uk/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
        $output .= '<p>-------------------------------------------------------------</p>';
        $output .= '<p>Please be sure to copy the entire link into your browser. The link will expire after 1 day for security reasons.</p>';
        $output .= '<p>If you did not request this forgotten password email, no action is needed; your password will not be reset. However, you may want to log into your account and change your security password as someone may have guessed it.</p>';
        $output .= '<p>Thanks,</p>';
        $output .= '<p>PromptPal</p>';

        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; // Update with your host
        $mail->SMTPAuth = true;
        $mail->Username = "promptpal@georgeday.uk"; // Update with your email
        $mail->Password = "qgos tfyp mowe jaqw!"; // Update with your password
        $mail->Port = 465;
        $mail->Subject = "Password Recovery - PromptPal";
        $mail->Body = $output;
        $mail->AddAddress($email);

        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "<div class='success'>
                    <p>An email has been sent to you with instructions on how to reset your password.</p>
                </div><br /><br /><br />";
        }
    }
}

?>
<form method="post" action="" name="reset"><br /><br />
    <label><strong>Enter Your Email Address:</strong></label><br /><br />
    <input type="email" name="email" placeholder="username@email.com" />
    <br /><br />
    <input type="submit" value="Reset Password" />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
