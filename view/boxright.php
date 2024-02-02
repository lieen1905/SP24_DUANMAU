<div class="boxright">

    <div class="mb">
        <div class="title">TÀI KHOẢN</div>
        <?php if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <p style="padding-bottom: 10px;">Xin chào <?= $user ?></p>

            <?php
            if ($role == 1) {
            ?>
            <div class="admin" style="margin-bottom: 10px;">
            <a style="text-decoration: none; font-size: 14px;" href="admin/index.php">Đăng nhập Admin</a>
            </div>
            <?php
            }
            ?>
            <div class="update" style="margin-bottom: 10px;">
                <a style="text-decoration: none; font-size: 14px;" href="index.php?act=edittk">Cập nhật tài khoản</a>
            </div>
            <div class="logout" style="margin-bottom: 10px;">
                <a style="text-decoration: none; font-size: 14px;" href="index.php?act=dangxuat">Đăng xuất</a>
            </div>
        <?php
        } else {
        ?>
            <div class="box_content form_account">
                <form action="index.php?act=dangnhap" method="POST">
                    <div class="form-group">
                        <div class="form-label">
                            <label for="">Tên đăng nhập</label>
                        </div>
                        <div class="form-input">
                            <input type="text" name="user" id="" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">
                            <label for="">Mật khẩu</label>
                        </div>
                        <div class="form-input">
                            <input type="password" name="pass" id="" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <a style="text-decoration: none;font-size: 13px;display: flex; justify-content: end;" href="index.php?act=dangky">Bạn chưa có tài khoản ?</a>
                    <div class="input-submit">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                    <div class="forgot_password">
                        <a href="index.php?act=quenmk">Quên mật khẩu</a>

                    </div>
                    <?php if (isset($loginMess) && $loginMess != '') {
                        echo $loginMess;
                    } ?>
                </form>
            </div>
        <?php } ?>
    </div>
    <div class="mb">
        <div class="box_title" style="font-size: 15px;
    margin-bottom: 10px;">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    echo '<li><a href="' . $linkdm . '">' . $name . ' </a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" id="" placeholder="Tìm kiếm" name="keyword">

            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $img = $img_path . $img;
                echo '<div class="selling_products" style="width:100%; margin-bottom: 10px;">
                        <a href="' . $linksp . '"><img src="' . $img . '" alt="anh"></a>
                  <a href="' . $linksp . '" style="    position: relative;
                  top: -16px;">' . $name . '</a>
                </div>';
            }
            ?>
        </div>
    </div>
</div>