<div class="main">
      <form
        action="index.php?act=createProduct"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
        <h3 class="heading">Thêm sản phẩm mới </h3>

        <div class="spacer"></div>

        <div class="form-group">
          <label for="productName" class="form-label">Tên sản phẩm </label>
          <input
            id="productName"
            name="productName"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
            data-name
            rule="required"
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="description" class="form-label">Mô tả </label>
          <input
            id="description"
            name="description"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            data-desc
            rule="required"
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="price" class="form-label">Giá</label>
          <input
            id="price"
            name="price"
            type="number"
            placeholder="20.000VND"
            class="form-control"
            data-desc
            rule="required|number:0"
            min="0"
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="stock" class="form-label">Stock</label>
          <input
            id="stock"
            name="stock"
            type="number"
            placeholder="VD: 20"
            class="form-control"
            data-desc
            rule="required"
            min="1"
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="Brand" class="form-label">Thương hiệu</label>
          <select name="brand" id="brand" class="form-control" rule="required">
            <option value="" selected hidden></option>
            <?php
              foreach ($allCategories as $category) {
                extract($category);
                echo '
                  <option value="'.$categoryId.'">'.$categoryName.'</option>
                ';
              }

            ?>
          </select>
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="image" class="form-label">Ảnh </label>
          <input
            id="image"
            name="image"
            type="file"
            class="form-control"
            data-desc
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <input
            id="createAt"
            name="createAt"
            type="text"
            class="form-control"
            hidden
          />
          <span class="form-message"></span>
        </div>
        <input value="Thêm mới " type="submit" class="form-submit">   
        <button class="form-submit" type="button"><a href="./?act=listProducts">Trở về</a></button>

        <!-- <button class="form-submit" type="button" name="btnSubmit">Thêm</button> -->
        

      </form>
    </div>
    <script src="./assets/js/products.js"></script>
    <script>
        validator("#form-1");
    </script>
    