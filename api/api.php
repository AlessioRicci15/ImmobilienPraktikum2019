<?php
    switch ($resource):
            case 'properties-get':
                if ($id < 1) {
                    $view = 'properties/properties-get-all.php';
                } else {
                    $view = 'properties/properties-get.php';
                }
                include($view);
                break;
            case 'property-delete':
                $view = 'properties/property-delete.php';
                include($view);
                break;
            case 'property-edit':
                $view = 'properties/property-edit.php';
                include($view);
                break;
            case 'property-create':
                $view = 'properties/property-create.php';
                include($view);
                break;
    endswitch;

exit;
?>