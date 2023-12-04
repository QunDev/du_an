<style>
      button:active{
       
        
       
        box-shadow: 
            0 0px 0 #0005,
            0 0px 0 #BD1360,
            0 0px 0 7px black,
            0 0 30px 30px gray;
        transform: translateY(5px);
    }
  p{
    font-size: 30px;
  }
  table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
  }

  th,
  td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }


  tr:hover {
    background-color: #f5f5f5;
  }


  @media screen and (max-width: 600px) {

    th,
    td {
      display: block;
      width: 100%;
      box-sizing: border-box;
    }

    th {
      text-align: center;
    }
  }


  table {
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  th,
  td {
    border-right: 1px solid #ddd;
  }

  th:last-child,
  td:last-child {
    border-right: none;
  }
</style>
<div class="rows">
  <a href="index.php?act=formCreateCategory"><button class="btn">Thêm Danh mục</button></a>
</div>

<p> <Strong  > Danh Mục Sản Phẩm</Strong> </p>
<br>
<br>
<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Tên Danh Mục </th>
      <th>Mô tả</th>
      <th>Hành Động</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($allCategories as $category) {
      extract($category);
      echo '<tr>
        <td> ' . $categoryId . ' </td>
        <td> ' . $categoryName . ' </td>
        <td> ' . $description . ' </td>
        <td>
            <button><a href="./?act=loadOneCategory&id=' . $categoryId . '">Cập Nhật</a></button>
            <button class="btnDelete" data-id="' . $categoryId . '">Xóa</button>
        </td>
        </tr>';
    } ?>
  </tbody>
</table>





<script src="./assets/js/categories.js"></script>