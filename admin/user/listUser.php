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

<p> <Strong  > Danh sachs user</Strong> </p>
<br>
<br>
<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>email </th>
      <th>Ngày tạo</th>
      <th>Role</th>
      <th>Hành Động</th>
    </tr>
  </thead c>
  <tbody>
    <?php foreach ($data as $value) {
      extract($value);
      if($role == 0) {
        $r = "Client";
      } else {
        $r = "Admin";
      }
      echo '<tr>
        <td> ' . $userID . ' </td>
        <td> ' . $email . ' </td>
        <td> ' . $createdAt . ' </td>
        <td> 
            <select name="status" data-id="'.$userID.'" id="roleSelect">
                <option value="'.$role.'" hidden>'.$r.'</option>
                <option value="1">Admin</option>
                <option value="0">Client</option>
                
            </select>
        </td>
        <td >
            <button class="btnDelete btn" data-id="' . $userID . '">Xóa</button>
        </td>
        </tr>';
    } ?>
  </tbody>
</table>





<script src="./assets/js/user.js"></script>