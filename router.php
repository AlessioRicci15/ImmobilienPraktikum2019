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
            case 'stocks':
                switch ($function) {
                    case '':
                        $pageTitle = 'Stocks';
                        $navigation = 'stocks';
                        $view = 'stocks.php';
                        break;
                    case 'show':
                        $pageTitle = 'Stock';
                        $navigation = '';
                        $view = 'stock/show.php';
                        break;
                    case 'edit':
                        $pageTitle = 'Edit stock';
                        $navigation = '';
                        $view = 'stock/edit.php';
                        break;
                    case 'sendeditstockformular':
                        $pageTitle = 'Stock changing';
                        $navigation = '';
                        $view = 'stock/sendeditstockformular.php';
                        break;
                    case 'remove':
                        $pageTitle = 'Remove stock';
                        $navigation = '';
                        $view = 'stock/remove.php';
                        break;
                    case 'create':
                        $pageTitle = 'Create stock';
                        $navigation = '';
                        $view = 'stock/create.php';
                        break;
                    case 'sendcreatstockformular':
                        $pageTitle = 'Stock creating';
                        $navigation = '';
                        $view = 'stock/sendcreatstockformular.php';
                        break;
                    default:
                        $pageTitle = 'ERROR 404';
                        $navigation = '';
                        $view = '404.php';
                        break;
                };
                break;
            case 'bonds':
                switch ($function) {
                    case '':
                        $pageTitle = 'Bonds';
                        $navigation = 'bonds';
                        $view = 'bonds.php';
                        break;
                    case 'show':
                        $pageTitle = 'Bond';
                        $navigation = '';
                        $view = 'bond/show.php';
                        break;
                    case 'edit':
                        $pageTitle = 'Edit bond';
                        $navigation = '';
                        $view = 'bond/edit.php';
                        break;
                    case 'sendeditbondformular':
                        $pageTitle = 'Bond changing';
                        $navigation = '';
                        $view = 'bond/sendeditbondformular.php';
                        break;
                    case 'remove':
                        $pageTitle = 'Remove bond';
                        $navigation = '';
                        $view = 'bond/remove.php';
                        break;
                    case 'create':
                        $pageTitle = 'Create bond';
                        $navigation = '';
                        $view = 'bond/create.php';
                        break;
                    case 'sendcreatbondformular':
                        $pageTitle = 'Bond creating';
                        $navigation = '';
                        $view = 'bond/sendcreatbondformular.php';
                        break;
                    default:
                        $pageTitle = 'ERROR 404';
                        $navigation = '';
                        $view = '404.php';
                        break;
                };
                break;
            case 'reits':
                switch ($function) {
                    case '':
                        $pageTitle = 'REITs';
                        $navigation = 'reits';
                        $view = 'reits.php';
                        break;
                    case 'show':
                        $pageTitle = 'REIT';
                        $navigation = '';
                        $view = 'reit/show.php';
                        break;
                    case 'edit':
                        $pageTitle = 'Edit REIT';
                        $navigation = '';
                        $view = 'reit/edit.php';
                        break;
                    case 'sendeditreitformular':
                        $pageTitle = 'REIT changing';
                        $navigation = '';
                        $view = 'reit/sendeditreitformular.php';
                        break;
                    case 'remove':
                        $pageTitle = 'Remove REIT';
                        $navigation = '';
                        $view = 'reit/remove.php';
                        break;
                    case 'create':
                        $pageTitle = 'Create REIT';
                        $navigation = '';
                        $view = 'reit/create.php';
                        break;
                    case 'sendcreatreitformular':
                        $pageTitle = 'REIT creating';
                        $navigation = '';
                        $view = 'reit/sendcreatreitformular.php';
                        break;
                    default:
                        $pageTitle = 'ERROR 404';
                        $navigation = '';
                        $view = '404.php';
                        break;
                };
                break;
            case 'etfs':
                switch ($function) {
                    case '':
                        $pageTitle = 'ETFs';
                        $navigation = 'etfs';
                        $view = 'etfs.php';
                        break;
                    case 'show':
                        $pageTitle = 'ETF';
                        $navigation = '';
                        $view = 'etf/show.php';
                        break;
                    case 'edit':
                        $pageTitle = 'Edit ETF';
                        $navigation = '';
                        $view = 'etf/edit.php';
                        break;
                    case 'sendeditetfformular':
                        $pageTitle = 'ETF changing';
                        $navigation = '';
                        $view = 'etf/sendeditetfformular.php';
                        break;
                    case 'remove':
                        $pageTitle = 'Remove ETF';
                        $navigation = '';
                        $view = 'etf/remove.php';
                        break;
                    case 'create':
                        $pageTitle = 'Create ETF';
                        $navigation = '';
                        $view = 'etf/create.php';
                        break;
                    case 'sendcreatetfformular':
                        $pageTitle = 'ETF creating';
                        $navigation = '';
                        $view = 'etf/sendcreatetfformular.php';
                        break;
                    default:
                        $pageTitle = 'ERROR 404';
                        $navigation = '';
                        $view = '404.php';
                        break;
                };
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