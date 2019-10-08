<?php
$tpl = array(
    'components/propertytable/template-property-table.tpl'
);

$tpl_content = '';

foreach ($tpl as $tpl_file) {
    $tpl_content .= '<script id="template-property-table" type="text/template">';
    $tpl_content .= file_get_contents($tpl_file);
    $tpl_content .= '</script>';
}
echo $tpl_content;
?>