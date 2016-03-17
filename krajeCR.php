<?php
/**
 * Created by PhpStorm.
 * User: Pavel Anderle
 * Date: 17.3.2016
 * Time: 11:11
 */

$conn = new mysqli("db4free.net","anderle","nagano","anderle_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$krajCR = $_GET['krajCR'];
$sql = "SELECT nazev from okres WHERE kraj_id = '$krajCR'";
//echo $sql;

$res=$conn->query($sql);
$out = "";
while($kraj = $res->fetch_assoc()){
    $krajItem = $kraj["nazev"];
    $out .= "<option value='$krajItem'>$krajItem</option>";
}

echo $out;

$conn->close();