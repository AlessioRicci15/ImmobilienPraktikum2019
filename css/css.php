<?php
header("Content-type: text/css");
$css = array(
    'article.css',
    'body.css',
    'button.css',
    'class.css',
    'footer.css',
    'header.css',
    'html.css',
    'liste.css',
    'main.css',
    'nav.css',
    '../components/propertytable/propertytable.css',
    '../components/propertydetail/propertydetail.css',
    '../components/stocktable/stocktable.css',
    '../components/stockdetail/stockdetail.css',
    '../components/reittable/reittable.css',
    '../components/reitdetail/reitdetail.css',
    '../components/etftable/etftable.css',
    '../components/etfdetail/etfdetail.css',
    '../components/bondtable/bondtable.css',
    '../components/bonddetail/bonddetail.css',
    'text.css'
);
$css_content = '';
foreach ($css as $css_file) {
    $css_content .= file_get_contents($css_file);
}
echo $css_content;
?>