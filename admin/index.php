<?php
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";
//controller
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "listsp":
            $listProduct = renderProduct();
            include "sanpham/list.php";
            break;
        case "addsp":
            include "sanpham/add.php";
            break;
        case "suasp":

            include "sanpham/update.php";
            break;
        case "updatesp":
            include "sanpham/list.php";
            break;
        case "xoasp":
            include "sanpham/list.php";
            break;
        case "khachhang":
            $listtaikhoan = loadall_taikhoan();
            include "tk_khachhang/khachhang.php";
            break;
        case "addtk":
            include "tk_khachhang/addtk.php";
            break;
        case 'deletetk':
            include "tk_khachhang/khachhang.php";
            break;
        case "edittk_load":
            include "tk_khachhang/edittk.php";
            break;

        case "edittk":
            include "tk_khachhang/edittk.php";
            break;
        case "binhluan":
            $listbinhluan = loadall_binhluanadmin();
            include "show_binhluan/show_binhluan.php";
            break;
        case 'deletebl':
            include "show_binhluan/show_binhluan.php";
            break;
        case "editbl":
            include "show_binhluan/editbl.php";
            break;
        case "editbl_load":

            include "show_binhluan/editbl.php";
            break;
        case "thongke":
            include "thongke/thongke.php";
            break;
        case "bieudo":
            include "thongke/bieudo.php";
            break;
        case "home":
            include "home.php";
            break;
        case 'listdm':
            $listCategory = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'addCategory':

            include "danhmuc/add.php";
            break;

        case 'delCategory':
            include "danhmuc/Category.php";
            break;

        case 'update':
            include "danhmuc/edit.php";
            break;
        case 'editCategory':
            include "danhmuc/list.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
