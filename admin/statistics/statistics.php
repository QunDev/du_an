<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my chat</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
     .container{
        width: 100%;
        height: 80%;
     }
    </style>
</head>
<body>
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
              label: 'Biểu đồ lượng sản phẩm tiêu thụ',
              data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 44
            ],
            borderColor: 'rgb(75, 192, 192)',
            }]
          },
          options: {
            //scales: {
              title: {
                display: true,
                text :'Biểu đồ lượng sản phẩm tiêu thụ',
                fontsize :25
              }
            //}
          }
        });
      </script>
    <!-- <div class="container">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        let myChart = document.getElementById('mychart').getContext('2d');

        let massPopChart = new Chart(mychart, {
            type:'bar',
            data:{
            labels:['boston','worcester','springfield','lowell','cambridge','new bedford'],
            datasets:[{
                label:'population',
                data:[
                    45345,
                    35334,
                    23233,
                    89789,
                    45535,
                    43534
                ]
            }]
        },
        options:{}
        });
    </script> -->
</body>
</html>