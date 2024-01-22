<main class="catalog  mb ">
    <div class="boxleft">
        <div class="items">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh =  $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;

                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="box_items ' . $mr . '">
                    <div class="box_items_img">
                <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                <div class="add" href="">ADD TO CART</div>
             </div>
              <div class="name"><a class="item_name" href="' . $linksp . '">' . $name . '</a></div>
              <p class="price">' . number_format($price), '$' . '</p>
              
           </div>';
                $i += 1;
            }
            ?>

        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->