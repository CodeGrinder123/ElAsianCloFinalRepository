<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/

    require_once 'vendor/autoload.php';

    $g_client = new Google_client();
    $g_client->setClientId('378442995032-blo18mh25tstp87kn643s35ae5s9s1iu.apps.googleusercontent.com');
    $g_client->setClientSecret('bOLm6pjO9WeucGhwEB8MIPxH');

    $g_client->setRedirectUri('http://localhost/elAsianCloBestSeller.php');

    $g_client->addScope('email');

    session_start();
?>