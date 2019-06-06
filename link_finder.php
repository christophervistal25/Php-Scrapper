<?php
ini_set('max_execution_time', 3000);
include_once './simple_html_dom.php';

// for finding all links.
$html = file_get_html("https://www.geeksforgeeks.org/php/#math");

foreach ($html->find('ul li a') as $key => $value) {
    echo $value->href . "<br>";
}
