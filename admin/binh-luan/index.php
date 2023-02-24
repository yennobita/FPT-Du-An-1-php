<?php  
    require "../../global.php";
    require "../../dao/binh-luan.php";
    require "../../dao/thong-ke.php";
    extract($_REQUEST);
    if(exist_param("ma_hh",$_REQUEST)){
        
        $items = binh_luan_select_by_hang_hoa($ma_hh);
        $VIEW_NAME = "detail.php";
    } else {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "list.php";

    }
    require "../layout.php";

    if(exist_param("btn_delete")){
        try {
            binh_luan_delete($ma_bl);
            $items =binh_luan_select_all();

            $MESSAGE = "Xóa thành công!";
        } 
        catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        $VIEW_NAME = "list.php";
    }









?>
