<?php
    extract($data);
?>

<div class="main">
      <form
        action="index.php?action=update"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
        <h3 class="heading">Cập nhật sản phẩm </h3>

        <div class="spacer"></div>

        <div class="form-group">
          <!-- <input type="hidden" name="id" value="<?php //echo $id ?>"> -->
          <label for="categoryNameOld" class="form-label">Danh mục cũ</label>
          <input
            id="categoryNameOld"
            name="categoryNameOld"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            value="<?php echo $categoryName ?>"
            readonly
            title="Read Only"
          />
        </div>
        <div class="form-group">
          <label for="categoryNameNew" class="form-label">Danh mục mới</label>
          <input
            id="categoryName"
            name="categoryNameNew"
            type="text"
            placeholder="VD: 3"
            class="form-control"
            autocomplete
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <!-- <input type="hidden" name="id" value="<?php //echo $id ?>"> -->
          <label for="descriptionOld" class="form-label">Mô tả cũ</label>
          <input
            id="descriptionOld"
            name="descriptionOld"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            value="<?php echo $description ?>"
            readonly
            title="Read Only"
          />
        </div>
        <div class="form-group">
          <label for="descriptionNew" class="form-label">Mô Tả mới </label>
          <input
            id="description"
            name="descriptionNew"
            type="text"
            placeholder="VD: thinhdeptrai"
            class="form-control"
            autocomplete
          />
          <span class="form-message"></span>
        </div>

        <input value="Cập Nhật" type="button" class="form-update" data-id="<?php echo $categoryId?>">  
        <button class="form-submit" type="button"><a href="./?act=listCategories">Danh mục </a></button>

        

      </form>
</div>

<script defer src="./assets/js/categories.js"></script>