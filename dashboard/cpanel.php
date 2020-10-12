<?php
	/* Database connection settings */
  $host = "fdb29.awardspace.net";
  $user = "3519580_goijob";
  $pass = "GOIJOB2020";
  $db = "3519580_goijob";
  $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
  mysqli_set_charset($mysqli,"utf8");
  session_start();
if(strlen($_SESSION['email']) > 0 OR $_SESSION['email'] != ""){
  #hay session, a continuación serás enviando al sitio de destino:
    //header('location: miperfil.php?ID='. $session);
  }
  else{
  #Si no hay session imprime toda la estructura:
  header('location: index.php');
  }

	$data1 = '';
	$data2 = '';

	//query to get data from the table
  $sql = "SELECT count(id) as total FROM datospersonales";
  $result = mysqli_query($mysqli, $sql);
	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {
    $data1 = $data1 . '"'. $row['total'].'",';
  }

  $data1 = trim($data1,",");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Dashboard</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
  
  <!-- CSS Only bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .sidebar{
        margin-top:-50px;
      }
  
    #canva{
      width:500px;
      float:left;
    }

    #canva2{
      width:500px;
      float:right;
    }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="">GOIJOB</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="closeadmin.php">Salir</a>
          </li>
        </ul>
    </nav>

    <div class="container-fluid">
          <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                 <p>Hola <?php echo $_SESSION['usuario']; ?></p>
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="cpanel.php">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">
                        <span data-feather="users"></span>
                        Cuentas
                      </a>
                      
                        <ul class="nav-item">
                          <li class="nav-item">
                            <a class="nav-link">
                            <span data-feather="x-circle"></span>
                              Sin validar
                            </a>
                            <ul class="nav-item">
                              <li class="nav-item">
                                <a href="sinvalidarEmpresa.php" class="nav-link">
                                  <span data-feather=""></span>
                                  Empresas
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="sinvalidar.php" class="nav-link">
                                  <span data-feather=""></span>
                                  Autónomos
                                </a>
                              </li>


                              <li class="nav-item">
                                <a href="" class="nav-link">
                                  <span data-feather=""></span>
                                  Contratistas
                                </a>
                              </li>

                            </ul>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link">
                            <span data-feather="check-circle"></span>
                              Validadas
                            </a>
                            <ul class="nav-item">
                              <li class="nav-item">
                                <a href="Empresas_validadas.php" class="nav-link">
                                  <span data-feather=""></span>
                                  Empresas
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="validadas.php" class="nav-link">
                                  <span data-feather=""></span>
                                  Autónomos
                                </a>
                              </li>


                              <li class="nav-item">
                                <a href="" class="nav-link">
                                  <span data-feather=""></span>
                                  Contratistas
                                </a>
                              </li>

                            </ul>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="errores.php">
                            <span data-feather="slash"></span>
                            Errores
                            </a>
                          </li>
                          
                        </ul>
                      <li class="nav-item">
                        <a class="nav-link" href="">
                        <span data-feather="settings"></span>
                        Herramientas
                        </a>
                        <ul class="nav-item">
                          <li class="nav-item">
                            <a class="nav-link" href="eliminaradmin.php">
                            <span data-feather="trash-2"></span>
                              Eliminar administrador
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="generapdf.php">
                          <span data-feather="bar-chart-2"></span>
                          Reporte
                        </a>
                      </li>
                  </ul>
                </div>
              </nav>

              <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <a href="generapdf.php"><button type="button" class="btn btn-sm btn-outline-secondary">Export</button></a>
                      </div>
                    </div>
                  </div>





                  <div id="canva" class="table-responsive">
              	    <h4>Trabajadores registrados</h4>       
			              <canvas id="chart" style="width:20px; height:19px;border: 1px solid #555652; margin-top: 10px;"></canvas>


                                  
                    <script>
                      var ctx = document.getElementById("chart").getContext('2d');
                        var myChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ['Usuarios'],
                              datasets: 
                              [{
                                  label: '# Usuarios que buscan empleo',
                                  data: [<?php echo $data1; ?>],
                                  backgroundColor: '#e8e8e8',
                                  borderColor:'rgba(255,99,132)',
                                  borderWidth: 3
                              }]
                          },
                      
                          options: {
                              scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                              tooltips:{mode: 'index'},
                              legend:{display: true, position: 'top', labels: {fontColor: 'black', fontSize: 16}}
                          }
                      });
                    </script>

                  </div>




                            <?php
                              $sql = "SELECT count(id) as total FROM cuentascliente";
                              $result = mysqli_query($mysqli, $sql);
                              //loop through the returned data
                              while ($row = mysqli_fetch_array($result)) {
                                $data2 = $data2 . '"'. $row['total'].'",';
                              }

                              $data2 = trim($data2,",");?>
                  <div id="canva2" class="table-responsive">
              	    <h4>Contratistas registrados</h4>       
			              <canvas id="chart2" style="width:20px; height:19px;border: 1px solid #555652; margin-top: 10px;"></canvas>

                                  
                    <script>
                      var ctx = document.getElementById("chart2").getContext('2d');
                        var myChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ['Usuarios'],
                              datasets: 
                              [{
                                  label: '# Usuarios que contratan',
                                  data: [<?php echo $data2; ?>],
                                  backgroundColor: '#03A9F4',
                                  borderColor:'#e8e8e8',
                                  borderWidth: 3
                              }]
                          },
                      
                          options: {
                              scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                              tooltips:{mode: 'index'},
                              legend:{display: true, position: 'top', labels: {fontColor: 'black', fontSize: 16}}
                          }
                      });
                    </script>

                  </div>

<br>
                  <h2>Usuarios</h2>
                  <div class="table-responsive">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                        
                          <th scope="col">Nombre</th>
                          <th scope="col">Tel</th>
                          <th scope="col">Ciudad</th>
                          <th scope="col">Ocupación</th>
                          <th scope="col">Correo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $sql = "SELECT nombre,correoel,tel,ciudad,ocupacion from datospersonales";
                            $result = $mysqli->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                              while($row = $result->fetch_array()) {
                                //
                            ?> 
                                <tr>
                                  <td><?php echo $row['nombre'] ?></td>
                                  <td><?php echo $row['tel'];?></td>
                                  <td><?php echo $row['ciudad'] ?></td>
                                  <td><?php echo $row['ocupacion'] ?></td>
                                  <td><?php echo $row['correoel'] ?></td>
                                </tr>
                              <?php }} ?>
                      </tbody>
                    </table>
                  </div>
              </main>
          </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>

        <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>