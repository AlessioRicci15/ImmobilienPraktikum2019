<?php 
$url = $_SERVER['REQUEST_URI']; 
$url_parts = explode('/', $url);
$view = $url_parts[1]; 
$function = array_key_exists('2', $url_parts) ? $url_parts[2] : '';
$id = array_key_exists('3', $url_parts) ? intval($url_parts[3]) : -1;
if ($view === 'api') {
    $resource = $function;
    include('api/api.php');
    exit;
}
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
                    case 'create':
                        $pageTitle = 'Create property';
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
            case 'properties?orderby=Adresse&orderdirection=asc':     
                $pageTitle = 'Properties';
                $navigation = 'properties';
                $view = 'properties.php';
                break;
            case 'properties?orderby=Landname&orderdirection=asc':     
                $pageTitle = 'Properties';
                $navigation = 'properties';
                $view = 'properties.php';
                break;
            case 'properties?orderby=Baujahr&orderdirection=asc':     
                $pageTitle = 'Properties';
                $navigation = 'properties';
                $view = 'properties.php';
                break;
            case 'properties?orderby=Preis&orderdirection=asc':     
                $pageTitle = 'Properties';
                $navigation = 'properties';
                $view = 'properties.php';
                break;
            default:
                $pageTitle = '404';
                $navigation = '';
                $view = '404.php';
                break;
    endswitch;
?>