<?php
$dbHost = "app-e16974f1-49df-4ff7-854b-4a18ee4f9ed4-do-user-11129028-0.b.db.ondigitalocean.com" ;
$dbUser = "scrapdb" ;
$dbPort = "25060" ;
$dbPass = "kUruFa19KXtojBrC" ;
$dbName = "scrapdb" ;

if(!$db = pg_connect("host=`$dbHost` posrt=`$dbPort`dbname=`$dbName` user=`$dbUser` password=`$dbPass`"))
{
        echo ("failed attempt to connect!");
        die;
}