<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM MỚI TAI KHOAN USER</h1>
  </div>
  <div style="margin-top: 40px;">
    <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <div class="form-label">
          <label for="">Tên đăng nhập</label>
        </div>
        <div class="form-input">
          <input style="width: 80%;" type="text" name="tentaikhoan" id="" placeholder="Tên đăng nhập">
        </div>
      </div>
      <div class="form-group">
        <div class="form-label">
          <label for="">Địa chỉ</label>
        </div>
        <div class="form-input">
          <input style="width: 80%;" type="text" name="address" id="" placeholder="địa chỉ">
        </div>
      </div>
      <div class="form-group">
        <div class="form-label">
          <label for="">Password</label>
        </div>
        <div class="form-input">
          <input style="width: 80%;" type="text" name="pass" id="" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="form-label">
          <label for="">Email</label>
        </div>
        <div class="form-input">
          <input style="width: 80%;" type="text" name="email" id="" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <div class="form-label">
          <label for="">Phone</label>
        </div>
        <div class="form-input">
          <input style="width: 80%;" type="text" name="tel" id="" placeholder="Phone">
        </div>
      </div>

      <div class="row mb10 ">
        <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" name="themmoitk" type="submit" value="THÊM MỚI">
        <input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=khachhang"><input style="padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px;" class="mr20" type="button" value="DANH SÁCH"></a>
      </div>

    </form>
  </div>
</div>