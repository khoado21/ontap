<?php
    include 'connection.php';
    $stmt = $conn->query("select * from khachhang");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;
