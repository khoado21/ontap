<?php
include 'khachhang.php';
include 'xe.php';
include 'hopdong.php';
include 'cthd.php';
$list_xe = selectxe();
$list = select_all_kh();
?>
<style>
    .border {
        border: 1px solid black;
        width: 300px;
    }
</style>
<div class="border">
    <form action="" method="POST">
        <div>
            <label for="MAKH">Mã hợp đồng</label>
            <input type="text" name="MAHD">
        </div>
        <br>
        <div>
            <label for="TENKH">Tên hợp đồng</label>
            <input type="text" name="TENHD">
        </div>
        <br>
        <div>
            <label for="TENKH">Tên khách hàng</label>
            <select name="TENKH" id="TENKH">
                <?php foreach ($list as $row) : ?>
                    <option value="<?php echo $row['MAKH'] ?>"><?php echo $row['HOTEN'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <br>
        <div>
            <label for="TENKH">Tên xe</label>
            <select name="TENXE[]" id="TENKH" multiple>
                <?php foreach ($list_xe as $row) : ?>
                    <option value="<?php echo $row['MAXE'] ?>"><?php echo $row['TENXE'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div>
            <label for="TENKH">Số tiền</label>
            <input type="text" name="TONGTIEN">
        </div>
        <br>
        <input type="submit" value="thuê xe">
    </form>
    <?php addhd(); ?>
    <?php addcthd(); ?>
</div>