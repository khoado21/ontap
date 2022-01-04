<?php
include 'common_helper.php';
include 'connection.php';
if (isset($_POST['number'])) {
    $sql =  "select X.TENXE, count(CTHD.MAHOPDONG) as SOLAN 
        from xe X, cthd CTHD 
        where CTHD.MAXE = X.MAXE 
        group by TENXE 
        limit" . $_POST['number'];
    //$sql ="select * from khachhang";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>