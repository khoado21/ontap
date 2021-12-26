<?php
    include 'connection.php';
    $MAXE = $_POST['MAXE'];
    $MAHOPDONG = $_POST['MAHD'];
    $sql = "DELETE FROM cthd WHERE MAXE = {$MAXE} AND MAHOPDONG = {$MAHOPDONG}";
    $stmt = $conn->exec($sql);
    echo 'success';
    