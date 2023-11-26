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
      <?php foreach($data as $category) {
        extract($category);
        echo '<tr>
        <td> '.$id.' </td>
        <td> '.$name.' </td>
        <td>
            <button><a href="index.php?action=loadOne&id='.$id.'">Cập nhật</a></button>
            <button><a href="index.php?action=delete&id='.$id.'">Xoá</a></button>
        </td>
        </tr>';
      } ?>
      </tbody>
    </table>

<div class="rows">
  <a href="index.php?action=addCategory"><button class="btn">Create</button></a>
</div>