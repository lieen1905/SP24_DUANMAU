         <div class="row2 font_title">
             <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>


         <div class="form__category" style="margin-top: 20px; text-align: center;">
             <form action="index.php?act=listsp" method="POST">
                 <input type="text" name="keyw" id="" class="input-danhmuc" placeholder="Tìm kiếm">
                 <select name="iddm" id="iddm">
                     <option value="0" selected>Tất cả</option>

                 </select>
                 <input type="submit" name="clickok" value="Tìm Kiếm" style="padding: 10px 20px; background-color: #fff;" class="input-danhmuc">
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
                     <th class="th-danhmuc"></th>
                     <th></th>
                 </tr>
                 <tr>
                     <?php
                        echo '<tr>
                        <td class="td-danhmuc"><input type="checkbox" name="" id=""></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc" style="padding: 10px 20px"></td>
                        <td class="td-danhmuc"></td>
                        <td class="td-danhmuc">
                        <input style="padding: 5px 10px; background-color: green; color: #fff;" type="button" value="Sửa"></a>   
                        <input style="padding: 5px 10px; background-color: red; color: #fff;" type="button" onclick="return confirm(\'ban co muon xoa khong\')" value="Xóa"></a> </td>
                    </tr>';

                        ?>
             </table>
         </div>
         <div style="margin-left: 260px; margin-top: 30px;">
             <a href="index.php?act=addsp"> <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="NHẬP THÊM"></a>
             <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="CHỌN TẤT CẢ">
             <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         </div>