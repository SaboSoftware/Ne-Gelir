<?php require_once 'header.php'; ?>


<body>

  <div class="container-fluid p-0">

    <div class="card-body">
      <div class="d-flex justify-content-center col-md-12">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link " href="income-report.php">Gelir Raporu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="expenses-report.php">Gider Raporu</a>
          </li>
        </ul>  
      </div>


      <?php 
      $sql=$db->prepare("
        SELECT expenses_category, COUNT(*),
        SUM(expenses_price) FROM expenses GROUP BY 
        expenses_category
        ");
      $sql->execute();

      while ($sqlCek=$sql->fetch(PDO::FETCH_ASSOC)){
        $expenses_category[$sqlCek['expenses_category']]=$sqlCek['SUM(expenses_price)'];
      }
      ?>
      
      <canvas class="mt-4" id="myChart" width="400" height="400"></canvas>


    </div>
  </div>


  <footer>
    <nav class="navbar fixed-bottom navbar-light bg-light p-0 m-0">
      <div class="container p-0 "> 
        <div class="btn-group col-12">
          <a href="index.php" class="btn btn-outline-secondary btn-lg"><i class="bi bi-house"></i></a>
          <a href="income-expense.php" class="btn btn-outline-secondary btn-lg "><i class="bi bi-arrow-down-up" ></i></a>
          <a href="income-report.php" class="btn btn-outline-secondary btn-lg active"><i class="bi bi-cash"></i></a>
          <a href="about.php" class="btn btn-outline-secondary btn-lg"><i class="bi bi-info"></i></a>
        </div>
      </div>
    </nav>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: [<?php 

          foreach ($expenses_category as $key => $value) {
            echo "'".$key."',";
          }

          ?>],
          datasets: [{
            label: '# of Votes',
            data: [<?php 

              foreach ($expenses_category as $key => $value) {
                echo "'".$value."',";
              }

              ?>],
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(198, 192, 192, 0.2)'
              ],
              borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(198, 192, 192, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>


    </body>
    </html>