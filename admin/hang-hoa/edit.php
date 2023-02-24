<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Mã hàng hóa</label>
                <input name="ma_hh" value="<?= $ma_hh ?>" class="form-control" readonly>
            </div>

            <div class="form-group col-sm-4">
                <label>Tên hàng hóa</label>
                <input name="ten_hh" value="<?= $ten_hh ?>" class="form-control">
            </div>

            <div class="form-group col-sm-4">
                <label>Đơn giá</label>
                <input name="don_gia" value="<?= $don_gia ?>" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Giảm giá</label>
                <input name="giam_gia" value="<?= $giam_gia ?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>Hình ảnh</label>
                <input name="hinh" value="<?= $hinh ?>" class="form-control" type="file">
                (<?= $hinh ?>)
            </div>
            <div class="form-group col-sm-4">
                <label>Loại hàng</label>
                <select name="ma_loai" id="" class="form-control">
                    <?php
                    $dsloai = loai_select_all();
                    foreach ($dsloai as $loai) {
                        // echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                        if ($loai['ma_loai'] == $ma_loai)
                            echo "<option selected value='{$loai['ma_loai']}'>{$loai['ten_loai']}</option>";
                        else
                            echo "<option value='{$loai['ma_loai']}'>{$loai['ten_loai']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label>Hàng đặc biệt</label>
                <div class="form-control col-sm-4">
                    <label for="" class="radio-inline"><input value="0" <?= $dac_biet == 0 ? "checked" : "" ?> name="dac_biet" type="radio">Bình thường</label>
                    <label for="" class="radio-inline"><input value="1" <?= $dac_biet == 1 ? "checked" : "" ?> name="dac_biet" type="radio">Đặc biệt</label>

                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Ngày nhập</label>
                <input name="ngay_nhap" value="<?= $ngay_nhap ?>" class="form-control" type="date">
            </div>
            <div class="form-group col-sm-4">
                <label>Số lượt xem</label>
                <input name="so_luot_xem" value="<?= $so_luot_xem ?>" class="form-control">
            </div>
        </div>
        <div>
            <div class="form-group col-lg-12">
                <label>Mô tả</label>
                <input name="mo_ta" class="form-control">
            </div>
            <button name="btn_update" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php" class="btn btn-default">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
    </form>
</body>

</html>