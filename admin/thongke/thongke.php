<div class="row2">
    <div class="row2 font_title">
        <h1>THỐNG KÊ SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <div class="row2 mb10">
        <form action="index.php?act=khachhang" style="margin: 30px 0;
    text-align: center;" method="POST">
                    <input type="text" name="keyw" id="" placeholder="Tìm kiếm" style="    width: 200px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;">

                </form>
         <div style="display: flex; justify-content: center;">
         <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th class="th-danhmuc"></th>
                    <th class="th-danhmuc">Mã Danh mục</th>
                    <th class="th-danhmuc">TÊN DANH MỤC</th>
                    <th class="th-danhmuc">TỔNG SẢN PHẨM</th>
                    <th class="th-danhmuc">GIÁ NHỎ NHẤT</th>
                    <th class="th-danhmuc">GIÁ CAO NHẤT</th>
                    <th class="th-danhmuc">GIÁ TRUNG BÌNH</th>
                </tr>
                <tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                        <td class="td-danhmuc"><input type="checkbox" name="" id=""></td>
                        <td class="td-danhmuc">' . $madm . '</td>
                        <td class="td-danhmuc">' . $tendm . '</td>
                        <td class="td-danhmuc">' . $countsp . '</td>
                        <td class="td-danhmuc">' . $minprice . '</td>
                        <td class="td-danhmuc">' . $maxprice . '</td>
                        <td class="td-danhmuc">' . $avgprice . '</td>
                    </tr>';
                    }
                    ?>
            </table>
        </div>
        </div>
        <div class="" style="margin-left: 155px;">
            <a href="index.php?act=bieudo"> <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="XEM BIỀU ĐỒ"></a>
        </div>
    </div>
</div>




</div>