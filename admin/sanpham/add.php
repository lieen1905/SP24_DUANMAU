<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">

      <div class="form__category" style="margin-top: 20px; margin-bottom: 20px;">
        <select name="iddm" id="iddm">
          <?php
          foreach ($listdanhmuc as $dm) {
            extract($dm);
            echo '<option value="' . $id . '">' . $name . '</option>';
          }
          ?>
        </select>
      </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      <label for="">Tên Sản Phẩm</label>
    </div>
    <div class="form-input">
      <input style="width: 80%;" type="text" name="name" id="" placeholder="Tên Sản Phẩm">
    </div>
  </div>

  <div class="row2 mb10 form_content_container">
    <label> Hình ảnh </label> <br>
    <input type="file" name="img">
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
      <input style="width: 80%;" type="text" name="price" id="" placeholder="Gía Sản Phẩm">
    </div>
  </div>

  <div class="row mb10 ">
    <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
    <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="reset" value="NHẬP LẠI">

    <a href="index.php?act=listsp"><input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="DANH SÁCH"></a>
  </div>
  </form>

  <?php
  if (isset($thongbao) && ($thongbao != '')) {
    echo $thongbao;
    header("location: index.php?act=listsp");
  }
  ?>
  </form>
</div>
</div>