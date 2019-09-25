<?php    
    $url = $_SERVER['REQUEST_URI'];
    $url_parts = explode('/', $url);
    $module = $url_parts[1]; 
    $view = $url_parts[2];
    $id = array_key_exists('3', $url_parts) ? intval($url_parts[3]) : -1; 
?>