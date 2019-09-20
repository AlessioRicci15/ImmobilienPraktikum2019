<?php    
    // 1. GET URL WIHT PHP
    $url = $_SERVER['REQUEST_URI'];

    // 2. get urls in parts, splitting by '/'
    $url_parts = explode('/', $url);

    // 3. add parts to named variables  
    $module = $url_parts[1]; 
    $view = $url_parts[2];
    $id = array_key_exists('3', $url_parts) ? intval($url_parts[3]) : -1; 
?>