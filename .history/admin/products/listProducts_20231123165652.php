<h1>Table Category</h1>

<form
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
    </form>

<table border="1" style="width: 100%">
      <thead>
        <tr>
          <th>ID Product</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Img</th>
          <th>View</th>
          <th>Description</th>
          <th>ID Category</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach($dataProduct as $product) {
          extract($product);
          $imgPath = "../uploads/".$img;
          if(is_file($imgPath)) {
              $image = '<img src="'.$imgPath.'" alt="" height="80">';
          } else {
              $image = "No photo";
          }
          $idProduct =$id;
          foreach ($data as $category) {
            extract($category);
            if ($idCategory == $id) {
              $idCategory = $name;
            }
          }
          echo '<tr>
          <td> '.$idProduct.' </td>
          <td> '.$nameProduct.' </td>
          <td> '.$price.' </td>
          <td> '.$image.' </td>
          <td> '.$view.' </td>
          <td> '.$desc.' </td>
          <td> '.$idCategory.' </td>
          <td>
              <button><a href="index.php?action=loadOneProduct&id='.$idProduct.'">Cập nhật</a></button>
              <button><a href="index.php?action=deleteProduct&id='.$idProduct.'">Xoá</a></button>
          </td>
          </tr>';
        }
      ?>
      </tbody>
</table>

<div class="rows">
  <a href="index.php?action=addProduct"><button class="btn">Create</button></a>
</div>