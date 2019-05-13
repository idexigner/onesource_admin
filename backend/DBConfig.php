<?php

$protocol = 'http';
$url= $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (strpos($url, "localhost")) { 
    //Define your host here.
    $HostName = "localhost";
    
    //Define your database name here.
    $DatabaseName = "sourcees_inquiry";
    
    //Define your database username here.
    $HostUser = "root";
    
    //Define your database password here.
    $HostPass = "";

}
else {

   //Define your host here.
    $HostName = "1sourceestate.com";
    
    //Define your database name here.
    $DatabaseName = "sourcees_inquiry";
    
    //Define your database username here.
    $HostUser = "sourcees_inquiry";
    
    //Define your database password here.
    $HostPass = "FarazHassaan786!";


     
}



$con = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
?>