<?php
session_start();
if(strlen($_SESSION['token']) > 0 OR $_SESSION['token'] != ""){
  #hay session, a continuación serás enviando al sitio de destino:
  
}
else{
  #Si no hay session imprime toda la estructura:
  header('location: ../index.php');
}
$session = $_SESSION['token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'><-->
    


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GOIJOB | Sitio Oficial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css" type="text/css">
    <link rel="icon" type="image/png" href="icon.png" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<!--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet"><--->

    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    
<style>
a:link, a:visited, a:active{
    text-decoration:none;
}


.form-control{
    border-radius:30px;
    width:100%;
    height:50px; 
    border-color:white;     
}
.input-group{
    border-radius:30px;
    width:410px;
    height:50px;      
    margin-left:1%;
    margin-top:-10px;  
   
}


#title{
    width:315px;
    height:40px;
    float:left;
    background-color:#0066b2;
    border-radius:30px;
    margin-left:-30px;
}

#title h3{
    color:white;
    margin-top:8px;
    letter-spacing:2px;
    font-size:20px;    
    text-align: right;
    margin-right:30px;
    font-family: Montserrat Light;
}



</style>
</head>
<body>
    <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                    <div id="fondot">
                        <a href="index.php"><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="cerrarsesion.php">Salir
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        <!--/.Navbar -->

    <div><br></div>


    <div id="title">
            <h3>Datos personales</h3>
    </div> 

    <div><br><br><br></div>	



