<?php
include 'khachhang.php';
$list = select_kh();
?>

<style>
    .border {
        border: 1px solid black;
        width: 300px;
    }

    table,
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<div>
    <table>
        <tr>
            <th>Tên khách hàng</th>
            <th>Số lần thuê xe</th>
        </tr>

        <?php foreach ($list as $row) : ?>
        <tr>
                <td><?php echo $row['HOTEN'] ?></td>
                <td><?php echo $row['SOLAN'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>