<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h3 class="alert alert-success">THÊM MỚI HÀNG HÓA</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Mã hàng hóa</label>
                <input name="ma_hh" value="auto number" class="form-control" readonly>
            </div>

            <div class="form-group col-sm-4">
                <label>Tên hàng hóa</label>
                <input name="ten_hh" class="form-control">
            </div>

            <div class="form-group col-sm-4">
                <label>Đơn giá</label>
                <input name="don_gia" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Giảm giá</label>
                <input name="giam_gia" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>Hình ảnh</label>
                <input name="hinh" class="form-control" type="file">
            </div>
            <div class="form-group col-sm-4">
                <label>Loại hàng</label>
                <select name="ma_loai" id="" class="form-control">
                    <?php
                    $dsloai = loai_select_all();
                    foreach ($dsloai as $loai) {
                        echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
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
                    <label for="" class="radio-inline"><input value="0" name="dac_biet" type="radio" checked>Bình thường</label>
                    <label for="" class="radio-inline"><input value="1" name="dac_biet" type="radio">Đặc biệt</label>

                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Ngày nhập</label>
                <input name="ngay_nhap" class="form-control" type="date">
            </div>
            <div class="form-group col-sm-4">
                <label>Số lượt xem</label>
                <input name="so_luot_xem" class="form-control">
            </div>
        </div>




        <div class="row">

            <div class="form-group col-lg-12">
                <label>Mô tả</label>
                <input name="mo_ta" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>