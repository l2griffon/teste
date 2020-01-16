<?php

//Do not remove this header
//This script package is distributed by kadar of L2j.sourceforge
//You are free to distribute this package as long as the headers stay intact.
//
//This file must stay in the parent directory of the script folder
//and must be filled out correctly for the scripts to work.
//
//It is suggested to make a new user and pass for the scripts
//and set the permissions to select only.

$db_user = "root"; //your sql username goes here
$db_pass = ""; //your sql password goes here
$db_name = "l2jdb";    //your database name goes here
$db_serv = "localhost"; //the address of the database goes here
$db_port = "3306"; //the address of the database goes here
$res = mysql_connect ( $db_serv, $db_user, $db_pass, $db_port ) or die ("Coudn't connect to [$db_serv]");
mysql_select_db ( $db_name );

?>