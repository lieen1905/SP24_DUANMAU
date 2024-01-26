<?php
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
//controller
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listsp":
                if(isset($_POST['clickok']) && ($_POST['clickok'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyw='';
                    $iddm=0;
                }
                $listCategory = loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $iddm);
                include "sanpham/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $name = $_POST['name']; 
                    $mota = $_POST['mota'];
                    $price = $_POST['price'];
                    $img = $_FILES['img']['name'];
                    $dir = "../upload/";
                    $upFile = $dir.basename($_FILES['img']['name']);
                    // echo $upFile;
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $upFile)){
                        // echo "bạn đẫ upload thành công";
                    }else{
                        echo "chua upload anh";
                    }
                    insert_sanpham($name, $mota, $price, $img, $iddm);
                    $thongbao = "them thanh cong";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;  
            case "suasp":
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0) ){
                    $sanpham=loadone_sanpham($_GET['idsp']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensanpham=$_POST['tensanpham'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinhanh=$_FILES['hinhanh']['name'];
                    $dir="../upload/";
                    $upFile=$dir.basename($_FILES['hinhanh']['name']);
                    if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $upFile)){
                        echo "thanh cong";
                    }else{
                        echo "lỗi";
                    }

                    updatesp($id, $iddm, $tensanpham, $giasp, $mota, $hinhanh);
                    header('location: index.php?act=listsp');
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case "xoasp":
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    delete($_GET['idsp']);
                    header('location: index.php?act=listsp');
                }

                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case "khachhang":
                $listtaikhoan=loadall_taikhoan();
                include "tk_khachhang/khachhang.php";
                break;
            case "addtk":
                if(isset($_POST['themmoitk']) && ($_POST['themmoitk'])){
                    // $role = $_POST['role'];
                    $tentaikhoan = $_POST['tentaikhoan']; 
                    $address = $_POST['address'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    add_taikhoan($tentaikhoan, $address, $pass, $email, $tel);
                    $thongbao = "them thanh cong";
                }
                include "tk_khachhang/addtk.php";
                break;
            case 'deletetk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "DELETE FROM taikhoan WHERE id=" . $_GET['id'];
                    pdo_execute($sql);
                    header('location: index.php?act=khachhang');
                }
                include "tk_khachhang/khachhang.php";
                break;
            case "edittk_load":
                if(isset($_GET['idtk']) && ($_GET['idtk'] > 0) ){
                    $taikhoan=loadone_taikhoan($_GET['idtk']);
                }
                // $listdanhmuc=loadall_danhmuc();
                include "tk_khachhang/edittk.php";
                break;

            case "edittk":
                if(isset($_POST['edittk']) && ($_POST['edittk'])){
                    $tentaikhoan = $_POST['tentaikhoan'];
                    $address = $_POST['address'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    
                    updatetk($id, $tentaikhoan, $address, $pass, $email, $tel);
                    header("location: index.php?act=dstaikhoan");
                }
                // post có giá trị, tồn tại, và khác rỗng, mull, 0, fall
                include "tk_khachhang/edittk.php";
                break;
            case "binhluan":
               
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
                if (isset($_POST['add']) && ($_POST['add'])) {
                    $name = $_POST['name'];
                    if (empty(trim($_POST['name']))) {
                        $errors['name'] = "Tên loại không được để trống";
                    } else {
                        $sql = "INSERT INTO danhmuc (name) VALUES('$name')";
                        pdo_execute($sql);
                        header('location: index.php?act=listdm');
                    }
                }
                include "danhmuc/add.php";
                break;
    
            case 'delCategory':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "DELETE FROM danhmuc WHERE id=" . $_GET['id'];
                    pdo_execute($sql);
                    header('location: index.php?act=listdm');
                }
                $sql = 'SELECT * FROM category order by name desc ';
                $renderCategory = pdo_query($sql);
                include "danhmuc/Category.php";
                break;
    
            case 'update':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
    
                include "danhmuc/edit.php";
                break;
            case 'editCategory':
                if (isset($_POST['edit']) && ($_POST['edit'])) {
                    $name = $_POST['name'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $name);
                }
                $listCategory = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
