<?php
$dbHost = "app-e16974f1-49df-4ff7-854b-4a18ee4f9ed4-do-user-11129028-0.b.db.ondigitalocean.com" ;
$dbUser = "scrapdb" ;
$dbPass = "kUruFa19KXtojBrC" ;
$dbName = "scrapdb" ;

if(!$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName))
{
        dd("failed attempt to connect!");
}