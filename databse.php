<?php
$dbHost = "127.0.0.1" ;
//$dbHost = "app-e16974f1-49df-4ff7-854b-4a18ee4f9ed4-do-user-11129028-0.b.db.ondigitalocean.com" ;
$dbUser = "root" ;
$dbPort = "3306" ;
//$dbPort = "25060" ;
$dbPass = "nicholson" ;
//$dbPass = "kUruFa19KXtojBrC" ;
$dbName = "scrapdb" ;

/*if(!$db = pg_connect("host=`$dbHost` posrt=`$dbPort`dbname=`$dbName` user=`$dbUser` password=`$dbPass`"))
{
        echo ("failed attempt to connect!");
        die;
}*/
if(!$db = mysqli_connect($dbHost,$dbPort,$dbName,$dbUser,$dbPass,))
{
        echo ("failed attempt to connect!");
        die;
}