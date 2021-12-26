<?php
    include 'common_helper.php';
    include 'connection.php';
    $MAHOPDONG = $_POST['MAHD'];
    $stmt = $conn->query("select X.TENXE, CTHD.MAXE 
                        from cthd CTHD, xe X 
                        where CTHD.MAHOPDONG = {$MAHOPDONG} and X.MAXE = CTHD.MAXE ;");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;
