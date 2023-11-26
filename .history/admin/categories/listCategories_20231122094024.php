<h1>Table Category</h1>

<table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Category Name</th>
          <th>Hành Động</th>
        </tr>btnDelete
      </thead>
      <tbody>
      <?php foreach($allCategories as $category) {
        extract($category);
        echo '<tr>
        <td> '.$categoryId.' </td>
        <td> '.$categoryName.' </td>
        <td>
            <button><a href="index.php?action=loadOne&id='.$categoryId.'">Cập nhật</a></button>
            <button class="btnDelete">Xoá</button>
            <input value="'.$categoryId.'" hidden id="categoryId" />
        </td>
        </tr>';
      } ?>
      </tbody>
    </table>

<div class="rows">
  <a href="index.php?action=addCategory"><button class="btn">Create</button></a>
</div>

<div class="notification hide" id="deleteConfirm">
    <span class="btn">Bạn có chắc chắn xóa không?</span>
    <button class="btn btn--primary">Đồng ý</button>
    <button class="btn btn--primary">Không</button>
</div>

<script src="./assets/js/categories.js"></script>