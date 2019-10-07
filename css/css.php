<?php
header("Content-type: text/css");

// PHP FIND FILES BY GLOB PATTERN
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
    'text.css'
);

$css_content = '';

foreach ($css as $css_file) {
    $css_content .= '<script id="">';
    $css_content .= file_get_contents($css_file);
    $css_content .= '</script>';
}
echo $css_content;
?>