<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="register.css">
   
    <script src="app.js"></script>

</head>
<body>
   

<?php
    $showSignup = isset($_GET['showSignup']) && $_GET['showSignup'] === 'true'; 
    include 'configData.php';


    if ($showSignup) {
     
        echo '
            <div class="forms">
                <form id="signup-form" method="post" action="procces_registration.php" onsubmit="return validateSignUp()"> 
                <h2>Sign Up</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="password">Create Password:</label>
                <input type="password" id="password" name="password" required>
        
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required> 
                <span id="password-error" class="error-message"></span> <br>
        
                <button type="submit" >Sign Up</button>
                <p>Already have an account? <a class="lgS" href="#" onclick="showLoginForm()">Log In</a></p>
                </form>
            </div>';
    } else {
  
        echo '
            <div class="forms">
                <form id="signup-form" method="post" action="procces_registration.php" onsubmit="return validateSignUp()"> 
                <h2>Sign Up</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="password">Create Password:</label>
                <input type="password" id="password" name="password" required>
        
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required> 
                <span id="password-error" class="error-message"></span> <br>
        
                <button type="submit" >Sign Up</button>
                <p>Already have an account? <a class="lgS" href="#" onclick="showLoginForm()">Log In</a></p>
                </form>
            </div>
            <div class="forms">
                <form id="login-form" class="login-form" method="post" action="procces_login.php" onsubmit="validateLogin()">
                <h2>Log In</h2>
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" name="login-email" required>
        
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="login-password" required>
                <span id="error" class="errorMsg"></span> <br>
        
                <button type="submit">Log In</button>
                <p>Dont have an account? <a class="lgS" href="#" onclick="showSignUpForm()">Sign Up</a></p>
                </form>
            </div>';
    }
    ?>
    

    <script src="app.js"></script>
    
    
</body>
</html>