<div class="container">
    <form action="datospersonales.php" method="POST" enctype="multipart/form-data">
        <div class="parent">



            <div id="parte1" class="col-sm-3">
                <br>
                <div id="fotoperfil">


                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileupp" name="fileupp">
                        <i class="fa fa-plus-circle fa-3x" aria-hidden="true" id="pr"></i>
                    </div>


                </div>
                <div id="tel">
					<input name="Tell" id="Tell" type="text" placeholder="Tel" class="form-control" required>
                    <div><p></p></div>
                    <input name="correo" id="correo" type="text" placeholder="Correo" class="form-control" required>
                    <div><p></p></div>
                    <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad" class="form-control" required>
                    <div><p></p></div>
                    <input name="ocupacion" id="ocupacion" type="text" placeholder="Ocupacion" class="form-control" required>
                </div>

                
            </div>



            <div id="parte2" class="col-sm-8">
                <div id="pdos">
                    <input name="Nombre" type="text" placeholder="Nombre" class="form-control" required>
                    <div><p></p></div>
                    <input name="Ap" type="text" placeholder="Primer apellido" class="form-control" required>
                    <div><p></p></div>
                    <input name="Am" type="text" placeholder="Segundo apellido" class="form-control" required>
                    <div><p></p></div>
                    <div id="date" class="form-check form-check-inline">
                        <input name="Dia" type="text" placeholder="dd" class="form-control" required>
                        <input name="Mes" type="text" placeholder="mm" class="form-control" required>
                        <input name="Ano" type="text" placeholder="aaaa" class="form-control" required>
                    </div>
                    <div><p></p></div>
                    <input name="RFC" type="text" placeholder="RFC" class="form-control" required>
                    <div><p></p></div>
                    <input name="idnumber" type="text" placeholder="Numero de identificación" class="form-control" required>

                    <input type="hidden" name="session" class="form-control" value="<?php echo $session; ?>">

                    <p></p>
                    <div id="ids">

                        <div class="input-group">
                            <div class="custom-file" id="id-o">
                                <input type="file" onclick="change(id);" class="custom-file-input" id="id-o" name="id-o" required>
                            </div>
                            <div id="txt">
                                <i class="fa fa-cloud-upload fa-2x" aria-hidden="true" id="fu"></i>
                                <p id="tfu">Identificación</p>
                            </div>
                        </div>

                        
                        <div class="input-group">
                            <div class="custom-file" id="ido2">
                                <input type="file" onclick="change(id);" class="custom-file-input" id="ido2" name="ido2" required>
                            </div>
                            <div id="txt2">
                                <i class="fa fa-cloud-upload fa-2x" aria-hidden="true" id="fu2"></i>
                                <p id="tfu2">Comprobante<br>de domicilio</p>
                            </div>
                        </div>
                    </div>
                    
                        <div id="validate">
                            <button id="validar" name="validar" type="submit" class="btn btn-primary">Validar</button>
                        </div> 
                </div>
            </div>

        </div>
            

    </form>  
    


        <div id="title2">
            <h3>Datos académicos</h3>
        </div><br><br>





        
    <form action="multipost.php" method="post">



            <div class="parentacademicos">
                    <!--<div id="Primaria">    
                        <input id="primaria" type="text" class="btn" name="primaria" value="" placeholder="Primaria" onclick="changeColor(id)">
                        <div class="input-group" id="fnpr">
                            <input type="text" class="form-control" placeholder="Nombre de institución" name="nomprim" id="nameinstitucion" required>
                        </div>
                    </div>-->
                    <div class="form-group row">
                        <div id="Primaria">
                            <input id="primaria" type="text" class="btn" name="primaria" value="" placeholder="Primaria" onclick="changeColor(id)">
                        </div>
                            <div class="col-sm-8" id="fnpr">
                                <input type="text" class="form-control" placeholder="Nombre de institución" name="nomprim" id="nameinstitucion" required>
                            </div>
                               
                    </div>

                    <div class="form-group row">
                        <div id="Secundaria">                     
                            <input id="secu" class="btn" type="text" name="secu" value="" placeholder="Secundaria" onclick="changeColor(id)">
                        </div> 
                            <div class="col-sm-8" id="fnse">
                                <input type="text" class="form-control" placeholder="Nombre de institución" name="isecu" id="isecu" required>
                            </div>
                        
                    </div>
                    

                    <div class="form-group row">
                        <div id="Bachillerato">
                            <input id="bachiller" type="text" class="btn" name="bachiller" value="" placeholder="Bachillerato" onclick="changeColor(id)">
                        </div>    
                            <div class="col-sm-8" id="fnba">
                                <input type="text" class="form-control" placeholder="Nombre de institución" name="inputbach">
                            </div>
                        
                    </div>
            

                    <div class="form-group row">
                        <div id="Universidad">
                            <input id="uni" type="text" class="btn" name="uni" value="" placeholder="Universidad" onclick="changeColor(id)">
                        </div>        
                            <div class="col-sm-8" id="fnun">
                                <input type="text" class="form-control" placeholder="Nombre de institución" name="inputuni">
                            </div>

                    </div>

                    

                    <div class="form-group row">
                        <div id="Posgrado">
                            <input id="posgrado" type="text" class="btn" name="posgrado" value="" placeholder="Posgrado" onclick="changeColor(id)">
                        </div>        
                            <div class="col-sm-8" id="fnpo">
                                <input type="text" class="form-control" placeholder="Nombre de institución" name="inputpos">
                            </div>
                        
                    </div>

                   

                    <input type="hidden" name="iduseracademico" class="form-control" value="<?php echo $session; ?>">
            </div>


            <div id="titletres">
                <h3>Idiomas</h3>
            </div>

            <div class="parentidioma">
                <div id="fondoidioma">
                    <br><br>
                    <div id="espanol">
                        <input id="spanishh" type="text" class="btn" name="spanish" placeholder="Español" value="" onclick="idioma(id)">
                    </div>

                    <div id="ingles">
                        <input id="englishh" type="text" class="btn" name="english" placeholder="Inglés" value="" onclick="idioma(id)">
                    </div>

                    <div id="chino">
                        <input id="chinesee" type="text" class="btn" name="chinese" placeholder="Chino" value="" onclick="idioma(id)">
                    </div>

                    <div id="aleman">
                    <input id="germann" type="text" class="btn" name="german" placeholder="Alemán" value="" onclick="idioma(id)">
                    </div>

                    <div id="frances">
                        <input id="frenchh" type="text" class="btn" name="french" placeholder="Francés" value="" onclick="idioma(id)">
                    </div>

                    <div id="italiano">
                    <input id="italyy" type="text" class="btn" name="italy" placeholder="Italiano" value="" onclick="idioma(id)">
                    </div>

                    <div id="otro">
                    <input id="otherr" type="text" class="btn" name="other" placeholder="Otro" value="" onclick="idioma(id)">
                    </div>
                </div>

            </div>






                    <div id="titlecuatro">
                        <h3>Experiencia laboral</h3>
                    </div>
                    <div>
                        <br><br><br><p><br></p><br><p></p>
                    </div>


                   <div>


                        <div class="form-group row">
                            <p hidden><label for="colFormLabel" type="hidden" class="col-sm-2 col-form-label">Empresa</label></p>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="empresa" placeholder="Empresa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p hidden><label type="hidden" for="colFormLabel" class="col-sm-2 col-form-label">Puesto</label></p>
                            <div class="col-sm-10">
                                <input type="text" name="puesto" class="form-control" placeholder="Puesto">
                            </div>
                        </div>


                        <div class="form-group row">
                            <p hidden><label for="colFormLabel" class="col-sm-2 col-form-label">Duración</label></p>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="duracion" placeholder="Duración">
                            </div>
                        </div>

                            <div class="form-group row" style="flex-direction:row;">
                                <p hidden><label for="" class="col-sm-2 col-form-label">DE:</label></p>
                                <div class="col-sm-10">
                                    <input name="inicio" type="date" class="form-control" placeholder="DE:">
                                </div>
                                <p hidden><label for="" class="col-sm-2 col-form-label">A:</label></p>
                                <div class="col-sm-10">
                                    <input name="fin" type="date" class="form-control">
                                </div>
                            </div>
                               
                            
                        <div class="form-group row">
                            <p hidden><label class="col-sm-2 col-form-label">Descripción</label></p>
                            <div class="col-sm-10">
                                <textarea name="desc" class="md-textarea form-control" placeholder="Descripción del puesto" rows="5"></textarea>
                            </div>
                        </div>

                        <div id="plus" class="col-md-8">
                            <button class="btn btn-default" id="pluss"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></button>
                        </div>
                        
                </div>
                        

                        
                            <div id="fondoexperiencia2"><br><br><br>
                                    <div class="form-group row">
                                        <p hidden><label for="colFormLabel" type="hidden" class="col-sm-2 col-form-label">Empresa</label></p>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="empresa2" placeholder="Empresa">
                                        </div>
                                    </div>

                                        <div class="form-group row">
                                            <p hidden><label type="hidden" for="colFormLabel" class="col-sm-2 col-form-label">Puesto</label></p>
                                            <div class="col-sm-10">
                                                <input type="text" name="puesto2" class="form-control" placeholder="Puesto">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <p hidden><label for="colFormLabel" class="col-sm-2 col-form-label">Duración</label></p>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="duracion2" placeholder="Duración">
                                            </div>
                                        </div>

                                            <div class="form-group row" style="flex-direction:row;">
                                                <p hidden>label for="" class="col-sm-2 col-form-label">DE:</label></p>
                                                <div class="col-sm-10">
                                                    <input name="start" type="date" class="form-control" placeholder="DE:">
                                                </div>
                                                <p hidden><label for="" class="col-sm-2 col-form-label">A:</label></p>
                                                <div class="col-sm-10">
                                                    <input name="end" type="date" class="form-control">
                                                </div>
                                            </div>
                                            
                                            
                                        <div class="form-group row">
                                            <p hidden><label class="col-sm-2 col-form-label">Descripción</label></p>
                                            <div class="col-sm-10">
                                                <textarea name="desc2" placeholder="Descripción del puesto" class="md-textarea form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    
                                        <div id="plus2" class="col-md-8">
                                            <button class="btn btn-default" id="pluss2"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></button>
                                        </div>
                            
                            </div>





                


                        <div id="fondoexperiencia3"><br><br><br>
                            <div class="form-group row">
                                <p hidden><label for="colFormLabel" type="hidden" class="col-sm-2 col-form-label">Empresa</label></p>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="empresa3" placeholder="Empresa">
                                    </div>
                            </div>

                                        <div class="form-group row">
                                            <p hidden><label type="hidden" for="colFormLabel" class="col-sm-2 col-form-label">Puesto</label></p>
                                            <div class="col-sm-10">
                                                <input type="text" name="puesto3" class="form-control" placeholder="Puesto">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <p hidden><label for="colFormLabel" class="col-sm-2 col-form-label">Duración</label></p>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="duracion3" placeholder="Duración">
                                            </div>
                                        </div>

                                            <div class="form-group row" style="flex-direction:row;">
                                                <p hidden>label for="" class="col-sm-2 col-form-label">DE:</label></p>
                                                <div class="col-sm-10">
                                                    <input name="inicio3" type="date" class="form-control" placeholder="DE:">
                                                </div>
                                                <p hidden><label for="" class="col-sm-2 col-form-label">A:</label></p>
                                                <div class="col-sm-10">
                                                    <input name="fin3" type="date" class="form-control">
                                                </div>
                                            </div>
                                            
                                            
                                        <div class="form-group row">
                                            <p hidden><label class="col-sm-2 col-form-label">Descripción</label></p>
                                            <div class="col-sm-10">
                                                <textarea name="desc3" placeholder="Descripción del puesto" class="md-textarea form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    
                                        <div id="plus3" class="col-md-8">
                                            <button class="btn btn-default" id="pluss3"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></button>
                                        </div>


                        </div>
