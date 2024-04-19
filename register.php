<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="/css/login.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #f4f4f4;
        }
        .input-group {
          position: relative;
          }

        .tooltip {
          display: none;
          position: absolute;
          top: 100%;
          left: 50%;
          transform: translateX(-50%);
          background-color: #333;
          color: white;
          padding: 10px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          z-index: 1;
        }

        .input-group:hover .tooltip {
            display: block;
        }

        #main {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #333333;
            color: black;
            text-align: center;
        }

        .register-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333333;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #333333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #555555;
        }

        p {
            margin-top: 15px;
            color: #333333;
        }

        a {
            color: #333333;
            text-decoration: none;
            font-weight: bold;
        }
    </style>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to validate the password
            function validatePassword() {
                var password = document.getElementById('password_1').value;
                var passwordTooltip = document.getElementById('passwordTooltip');

                // Defines the password requirements
                var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

                // Check if the password meets the requirements
                if (regex.test(password)) {
                    passwordTooltip.style.color = 'green';
                    passwordTooltip.innerHTML = 'Password meets the requirements';
                } else {
                    passwordTooltip.style.color = 'red';
                    passwordTooltip.innerHTML = 'Password must contain:<br>' +
                        '- At least 8 characters<br>' +
                        '- At least one uppercase letter<br>' +
                        '- At least one lowercase letter<br>' +
                        '- At least one digit';
                }
            }

            // Attach the validatePassword function to the input event
            document.getElementById('password_1').addEventListener('input', validatePassword);

            // Form submission handler
            document.getElementById('registrationForm').addEventListener('submit', function (event) {
                // Validate the password one more time before submitting the form
                validatePassword();

                // Check if password requirements are met
                if (!passwordRequirementsMet()) {
                    event.preventDefault();
                    alert('The entered password does not meet the security requirements.');
                }
            });

            // Function to check if password requirements are met
            function passwordRequirementsMet() {
                var passwordTooltip = document.getElementById('passwordTooltip');
                return passwordTooltip.style.color === 'green';
            }
        });
    </script>

</head>

<body>
    <div id="main">
        <div class="register-container">
            <h2>Register</h2>
            <form id="registrationForm" method="post" action="register.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password_1" id="password_1" required>
                    <div class="tooltip" id="passwordTooltip">
                      <p>Password must contain:</p>
                      <ul>
                        <li>At least 8 characters</li>
                        <li>At least one uppercase letter</li>
                        <li>At least one lowercase letter</li>
                        <li>At least one digit</li>
                      </ul>
                  </div>
                </div>
                <div class="input-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password_2" id="password_2" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="reg_user">Register</button>
                </div>
                <p>
                    Already a member? <a href="login.php">Login</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>

</html>
