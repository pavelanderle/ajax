<?php
/**
 * Created by PhpStorm.
 * User: Pavel Anderle
 * Date: 17.3.2016
 * Time: 11:11
 */

$conn = new mysqli("localhost","root","","mapacr");
$conn->query("SET CHARACTER SET UTF8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$krajCR = $_GET['krajCR'];
$sql = "SELECT nazev from okres WHERE kraj_id = '$krajCR'";
//echo $sql;

$res=$conn->query($sql);
$out = "";
while($okres = $res->fetch_assoc()){
    $okresy[] = $okres["nazev"];
}

echo json_encode($okresy, JSON_UNESCAPED_UNICODE);

$conn->close();
