<?php
function addcthd()
{
    include 'connection.php';
    if(isset($_POST['TENXE']))
    {
        foreach($_POST['TENXE'] as $MAXE)
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $MAHOPDONG = $_POST['MAHD'];
                $result = $conn->prepare("INSERT INTO cthd (MAHOPDONG, MAXE) VALUES (:MAHOPDONG, :MAXE)");
                $result->bindParam(':MAHOPDONG', $MAHOPDONG);
                $result->bindParam(':MAXE', $MAXE);
                $result->execute();
            }
        }
    }
}