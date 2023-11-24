<?php
    extract($data);
?>

<div class="main">
      <form
        action="index.php?action=updateCategory"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
        <h3 class="heading">Update Category</h3>

        <div class="spacer"></div>

        <div class="form-group">
          <!-- <input type="hidden" name="id" value="<?php //echo $id ?>"> -->
          <label for="categoryNameOld" class="form-label">Category Name Old</label>
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
          <label for="categoryNameNew" class="form-label">Category Name New</label>
          <input
            id="categoryNameNew"
            name="categoryNameNew"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
          />
        </div>

        <div class="form-group">
          <!-- <input type="hidden" name="id" value="<?php //echo $id ?>"> -->
          <label for="categoryNameOld" class="form-label">Category Name Old</label>
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
          <label for="categoryNameNew" class="form-label">Category Name New</label>
          <input
            id="categoryNameNew"
            name="categoryNameNew"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
          />
        </div>

        <input type="submit" value="Update" name="btnSubmit" class="form-submit">
        <button class="form-submit" type="button"><a href="index.php?action=listCategory">Category</a></button>

        <!-- <button class="form-submit" type="button" name="btnSubmit">Thêm</button> -->
        <span class="form-message">
            <?php 
                if (isset($notification) && $notification!="") {
                    echo $notification;
                }
            ?>
        </span>

      </form>
</div>