<div class="rows">
  <a href="index.php?act=formCreateProduct"><button class="btn">Create</button></a>
</div>

<h1>Table Category</h1>

<!-- <form
        action="index.php?action=listProduct"
        method="post"
        class="form"
        id="form-1"
        enctype="multipart/form-data"
      >
      <div class="form-group">
          <label for="fullname" class="form-label">Product Name</label>
          <input
            id="fullname"
            name="filterName"
            type="text"
            placeholder="VD: Burger"
            class="form-control"
            autocomplete
          />
        </div>
      <div class="form-group">
          <label for="idCategory" class="form-label">Category</label>
          <select name="filterCategory" id="idCategory">
            <option value="0" selected >All</option>
            <?php
                foreach ($data as $category) {
                    extract($category);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
            
          </select>
          <span class="form-message"></span>
        </div>
        <input type="submit" value="Filter" class="btn" name="filter">
</form> -->

<table border="1" style="width: 100%">
      <thead>
        <tr>
          <th>ID Product</th>
          <th>Product Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Brand</th>
          <th>Img</th>
          <th>CreatedAt</th>
          <th>Actions</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
        foreach($dataProducts as $product) {
          extract($product);
          $imgPath = "../uploads/".$imageURL;
          if(is_file($imgPath)) {
              $image = '<img src="'.$imgPath.'" alt="" height="80">';
          } else {
              $image = "No photo";
          }
        //   foreach ($data as $category) {
        //     extract($category);
        //     if ($idCategory == $id) {
        //       $idCategory = $name;
        //     }
        //   }
          echo '<tr>
          <td> '.$productID.' </td>
          <td> '.$productName.' </td>
          <td> '.$description.' </td>
          <td> '.$price.' </td>
          <td> '.$stock.' </td>
          <td> '.$brand.' </td>
          <td> <img src="'.$imgPath.'" alt="" width=200px> </td>
          <td> '.$createdAt.' </td>
          <td>
              <button><a href="./?act=loadOneProduct&id='.$productID.'">Update</a></button>
              <button class="btnDelete" data-id="'.$productID.'">Delete</button>
          </td>
          </tr>';
        }
      ?>
      </tbody>
</table>

<script src="./assets/js/products.js"></script>