<?php
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}

// 
function loadone_sanpham($id){
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($name, $mota, $price, $img, $iddm){
    $sql = "INSERT INTO `sanpham` (`name`, `price`, `img`, `mota`, `iddm`) VALUES ('$name', '$price','$img','$mota', '$iddm');";
    pdo_execute($sql);
}
function updatesp($id, $iddm, $tensanpham, $giasp, $mota, $hinhanh) {
    if($hinhanh!=""){
        $sql = "UPDATE `sanpham` SET `name` = '{$tensanpham}', `price` = '{$giasp}', `img` = '{$hinhanh}', `mota` = '{$mota}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }else{
        $sql = "UPDATE `sanpham` SET `name` = '{$tensanpham}', `price` = '{$giasp}', `img` = '{$hinhanh}', `mota` = '{$mota}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }
    pdo_execute($sql);
}
function delete($id) {
    $sql = "DELETE FROM `sanpham` WHERE id=".$id;
    pdo_execute($sql);
}