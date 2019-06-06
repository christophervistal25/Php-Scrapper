<?php
ini_set('max_execution_time', 3000);
include_once './simple_html_dom.php';
$dom = new simple_html_dom();
$html = file_get_html($value);

