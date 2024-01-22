<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <div class="form__category" style="margin-top: 20px; text-align: center;">
            <form action="index.php?act=danhmuc" method="POST">
                <input type="text" name="keyw" id="" class="input-danhmuc" placeholder="Tìm kiếm">
                <select name="iddm" id="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $dm) {
                        extract($dm);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="clickok" value="Tìm Kiếm" style="padding: 10px 20px; background-color: #fff;"
                    class="input-danhmuc">
            </form>
        </div>
        <div class="table-danhmuc">
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th class="th-danhmuc"></th>
                    <th class="th-danhmuc">MÃ SẢN PHẨM</th>
                    <th class="th-danhmuc">TÊN SẢN PHẨM</th>
                    <th class="th-danhmuc">GIÁ</th>
                    <th class="th-danhmuc">HÌNH</th>
                    <th class="th-danhmuc">LƯỢT XEM</th>
                </tr>
                <tr>
                    <?php
                    foreach ($listsanpham as $sp) {
                        extract($sp);
                        $suasp = "index.php?act=suasp&idsp=" . $id;
                        $xoasp = "index.php?act=xoasp&idsp=" . $id;
                        $hinhpath = "upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinhpath = "<img src= '" . $hinhpath . "' width='150px' height='150px'>";
                        } else {
                            $hinhpath = "<img src= '" . $hinhpath . "' width='150px' height='150px'>";
                        }
                        echo '<tr>
                        <td class="td-danhmuc"><input type="checkbox" name="" id=""></td>
                        <td class="td-danhmuc">' . $id . '</td>
                        <td class="td-danhmuc">' . $name . '</td>
                        <td class="td-danhmuc">' . number_format($price), 'đ' . '</td>
                        <td class="td-danhmuc" style="padding: 10px 20px">' . $hinhpath . '</td>
                        <td class="td-danhmuc">' . $luotxem . '</td>

                    </tr>';
                    }
                    ?>
            </table>
        </div>
    </div>
</div>




</div>