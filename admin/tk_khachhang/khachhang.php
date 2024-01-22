<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <div class="row2 mb10">
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th class="th-danhmuc"></th>
                    <th class="th-danhmuc">ID TÀI KHOẢN</th>
                    <th class="th-danhmuc">TÊN TÀI KHOẢN</th>
                    <th class="th-danhmuc">MẬT KHẨU</th>
                    <th class="th-danhmuc">EMAIL</th>
                    <th class="th-danhmuc">ĐỊA CHỈ</th>
                    <th class="th-danhmuc">SĐT</th>
                    <th class="th-danhmuc">ROLE</th>
                    <th class="th-danhmuc"></th>
                </tr>
                <tr>
                    <?php

                    echo '<tr>
                        <td class="td-danhmuc"><input type="checkbox" name="" id=""></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc">
                        <input style="padding: 5px 10px; background-color: red; color: #fff; border: none;" type="button" onclick="return confirm(\'ban co muon xoa khong\')" value="Xóa"></a> </td>
                    </tr>';

                    ?>

            </table>
        </div>
        <div class="row mb10 ">
            <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=addtk"> <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
        </form>
    </div>
</div>




</div>