<!-- END HEADER -->

<main class="catalog  mb ">

    <div class="boxleft">

        <div class="title">CẬP NHẬT TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edittk" method="post">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Email</label>
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" placeholder="Email" value="<?= $email ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Username</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="user" placeholder="Username" value="<?= $user ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Password</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="pass" placeholder="Password" value="<?= $pass ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Address</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="address" placeholder="Address" value="<?= $address ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Phone</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="tel" placeholder="Phone" value="<?= $tel ?>">
                    </div>
                </div>
                <div class="input-submit">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </div>
            </form>
            <?php
            if (isset($capnhat_connect) && ($capnhat_connect != "")) {
                echo $capnhat_connect;
            }
            ?>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>