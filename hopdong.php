<?php
function addhd(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $MAHD = $_POST['MAHD'];
        $TENHD = $_POST['TENHD'];
        $MAKH = $_POST['TENKH'];
        $TONGTIEN = $_POST['TONGTIEN'];
        $result = $conn->prepare("INSERT INTO hopdong (MAHOPDONG, TENHD, MAKH, TONGTIEN) VALUES (:MAHD, :TENHD, :MAKH, :TONGTIEN)");
        $result->bindParam(':MAHD', $MAHD);
        $result->bindParam(':TENHD', $TENHD);
        $result->bindParam(':TONGTIEN', $TONGTIEN);
        $result->bindParam(':MAKH', $MAKH);
        $result->execute();
    }
}