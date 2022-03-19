<?php
$dbHost = "localhost" ;
//$dbHost = "app-e16974f1-49df-4ff7-854b-4a18ee4f9ed4-do-user-11129028-0.b.db.ondigitalocean.com" ;
$dbUser = "root" ;
$dbPort = 3307 ;
//$dbPort = 25060 ;
$dbPass = "nicholson" ;
//$dbPass = "kUruFa19KXtojBrC" ;
$dbName = "scrapdb" ;

/*if(!$db = pg_connect("host=`$dbHost` port=`$dbPort`dbname=`$dbName` user=`$dbUser` password=`$dbPass`"))
{
        echo ("failed attempt to connect!");
        die;
}*/
if(!$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName,$dbPort,))
{
        echo ("failed attempt to connect!");
        die;
}