<br><br>

                            <div id="fondoexperiencia4"><br><br><br>
                                    <div class="form-group row">
                                        <p hidden><label for="colFormLabel" type="hidden" class="col-sm-2 col-form-label">Empresa</label></p>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="empresa4" placeholder="Empresa">
                                        </div>
                                    </div>

                                        <div class="form-group row">
                                            <p hidden><label type="hidden" for="colFormLabel" class="col-sm-2 col-form-label">Puesto</label></p>
                                            <div class="col-sm-10">
                                                <input type="text" name="puesto4" class="form-control" placeholder="Puesto">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <p hidden><label for="colFormLabel" class="col-sm-2 col-form-label">Duración</label></p>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="duracion4" placeholder="Duración">
                                            </div>
                                        </div>

                                            <div class="form-group row" style="flex-direction:row;">
                                                <p hidden>label for="" class="col-sm-2 col-form-label">DE:</label></p>
                                                <div class="col-sm-10">
                                                    <input name="inicio4" type="date" class="form-control" placeholder="DE:">
                                                </div>
                                                <p hidden><label for="" class="col-sm-2 col-form-label">A:</label></p>
                                                <div class="col-sm-10">
                                                    <input name="fin4" type="date" class="form-control">
                                                </div>
                                            </div>
                                            
                                            
                                        <div class="form-group row">
                                            <p hidden><label class="col-sm-2 col-form-label">Descripción</label></p>
                                            <div class="col-sm-10">
                                                <textarea name="desc4" placeholder="Descripción del puesto" class="md-textarea form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    
                                        <!--<div id="plus4" class="col-md-8">
                                            <button class="btn btn-default" id="pluss4"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></button>
                                        </div>-->
                            
                            </div>

            



        <div>
            <br><br><br><br><br>
        </div>

            <div id="titlecinco">
                <h3>Categorias</h3>
            </div>
            <br><br><br>


            <div id="fondocat2">
                <p>Elije la(s) categoria(s) donde podrán encontrarte</p>
                <div id="cir">                                    
                    <div id="ofipopular">
                        <input id="oficiopopular" type="text" class="btn" placeholder="Oficios populares" name="ofipopular" value="" onclick="cat(id);">
                    </div>

                    <div id="servprofesional">
                        <input id="servprof" type="text" class="btn" name="servprof" placeholder="Servicios profesionales" value="" onclick="cat(id);">
                    </div>

                    <div id="empleodiverso">
                        <input id="empleodiv" type="text" class="btn" name="empleodiv" placeholder='Empleos diversos' value="" onclick="cat(id);">
                    </div>

                    <div id="empleocorp">
                        <input id="empleocor" type="text" class="btn" name="empleocor" placeholder="Empleos corporativos" value="" onclick="cat(id);">
                    </div>
                </div>


                 


            </div>
            <div id="selofpr">
                    <select class="browser-default custom-select custom-select-lg mb-3" name="selectoficios">
                    <?php   
                    $conection=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                    mysqli_set_charset($conection,"UTF8");
                    $sql = 'SELECT id, nombre from giros where fkcat = 1'; 
                    $result = mysqli_query($conection, $sql);
                    $option = '';
                    while($mostrar = mysqli_fetch_array($result))
                    {
                        ?>	
                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre']; ?></option>
                        <?php
                    }
                        mysqli_free_result($result); 
                        ?>       
                    </select> 
                </div>

                <div id="selservpr">
                    <select class="browser-default custom-select custom-select-lg mb-3" name="selectservprof"> 
                    <?php
                    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                    mysqli_set_charset($conection,"UTF8");
                    $sql = 'SELECT id, nombre from giros where fkcat=2'; 
                    $result = mysqli_query($conn, $sql);
                    $option = '';
                    while($mostrar = mysqli_fetch_array($result))
                    {
                        ?>	
                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre']; ?></option>
                        <?php
                    }
                        mysqli_free_result($result); 
                        ?>       
                    </select> 
                </div>  
            <div id="btn-guardar">
                <button type="submit" name="submitForm" class="btn btn-primary" id="submitForm">Guardar</button>
            </div>
    </form>
</div>








<div>
    <br><br><br>
</div>


    <script src="js/active.js"></script>
    <script src="js/subform.js"></script>
    <script src="js/placeholdercat.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    </body>
    </html>