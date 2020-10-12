<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>



    <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">           
                    <div id="fondo">
                        <a href="/"><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:50px; margin-top:-10px;"></a>
                    </div>
                
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            --<div id="global-dos">
                    <div id="haber">
                        <img src="img/avatar.png" width="70px" height="60px">
                    </div>
                </div>
        </button>-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                </a>
            </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item avatar">
                <div id="global-dos">
                    <div id="haber">
                        <img src="img/avatar.png" width="70px" height="60px">
                    </div>
                </div>
            </li>
            </ul>
        </div>
        </nav>
    <!--/.Navbar -->
    <div id="barra">

    </div>

    <!-- Full Page Intro -->
        <div class="view" style="background-image: url('img/hr.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6 mb-5 white-text text-center" style="margin-top:120px;" data-toggle="modal" data-target="#logint">
                        <img src="img/BUSCAR EMPLEO.png" alt="" width="104%" height="auto;">

                        <div id="txt1" class="centered">
                            <h2>Buscar Empleo</h2>
                        </div>
                  </div>
                  <!--Grid column-->

                  <div class="col-md-6 mb-5 white-text text-center" style="margin-top:120px;" data-toggle="modal" data-target="#logincliente">
                        <img src="img/CONTRATAR.png" alt="" width="104%" height="auto">

                        <div id="txt2" class="centered">
                            <h2>Contratar</h2>    
                        </div>
                  </div>




                  <form action="login-trabajador.php" method="post">
                        <!-- Modal -->
                        <div class="modal fade" id="logint" tabindex="-1" role="dialog" aria-labelledby="logintLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" id="dialo">
                            <div class="modal-content" id="conten">
                            <div class="modal-header" id="heade">
                                <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="bod">
                                <!--<label for="">Correo electronico</label><-->
                                <input type="text" name="e-mail" id="e-mail" class="form-control" placeholder="Correo">
                                <br>
                                <!--<label for="">Contraseña</label><-->
                                <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Contraseña">
                                <br>
                                <!--<label for="">Confirmar contraseña</label>
                                <input type="password" name="passwd2" id="passwd2" class="form-control" placeholder="Contraseña"><-->
                                <p style="font-size:15px; text-align:center;">¿No tienes una cuenta?<a style="color: white; font-size:15px" data-toggle="modal" data-target="#select" href="select">&nbsp;Registrate</a></p>
                            </div>
                            <div class="modal-footer" id="foot">
                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button><-->
                                <button type="submit" class="btn btn-success">Iniciar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>




                        <!-- MODAL PARA ELEJIR SI ES EMPRESA O JEFE -->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" id="select" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #e8e8e8;">
                                        <h5 class="modal-title" id="exampleModalLabel">Crear cuenta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="text-align: center;" id="what">
                                        <b class="title" style="font-size: 20px;">¿Qué te describe mejor?</b><br><br>
                                        <div class="form-group" style="display: flex; flex-wrap:wrap;">
                                            <img src="img/3372216.jpg" alt="" width="30%" height="35%" style="margin-left: 10%;">
                                            

                                            <img src="img/2868765.jpg" alt="" width="30%" height="35%" style="margin-left: 18%;">
                                            
                                        </div>
                                        <button data-toggle="modal" data-target="#exampleModal" type="submit" id="autonomo" class="btn btn-info">Autónomo</button>
                                        <button type="submit" class="btn btn-light" data-toggle="modal" id="empresa" data-target="#regempresa">Empresa</button>
                                    </div>
                                    <br>
                                    <br>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- MODAL PARA REGISTRAR EMPRESA -->
                        <form action="registrarempresa.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="regempresa" tabindex="-1" role="dialog" aria-labelledby="logintLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" id="">
                                    <div class="modal-header" id="">
                                        <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php 
                                        $tokenempresa = bin2hex(random_bytes(10 - 10 % 2 / 2));
                                        
                                        ?>

                                        <h5>Indica el tamaño de tu empresa</h5>
                                        
                                        <input type="hidden" name="tokenempresa" value="<?php echo $tokenempresa; ?>">

                                        <!-- Material checked -->

                                        <div class="form-check">

                                            <input type="radio" class="form-check-input" value="microempresa" id="micro" name="size">
                                            <label class="form-check-label" for="micro">Microempresa</label><br>
                                                    
        
                                            <input type="radio" name="size" id="pequeña" value="pequeña" class="form-check-input">
                                            <label class="form-check-label" for="pequeña">Pequeña</label><br>
                                        
                    
                                            <input type="radio" name="size" id="mediana" value="mediana" class="form-check-input">
                                            <label class="form-check-label" for="mediana">Mediana</label><br>

                                            <input type="radio" name="size" id="grande" value="grande" class="form-check-input">
                                            <label for="grande" class="form-check-label">Grande</label>

                                        </div><br>

                                        <label for="nempresa">*Nombre de la empresa</label>
                                        <input type="text" name="nempresa" id="nempresa" placeholder="Empresa" class="form-control" required>
                                        <br>
                                        <label for="correoe">*Correo electrónico</label>
                                        <input type="email" name="correoempresa" id="correoe" class="form-control" placeholder="Correo" required>
                                        <br>
                                        <label for="">Teléfono</label>
                                        <input type="text" name="tel" id="tel" class="form-control" placeholder="Teléfono" required>
                                        <br>
                                        <label for="cp">*Código Postal</label>
                                        <input type="text" name="cp" id="cp" class="form-control" placeholder="Código Postal" required>
                                        <br>
                                        <label for="ciudad">*Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ciudad" required>
                                        <br>
                                        <label for="giro">*Giro</label>
                                        <input type="text" name="giro" id="giro" class="form-control" placeholder="Giro" required>
                                        <br>
                                        <label for="pwdempresa">*Contraseña</label>
                                        <input type="password" name="pwdempresa" id="pwdempresa" class="form-control" placeholder="contraseña" required>
                                        <input type="hidden" name="rol" value="empresa">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="guardarempresa" class="btn btn-success">Guardar</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>






                        <form action="accountsent.php" method="post">
                            <!-- Modal Para registrar un autonomo -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Registrate como autónomo</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php $token = bin2hex(random_bytes(10 - 10 % 2 / 2)); ?>
                                    
                                        <input type="hidden" name="token" value="<?php echo $token; ?>">

                                        <label for="">*Correo electronico</label>
                                        <input type="text" name="e-mail" id="e-mail" class="form-control" placeholder="Correo electrónico" required>
                                        <br>
                                        <label for="">*Contraseña</label>
                                        <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Contraseña" required>
                                        <br>
                                        <label for="">*Confirmar contraseña</label>
                                        <input type="password" name="passwd2" id="passwd2" class="form-control" placeholder="Contraseña" required>
                                        <input type="hidden" name="rol" value="trabajador">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="save" class="btn btn-success">Guardar</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>



                        <!-- FIN DE MODALS BUSCAR EMPLEO <-->


                        <form action="logincliente.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="logincliente" tabindex="-1" role="dialog" aria-labelledby="logintLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" id="dialo">
                                <div class="modal-content" id="conten">
                                <div class="modal-header" id="heade">
                                    <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="bod">
                                    <!--<label for="">Correo electronico</label><-->
                                    <input type="text" name="e-mail" id="e-mail" class="form-control" placeholder="Correo">
                                    <br>
                                    <!--<label for="">Contraseña</label><-->
                                    <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Contraseña">
                                    <br>
                                    <!--<label for="">Confirmar contraseña</label>
                                    <input type="password" name="passwd2" id="passwd2" class="form-control" placeholder="Contraseña"><-->
                                    <p style="font-size:15px; text-align:center;">¿No tienes una cuenta?<a data-toggle="modal" data-target="#registrocliente" href="registrocliente" style="color: white;">&nbsp;Registrate</a></p>
                                </div>
                                <div class="modal-footer" id="foot">
                                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button><-->
                                    <button type="submit" class="btn btn-success">Iniciar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </form>







                        <form action="registrocliente.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="registrocliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="text" name="e-mail" id="e-mail" class="form-control" placeholder="Correo electrónico">
                                    <br>
                                    <label for="">Contraseña</label>
                                    <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Contraseña">
                                    <br>
                                    <label for="">Confirmar contraseña</label>
                                    <input type="password" name="passwd2" id="passwd2" class="form-control" placeholder="Contraseña">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </form>
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
    <!-- Full Page Intro -->





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>