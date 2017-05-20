<?php
 
    
    function db() 
    { $dbHost = 'localhost';
    $dbUser = 'admin'; 
    $dbPass = '1111'; 
    $dbName = 'myshop'; 
    $db = new mysqli($dbHost, $dbUser, $dbPass, $dbName); 
    $db->set_charset('utf8'); 
    if($db->connect_errno) 
        { 
        die('MySQL access denied.'); 
        } 
        return $db; 
        
        }

 