<?php
include "common_helper.php";
include "connection.php";
if (isset($_POST["MASP"])) {
    $binhluan = $conn->prepare('SELECT * FROM binhluan where MASP = :MASP');
    $binhluan->bindParam(':MASP', $_POST["MASP"]);
    //thực hiện câu lệnh
    $binhluan->execute();
    $result = $binhluan->fetchAll(PDO::FETCH_ASSOC); 
   
    $json = json_encode($result); 
    echo $json;
}
?>