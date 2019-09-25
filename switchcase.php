<?php 
    switch ($view):
            case 'impressum':
                $pageTitle = 'Impressum';
                $navigation = 'impressum';
                $view = 'impressum.php';
                break;
            case '':
                $pageTitle = 'Home';
                $navigation = 'home';
                $view = 'home.php';
                break;
            case 'home':
                $pageTitle = 'Home';
                $navigation = 'home';
                $view = 'home.php';
                break;
            case 'index':
                $pageTitle = 'Home';
                $navigation = 'home';
                $view = 'home.php';
                break;
            case 'immobilien':
                $pageTitle = 'Properties';
                $navigation = 'properties';
                $view = 'properties.php';
                break;
            case 'properties':
                switch ($function) {
                    case '':
                        $pageTitle = 'Properties';
                        $navigation = 'properties';
                        $view = 'properties.php';
                        break;
                    case 'show':
                        $pageTitle = 'Property';
                        $navigation = '';
                        $view = 'property/show.php';
                        break;
                    case 'edit':
                        $pageTitle = 'Edit property';
                        $navigation = '';
                        $view = 'property/edit.php';
                        break;
                    case 'sendeditpropertyformular':
                        $pageTitle = 'Property changing';
                        $navigation = '';
                        $view = 'property/sendeditpropertyformular.php';
                        break;
                    case 'remove':
                        $pageTitle = 'Remove property';
                        $navigation = '';
                        $view = 'property/remove.php';
                        break;
                    case 'creat':
                        $pageTitle = 'Creat property';
                        $navigation = '';
                        $view = 'property/create.php';
                        break;
                    case 'sendcreatpropertyformular':
                        $pageTitle = 'Property creating';
                        $navigation = '';
                        $view = 'property/sendcreatpropertyformular.php';
                        break;
                    default:
                        $pageTitle = 'ERROR 404';
                        $navigation = '';
                        $view = '404.php';
                        break;
                };
                break;
            default:
                $pageTitle = '404';
                $navigation = '';
                $view = '404.php';
                break;
    endswitch;
?>