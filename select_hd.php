<?php
    include 'connection.php';
    $MAKH = $_POST['name'];
    $stmt = $conn->prepare("select * from hopdong where MAKH = :MAKH;");
    $stmt->bindParam(':MAKH', $MAKH);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;