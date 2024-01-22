<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "view/header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if (isset($_POST['guibinhluan'])) {
                $iduser = $_SESSION['user']['id'];
            }
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham = loadone_sanpham($_GET['idsp']);
                $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
            } else {
                include "view/home.php";
            }
            include "view/chitietsanpham.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
                $email = $_POST['email'];
                $name = $_POST['user'];
                $pswd = $_POST['pass'];
                insert_taikhoan($email, $name, $pswd);
                $thongbao = "Đăng ký thành công";
            }
            include "view/login/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header("location: index.php");
                    // echo "dang chap thanh cong";
                } else {
                    $thongbao = "khong co thong tin tai khoan";
                    header("location: index.php");
                }
            }
            break;
        case "dangxuat":
            dangxuat();
            include "view/home.php";
            break;
        case "quenmk":
            include "view/login/quenmk.php";
            break;
        case "danhmuc":
            include "view/sanpham/list.php";
            break;
        case "edittk":
            include "view/login/edittk.php";
            break;

        case "home":

            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
