<?php


    session_start();
        include("database.php");
        include("engine.php");

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $fisrt_name = $_POST["fname"];
            $sur_name = $_POST["sname"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            if(!empty($fisrt_name) && !empty($sur_name) && !empty($email) && !empty($password))
            {
                $user_id = random(20);
                $query = "insert into users (user_id,first_name,sur_name,email,password) values (`$user_id`,`$first_name`,`$sur_name`,`$email`,`$password`)";
                mysqli_query($db,$query);
                header("Location: login.php");
                die;
            }
            if(!empty($email) && !empty($password))
            {
                $query = "select * from users where email = `$email` limit 1";
                $result = mysqli_query($db,$query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {
                         $user_data = mysqli_fetch_assoc($result);

                        if($user_data["password"] === $password)
                        {

                            $_SESSION["user_id"] = $user_data["user_id"];
                            header("Location: index.php");
                            die;

                        }
                    }
                }
            }
            else
            {
                return "Please Enter some valid data";
            }
        } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link style="border-radius: 50%;" rel="icon" type="image/x-icon" href="favicon.ico">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Scrapbook</title>
</head>
<body>
<div class="fp-container">
    <div class="intro-text">
        <div class="app-name">
            <h1>scrapbook</h1>
            <p>Scrapbook  helps you connect and <br> share with the people in your life.</p>
        </div>
    </div>
    

        
        <form class="loginForm" action="">
            <input class="entry first-entry" type="email" placeholder="Email Address">
            <input class="entry" type="password" placeholder="Password">
            <a href="dashboard.html">
                <div  class="post "><div 
                    style="margin: auto;"
                    class="create-text">Log In</div></div>
            </a>
            <div class="amnesia">
                Forgotten password?
            </div>
            <hr class="loginhr">
            <div 
            onclick="toggleSignup()"
            class="create"><div style="margin: auto;" class="create-text">Create New Account</div></div>
        </form>
        
    
</div>

<div id="signup-form">
    <div class="signup">
        <form action="POST">
            <div class="head"><div >Sign Up</div>
                <span onclick="toggleSignup()" class="times">&times;</span>
            </div>
            <div class="support-text">It's quick and easy.</div>
            <hr>
            <div class="name">
                <input class="name-box" name="fname" type="text" placeholder="First name">
                <input class="name-box" type="text" name="sname" placeholder="Surname">
            </div>
            <input class="wide" type="email" name="email" placeholder="Email Address">
            <input class="wide" type="password" name="password" placeholder="New password">
            <label for="Date of birth">Date of birth</label>
            <div class="dob">
                <select class="dob-left" name="day" id="day">
                    <option value="month">14</option>
                </select>
                <select name="month" id="month">
                    <option value="month">Jan</option>
                </select>
                <select class="dob-right" name="year" id="year">
                    <option value="year">2022</option>
                </select>
            </div>
            <label
            class="gender-label" for="Gender">Gender</label>
            <div class="gender">
               <div class="checkgender dob-left"><span class="gender-value">Male</span>
            <input type="checkbox" name="male" id="male"></div>
               <div class="checkgender"><span class="gender-value">Female</span>
            <input type="checkbox" name="male" id="male"></div>
               <div class="checkgender dob-right"><span class="gender-value">Other</span>
            <input type="checkbox" name="male" id="male"></div>
            </div>
            <div class="notice">
                By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. <br>You may receive SMS notifications from us and can opt out at any time.
            </div>
            <button class="signup-button">Sign Up</button>
        
        </form>
    </div>
</div>
<script src="script.js"></script>
</body>
<footer class="index-footer">
    Scrapbook © 2022
</footer>
</html>