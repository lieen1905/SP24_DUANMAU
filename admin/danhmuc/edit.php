<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<h1 class="add_title">Sửa danh mục</h1>
<div class="add_category">
    <form action="index.php?act=editCategory" method="POST" >

        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Mã Loại
                </label>
            </div>
            <input type="text" name="id" value="<?= $id ?>">

        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Tên Loại
                </label>
            </div>
            <input type="text" name="name" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
            <div class="noti_errors">
                <?= $errors['name'] ?? '' ?>
            </div>
        </div>
        <div class="form_group-submit">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" value="Sửa" name="edit">
    </form>
</div>