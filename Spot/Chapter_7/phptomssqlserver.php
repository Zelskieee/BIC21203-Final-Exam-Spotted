<?php 

    $host ="xxx.xxx.xxx.xxx"; 
    $username ="username"; 
    $password ="password"; 
    $database ="database";
    
    mssql_connect($host, $username, $password); 
    mssql_select_db($database); 

?> 
