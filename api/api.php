<?php

// TODO: use plural ressource names (REST) without any verbs
// TODO use http request method and ressource name to decide which file to grab

    switch ($resource):
        case 'properties':
            if ($id < 1) {
                if ($_SERVER['REQUEST_METHOD']=== 'POST'){
                    $view = 'property/property-create.php';
                } elseif($_SERVER['REQUEST_METHOD']=== 'GET'){
                $view = 'property/properties-get-all.php';
                }
                } else {
                if ($_SERVER['REQUEST_METHOD']=== 'GET'){
                    $view = 'property/properties-get.php';
                } elseif($_SERVER['REQUEST_METHOD']=== 'DELETE'){
                    $view = 'property/property-delete.php';
                } elseif($_SERVER['REQUEST_METHOD']=== 'PUT'){
                    $view = 'property/property-edit.php';
                }
            }
            include($view);
            break;
    endswitch;

exit;
?>