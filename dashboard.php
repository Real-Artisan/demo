<?php
 session_start();
 include("database.php");
 include("engine.php");
 include("logout.php");
 $user_data = register($db);

 $_SESSION;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style="border-radius: 50%;" rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Scrapbook</title>
</head>
<body>

    <div class="hamburger">
        <svg onclick="toggleNavBar()" width="44" height="44" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
    </div>
    <div id="sidebar" class="side-bar">
        <div onclick="toggleNavBar()" class="side-close">&times</div>
        
        <a href="/home.html" class="nav-links">
            <div class="bar-stuff-one ">
                Home
            </div>
        </a>
        <hr class="side-hr">
        
        <button href="logout.php" class="logout-side-button">Logout</button>
    </div>
<div class="picture-container">
    <div class="profile-pic">
        <img src="favicon.ico" alt="">
        <button onclick="toggleUpload()" class="edit">C</button>
    </div>
</div>
<div class="name-area">
    <div class="full-name">
        <?php echo $user_data["fname"]; ?>
    </div>
    <div class="identity"><?php 
    echo $user_data["email"];?>
    </div>
</div>
<div class="photo-upload" id="drop-here">
    <div onclick="toggleUpload()" class="upload-close">&times;</div>
    <form action="">
        <input type="file" 
        onchange="fileEvent(this.files)"
        name="profile-photo" id="profile-photo">
    </form>
</div>
<button href="logout.php" class="logout-button">Log Out</button>
<script src="script.js"></script>
</body>

</html>