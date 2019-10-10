<?php
header("Content-type: text/javascript");

$js = array(
    '../components/propertytable/propertiestable.js',
    '../components/propertydetail/propertydetail.js',
    '../components/propertyedit/propertyedit.js',
    '../components/propertycreate/propertycreat.js',
    'template.js'

);

$js_content = '';

foreach ($js as $js_file) {
    $js_content .= file_get_contents($js_file);
}

echo $js_content;
?>