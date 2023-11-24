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
            id="categoryName"
            name="categoryNameNew"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <!-- <input type="hidden" name="id" value="<?php //echo $id ?>"> -->
          <label for="descriptionOld" class="form-label">Description Old</label>
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
          <label for="descriptionNew" class="form-label">Description New</label>
          <input
            id="description"
            name="descriptionNew"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
          />
          <span class="form-message"></span>
        </div>

        <input value="Update" type="button" class="form-submit">  
        <button class="form-submit" type="button"><a href="./?act=listCategories">Category</a></button>

        

      </form>
</div>

<script defer src="./assets/js/categories.js"></script>