<div class="category">
    <h1>Danh sách danh mục</h1>
    <div class="category_table">
        <table border="1" style="border-collapse: collapse ;">
            <th class="th-danhmuc">
                <p>Mã Loại</p>
            </th>
            <th class="th-danhmuc">
                <p>Tên Loại</p>
            </th>
            <th class="th-danhmuc"></th>
            <?php
            echo '
                      <tr class="td-danhmuc">
                      <td class="td-danhmuc"></td>
                      <td class="td-danhmuc"></td>
                      <td class="td-danhmuc">
                      <input style="padding: 5px 10px; background-color: green; color: #fff;" type="button" name="" value="Sửa"></a>
                      <input style="padding: 5px 10px; background-color: red; color: #fff;" onclick="return confirm(\'Bạn có muốn xóa không\')" class="del_category" type="button" name="" value="Xóa"></a>
                      </td>
                      </tr>
                        ';
            ?>
        </table>
        <button class="btn" style="margin-top: 20px;">
            <a style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px; text-decoration: none;" href="index.php?act=addCategory">Thêm sản phẩm</a>
        </button>
    </div>
</div>