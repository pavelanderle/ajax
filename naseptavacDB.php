<?php
    $conn = new mysqli("db4free.net:3306","anderle","nagano","anderle_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $keyword = $_GET['keyword'];
    $sql = "SELECT word from naseptavac WHERE word LIKE '$keyword%'";
    //echo $sql;

    $res=$conn->query($sql);
    $out = "";
    while($word = $res->fetch_assoc()){
        $wordItem = $word["word"];
        $out .= "<option value='$wordItem'>$wordItem</option>";
    }

    echo $out;

    $conn->close();

?>