<style>
    td {
        padding: 0 20px;
    }
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>

        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content">
                <?php
                $img = $img_path . $img;
                echo "<img src='$img' width='300'>";
                echo "<p>$mota</p>";

                ?>

            </div>
        </div>


        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php foreach ($sanphamcl as $value) : ?>
                    <li>
                        <a href="index.php?act=sanphamct&idsp=<?= $value['id'] ?>">
                            <img src="upload/<?= $value['img'] ?>" alt="">
                        </a>
                    </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>