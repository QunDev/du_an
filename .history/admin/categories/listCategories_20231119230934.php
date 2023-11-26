<h1>Table Category</h1>

<table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Category Name</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($allCategories as $category) {
        extract($category);
        echo '<tr>
        <td> '.$categoryId.' </td>
        <td> '.$categoryName.' </td>
        <td>
            <button><a href="index.php?action=loadOne&id='.$categoryId.'">Cập nhật</a></button>
            <button>Xoá</button>
        </td>
        </tr>';
      } ?>
      </tbody>
    </table>

<div class="rows">
  <a href="index.php?action=addCategory"><button class="btn">Create</button></a>
</div>