<?php
header("Content-type: text/javascript");

$js = array(
    'helloworld.js',
    '../components/propertytable/propertiestable.js',
    '../components/propertydetail/propertydetailview.js'

);

$js_content = '';

foreach ($js as $js_file) {
    $js_content .= file_get_contents($js_file);
}

echo $js_content;
?>