<div class="main">
      <form
        action="index.php?act=createCategory"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
        <h3 class="heading">Add Product New</h3>

        <div class="spacer"></div>

        <div class="form-group">
          <label for="productName" class="form-label">Product Name</label>
          <input
            id="productName"
            name="productName"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
            data-name
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="description" class="form-label">Description</label>
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

        <div class="form-group">
          <label for="price" class="form-label">Price</label>
          <input
            id="price"
            name="price"
            type="text"
            placeholder="$"
            class="form-control"
            data-desc
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="stock" class="form-label">Stock</label>
          <input
            id="stock"
            name="stock"
            type="text"
            placeholder="VD: 20"
            class="form-control"
            data-desc
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="Brand" class="form-label">Brand</label>
          <input
            id="Brand"
            name="Brand"
            type="text"
            placeholder="VD: Lavazza"
            class="form-control"
            data-desc
          />
          <span class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="createdAt" class="form-label">CreatedAt</label>
          <input
            id="createdAt"
            name="createdAt"
            type="text"
            placeholder="VD: 20/10/2023"
            class="form-control"
            data-desc
          />
          <span class="form-message"></span>
        </div>
        <input value="Create" type="button" class="form-submit">  
        <button class="form-submit" type="button"><a href="./?act=listCategories">Category</a></button>

        <!-- <button class="form-submit" type="button" name="btnSubmit">Thêm</button> -->
        

      </form>
    </div>
    <script defer src="./assets/js/categories.js"></script>