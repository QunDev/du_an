<div class="main">
      <form
        action="index.php?act=createCategory"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
        <h3 class="heading">Add Category New</h3>

        <div class="spacer"></div>

        <div class="form-group">
          <label for="categoryName" class="form-label">Category Name</label>
          <input
            id="categoryName"
            name="categoryName"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
          />
        </div>

        <input type="submit" value="Create" name="btnSubmit" class="form-submit">
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