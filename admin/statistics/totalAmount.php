<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
     .container{
        width: 100%;
        height: 80%;
     }
     h2 {
      text-align: center;
      margin-top: 20px;
     }
    </style>
<body>

<ul class="navbar__list js-dropdown-list">
                <li class="navbar__item">
                    <a href="./?act=statistics" class="navbar__link">
                        Sản phẩm đã bán
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="./?act=totalAmount" class="navbar__link">
                        Tổng tiền
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
                
</ul>

    <div class="container">
        <canvas id="myChart"></canvas>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>

        
        
        const ctx = document.getElementById('myChart');

        
      
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'],
            datasets: [{
              label: 'Tổng tiền',
              data: [<?php echo $dataTotalAmount[0] ?>
                    ,<?php echo $dataTotalAmount[1] ?>
                    ,<?php echo $dataTotalAmount[2] ?>
                    ,<?php echo $dataTotalAmount[3] ?>
                    ,<?php echo $dataTotalAmount[4] ?>
                    ,<?php echo $dataTotalAmount[5] ?>
                    ,<?php echo $dataTotalAmount[6] ?>
                    ,<?php echo $dataTotalAmount[7] ?>
                    ,<?php echo $dataTotalAmount[8] ?>
                    ,<?php echo $dataTotalAmount[9] ?>
                    ,<?php echo $dataTotalAmount[10] ?>
                    ,<?php echo $dataTotalAmount[11] ?>],
            borderColor: 'rgb(75, 192, 192)',
            }]
          },
          options: {
            //scales: {
              title: {
                display: true,
                text :'Tổng tiền',
                fontsize :25
              }
            //}
          }
        });
        
      </script>
    
    <h2>Biểu đồ Tổng tiền thu về</h2>

    
</body>
</html>