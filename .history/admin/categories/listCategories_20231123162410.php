<div class="rows">
  <a href="index.php?act=formCreateCategory"><button class="btn">Create</button></a>
</div>

<h1>Table Category</h1>

<table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Category Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>btnDelete
      </thead>
      <tbody>
      <?php foreach($allCategories as $category) {
        extract($category);
        echo '<tr>
        <td> '.$categoryId.' </td>
        <td> '.$categoryName.' </td>
        <td> '.$description.' </td>
        <td>
            <button><a href="./?act=loadOneCategory&id='.$categoryId.'">Update</a></button>
            <button class="btnDelete" data-id="'.$categoryId.'">Delete</button>
        </td>
        </tr>';
      } ?>
      </tbody>
    </table>





<script src="./assets/js/categories.js"></script>
