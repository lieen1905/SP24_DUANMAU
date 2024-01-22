<div class="row2">
    <div class="row2 font_title">
        <h1>SỬA LOẠI sản phẩm</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">

            <div class="row2 mb10 form_content_container">
                <label> Loại sản phẩm </label> <br>
                <select name="iddm" id="iddm">
                    <option value="0">tat ca</option>

                </select>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="">Tên Sản Phẩm</label>
                </div>
                <div class="form-input">
                    <input style="width: 80%;" type="text" name="tensanpham" id="" placeholder="Tên Sản Phẩm" value="<?= $name ?>">
                </div>
            </div>

            <div class="row2 mb10 form_content_container">
                <label> Hình ảnh </label> <br>
                <input type="file" name="hinhanh">

            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="">Mô tả</label>
                </div>
                <div class="form-input">
                    <input style="width: 80%;" type="text" name="mota" id="" placeholder="Mô tả">
                </div>
            </div>

            <div class="form-group">
                <div class="form-label">
                    <label for="">Gía Sản Phẩm</label>
                </div>
                <div class="form-input">
                    <input style="width: 80%;" type="text" name="giasp" id="" placeholder="Gía Sản Phẩm" value="<?= $price ?>">
                </div>
            </div>

            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
                <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listsp"><input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>