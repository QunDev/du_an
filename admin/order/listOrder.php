<style>
     button:hover{
       background-color: violet;
       color: brown;
    }
    .btn-create {
      border: 2px solid pink;
    }
    .btnDelete {
      margin-left: 16px;
    }
    .btnDelete, .thinhdeptrai {
      border: 2px solid pink  ;
      padding: 8px 16px;
      border-radius: 999px;
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
  <a href="index.php?act=formCreateProduct"><button class="btn">Thêm mới </button></a>
</div>

 <p><Strong> Bảng Danh Mục </Strong></p>
 <br>
 <br>

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
                // foreach ($data as $category) {
                //     extract($category);
                //     echo '<option value="'.$id.'">'.$name.'</option>';
                // }
            ?>
            
          </select>
          <span class="form-message"></span>
        </div>
        <input type="submit" value="Filter" class="btn" name="filter">
</form> -->

<table border="1" style="width: 100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên sản phẩm </th>
          <th>Tổng tiền</th>
          <th>Số lượng sản phẩm</th>
          <th>Tên người nhận</th>
          <th>Địa chỉ người nhận</th>
          <th>Số điện thoại người nhận</th>
          <th>Trạng thái</th>
          <th>Hành Động </th>
          
        </tr>
      </thead>
      <tbody>
      <?php
        foreach($data as $value) {
          extract($value);
          $imgPath = "../uploads/".$imageURL;
          if(is_file($imgPath)) {
              $image = '<img src="'.$imgPath.'" alt="" height="80">';
          } else {
              $image = "No photo";
          }
          
              echo '<tr>
                    <td> '.$buyId.' </td>
                    <td> '.$productName.' </td>
                    <td> '.$totalAmount.' </td>
                    <td> '.$quantityProduct.' </td>
                    <td> '.$name.' </td>
                    <td> '.$address.' </td>
                    <td> '.$phone.' </td>
                    <td> 
                        <select name="status" id="status" data-id="'.$buyId.'">
                            <option value="1" selected hidden>'.$isCompleted.'</option>
                            <option value="2">Đang chuẩn bị hàng</option>
                            <option value="3">Đơn hàng đã được giao</option>
                            <option value="4">Đơn hàng đã hủy</option>
                        </select>
                    </td>
                    <td>
                        <button class="thinhdeptrai"><a href="./?act=loadOneProduct&id='.$productID.'">Update</a></button>
                        <button class="btnDelete" data-id="'.$productID.'">Delete</button>
                    </td>
                    </tr>';
          
          
          
        }
      ?>
      </tbody>
</table>

<script src="./assets/js/order.js"></script>
