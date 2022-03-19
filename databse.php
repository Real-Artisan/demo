<?php
$dbHost = "app-9589fc9a-ca66-496e-86f2-10efed48b071-do-user-11129028-0.b.db.ondigitalocean.com" ;
$dbUser = "scrapdb" ;
$dbPass = "TqjMNeaQahFduEJN" ;
$dbName = "scrapdb" ;

if(!$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName))
{
        dd("failed attempt to connect!");
}