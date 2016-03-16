<?php
/**
 * Created by PhpStorm.
 * User: zak
 * Date: 4.3.2016
 * Time: 10:57
 */

$a=array(1, -2, 3.333, 4e17, "abc", "á\n", null, array(2.1, 2.2, array("2.2.1")), false, true, "", "key"=>"value", 'abc"def'=>array());
echo json_encode($a, JSON_PRETTY_PRINT);