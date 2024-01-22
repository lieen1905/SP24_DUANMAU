<main class="catalog  mb ">

  <div class="boxleft">

    <div class="box_title">Quên mật khẩu</div>
    <div class="box_content form_account">
      <form action="index.php?act=quenmk" method="post">
        <div class="form-group">
          <div class="form-label">
            <label for="">Email</label>
          </div>
          <div class="form-input">
            <input type="email" name="email" placeholder="Email">
          </div>
        </div>
        <div class="input-submit">
          <input type="submit" value="Gửo" name="guiemail">
          <input type="reset" value="Nhập lại">
        </div>
        <?php if (isset($sendMailMess) && $sendMailMess != '') {
          echo $sendMailMess;
        } ?>
      </form>
    </div>
  </div>
  <?php
  include "view/boxright.php";
  ?>
</main>