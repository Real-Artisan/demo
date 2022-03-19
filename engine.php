<?php
 function register($db)
{
    if(isset($_SESSION["user_id"]))
    {
        $id = $_SESSION["user_id"];
        $query = "select * from users where user_id = `$id` limit 1";

        $result = mysqli_query($db, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
             $user_data = mysqli_fetch_assoc($result);
             return $user_data;
        }
    }

    header("location: login.php");
    die;
}

 function random($length)
 {
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $val = rand(4,$length);
    for($i=0; $i < $val; $i++)
    {
        $text .= rand(0,9);
    }

    return $text;
 }