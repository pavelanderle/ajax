<?php
$keywords = file("naseptavac.txt");
$keyword = $_GET['keyword'];
$res="";
$pattern = "/^$keyword/i";

foreach($keywords as $item){
if (preg_match($pattern, $item)) {
    $res .= $item;
}
}

echo $res;

?>