<!-- END HEADER -->
<main class="catalog  mb ">

    <div class="boxleft">

        <div class="title" style="text-transform: uppercase;">Đăng ký thành viên</div>
        <div class="box_content form_account">
            <form action="index.php?act=dangky" method="post">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Email</label>
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Tên đăng nhập</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="user" placeholder="Useranme">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Mật khẩu</label>
                    </div>
                    <div class="form-input">
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="input-submit">
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhập lại">
                </div>

            </form>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>