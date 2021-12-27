<?php
function selectxe(){
    include 'connection.php';
    $stmt = $conn->query("select * from xe");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$json = json_encode($result);
    return $result;
}

function select_top_xe()
{
    include 'connection.php';
    $TOP = $_POST['input'];
    $stmt = $conn->prepare("select X.TENXE, count(CTHD.MAHOPDONG) as SOLAN 
    from xe X, cthd CTHD 
    where CTHD.MAXE = X.MAXE 
    group by TENXE 
    limit {$TOP}");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    return $json;
}