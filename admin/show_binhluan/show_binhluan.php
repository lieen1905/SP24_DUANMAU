<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN </h1>
    </div>
    <div class="row2 form_content ">
        <div class="row2 mb10 formds_loai">
            <table style="border-collapse: collapse;" border="1">
                <tr>
                    <th class="th_binhluan"></th>
                    <th class="th_binhluan">ID TÀI KHOẢN</th>
                    <th class="th_binhluan">NỘI DUNG</th>
                    <th class="th_binhluan">IDUSER</th>
                    <th class="th_binhluan">IDPRO</th>
                    <th class="th_binhluan">NGÀY BÌNH LUẬN</th>
                    <th class="th_binhluan" ></th>
                </tr>
                <tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $editbl = "index.php?act=editbl_load&id=" . $id;
                        $deletebl = "index.php?act=deletebl&id=" . $id;
                        $date = date("d/m/Y", strtotime($binhluan['ngaybinhluan']));
                        echo '<tr>
                        <td class="td_binhluan" style="text-align: center;"><input type="checkbox" name="" id=""></td>
                        <td class="td_binhluan" style="text-align: center;">' . $id . '</td>
                        <td class="td_binhluan">' . $noidung . '</td>
                        <td class="td_binhluan" style="text-align: center;">' . $iduser . '</td>
                        <td class="td_binhluan" style="text-align: center;">' . $idpro . '</td>
                        <td class="td_binhluan" style="text-align: center;">' . $date . '</td>
                        <td class="td_binhluan" style="text-align: center;">
                     
                        <a href="' . $deletebl . '"><input style="padding: 5px 10px; background-color: red; color: #fff;" type="button" onclick="return confirm(\'ban co muon xoa khong\')" value="Xóa"></a>
                        </td>
                    </tr>';
                    }
                    ?>




            </table>
        </div>
    </div>
    </form>
</div>
</div>




</div>