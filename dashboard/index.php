<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v4.0.1">
      <title>Dashboard Template · Bootstrap</title>
      <link rel="stylesheet" href="css/index.css" type="text/css">
      <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
      <!-- Bootstrap core CSS -->
      <!--link href="../assets/dist/css/bootstrap.css" rel="stylesheet"><-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

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
      </style>

      <script>

      </script>
      <!-- Custom styles for this template -->
    </head>
  <body>
    <div>
      <div>
        <br><br>
      </div>
    </div>
          <form action="login.php" method="post">
                <div class="Modal" tabindex="-1" role="dialog" id="myModal">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Login</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="bod">
                        <!--<label for="">Correo electronico</label><-->
                        <input type="text" name="e-mail" id="e-mail" class="form-control" placeholder="Correo" required>
                        <br>
                        <!--<label for="">Contraseña</label><-->
                        <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Contraseña" required>
                        <div class="col">
                          
                          <!-- checkbox que nos permite activar o desactivar la opcion -->
                          <div style="margin-top:15px;">
                              <input style="margin-left:5px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                              &nbsp;&nbsp;Mostrar Contraseña</div><br>
                          </div>
                        </div>
                        <p style="font-size:12px; text-align:center;">¿No tienes una cuenta?<a data-toggle="modal" data-target="#exampleModal" href="exampleModal">&nbsp;Registrate</a></p>

                      <button type="submit" class="btn btn-primary">Iniciar</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>



          <form action="accountsent.php" method="post" enctype="multipart/form-data">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <label for="">Correo electronico</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                    <br>
                    <label for="">Contraseña</label>
                    <input type="password" name="paswd" id="paswd" class="form-control" placeholder="Contraseña">
                    <br>
                    <label for="">Confirmar contraseña</label>
                    <input type="password" name="paswd2" id="paswd2" class="form-control" placeholder="Contraseña">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
















            <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script>
      $(document).ready(function() {
        $('#mostrar_contrasena').click(function () {
          if ($('#mostrar_contrasena').is(':checked')) {
            $('#passwd').attr('type', 'text');
          } else {
            $('#passwd').attr('type', 'password');
          }
        });
      });
</script>
  </body>
</html>