<?php
header("Content-type: text/javascript");
$js = array(
    '../components/propertytable/propertiestable.js',
    '../components/propertydetail/propertydetail.js',
    '../components/propertyedit/propertyedit.js',
    '../components/propertycreate/propertycreat.js',
    '../components/stocktable/stockstable.js',
    '../components/stockdetail/stockdetail.js',
    '../components/stockedit/stockedit.js',
    '../components/stockcreate/stockcreat.js',
    '../components/bondtable/bondstable.js',
    '../components/bonddetail/bonddetail.js',
    '../components/bondedit/bondedit.js',
    '../components/bondcreate/bondcreat.js',
    '../components/reittable/reitstable.js',
    '../components/reitdetail/reitdetail.js',
    '../components/reitedit/reitedit.js',
    '../components/reitcreate/reitcreat.js',
    '../components/etftable/etfstable.js',
    '../components/etfdetail/etfdetail.js',
    '../components/etfedit/etfedit.js',
    '../components/etfcreate/etfcreat.js',
    'template.js'

);
$js_content = '';
foreach ($js as $js_file) {
    $js_content .= file_get_contents($js_file);
}
echo $js_content;
?>