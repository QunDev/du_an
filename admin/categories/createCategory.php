<div class="main">
      <form
        action="index.php?act=createCategory"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
        <h3 class="heading">Thêm danh mục mới</h3>

        <div class="spacer"></div>

        <div class="form-group">
          <label for="categoryName" class="form-label">Tên danh mục</label>
          <input
            id="categoryName"
            name="categoryName"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
            data-name
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="description" class="form-label">Mô Tả</label>
          <input
            id="description"
            name="description"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            data-desc
          />
          <span class="form-message"></span>
        </div>

        <input value="Thêm mới" type="button" class="form-submit">  
        <button class="form-submit" type="button"><a href="./?act=listCategories">Danh Mục</a></button>

        <!-- <button class="form-submit" type="button" name="btnSubmit">Thêm</button> -->
        

      </form>
    </div>
    <script defer src="./assets/js/categories.js"></script>