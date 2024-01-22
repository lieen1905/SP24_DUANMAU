<?php 

    function loadall_binhluanadmin() {
        $sql="select * from binhluan order by id desc";
        $listbinhluan=pdo_query($sql);
        return  $listbinhluan;
    }
?>