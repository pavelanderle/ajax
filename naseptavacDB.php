<?php
    $conn = new mysqli("localhost","root","root","ajax");
    $conn->query("SET CHARACTER SET UTF8");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $keyword = $_GET['keyword'];
    $sql = "SELECT word from words WHERE word LIKE '$keyword%'";
    //echo $sql;

    $res=$conn->query($sql);
    while($word = $res->fetch_assoc()){
        $out[] = $word["word"];
    }
    $conn->close();
    //print_r($out);
    echo json_encode($out,JSON_UNESCAPED_UNICODE);


?>
