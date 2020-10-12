<?php
$servername = "fdb29.awardspace.net";
$username = "3519580_goijob";
$password = "GOIJOB2020";
$dbname = "3519580_goijob";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
session_start();


if(isset($_POST["submitForm"])){
    $nivprimaria = $_POST["primaria"];
    $nprimaria = $_POST["nomprim"];
    $nivsecu = $_POST["secu"];
    $nsecu = $_POST["isecu"];
    $nivbach = $_POST["bachiller"];
    $nbach = $_POST["inputbach"];
    $nivuni = $_POST["uni"];
    $nuni = $_POST["inputuni"];
    $nivposgrado = $_POST["posgrado"];
    $nposgrado = $_POST["inputpos"];
    $iduseraca = $_POST["iduseracademico"];
    //POST IDIOMAS
    $espanol = $_POST["spanish"];
    $ingles = $_POST["english"];
    $chino = $_POST["chinese"];
    $aleman = $_POST["german"];
    $frances = $_POST["french"];
    $italia = $_POST["italy"];
    $otro = $_POST["other"];
    //POST EXPERIENCIA LABORAL
    $empresa = $_POST["empresa"];
    $puesto = $_POST["puesto"];
    $duracion = $_POST["duracion"];
    $inicio = $_POST["inicio"];
    $fin = $_POST["fin"];
    $descrip = $_POST["desc"];
    $empresa2 = $_POST["empresa2"];
    $puesto2 = $_POST["puesto2"];
    $duracion2 = $_POST["duracion2"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $descrip2 = $_POST["desc2"];
    if(isset($_POST["ofipopular"])){
        $ofipopular = $_POST["ofipopular"];
        $ofipopularid = '1';
        $giroofipopular = $_POST["selectoficios"];
    }
    if(isset($_POST["servprof"]))
    {
        $servprof = $_POST["servprof"];
        $servprofid='2';
        $giroservprof = $_POST["selectservprof"];
    }
    if(isset($_POST["empleodiv"])){
    $empleodiv = $_POST["empleodiv"];
    $empleodivid = '3';
    }
    if(isset($_POST["empleocor"])){
    $empleocor = $_POST["empleocor"];
    $empleocorid = '4';
    }
    $empresa3 = $_POST["empresa3"];
    $puesto3 = $_POST["puesto3"];
    $duracion3 = $_POST["duracion3"];
    $inicio3 = $_POST["inicio3"];
    $fin3 = $_POST["fin3"];
    $desc3 = $_POST["desc3"];
    $empresa4 = $_POST["empresa4"];
    $puesto4 = $_POST["puesto4"];
    $duracion4 = $_POST["duracion4"];
    $inicio4 = $_POST["inicio4"];
    $fin4 = $_POST["fin4"];
    $desc4 = $_POST["desc4"];

    $sql= "SELECT id, tokenAccess FROM `datosacademicos` WHERE tokenAccess = '$iduseraca'";
    $res=$conn->query($sql);
    $count=mysqli_num_rows($res);
    if($count == 1)
    {
        ?>
                    <script type="text/javascript">
                        alert("Este usuario ya ha registrado su información");
                        window.history.back();
                    </script>
                <?php
                mysqli_close($conn);
    }

    else if($count == 0)
    {
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");
        
                $insertar = "INSERT INTO datosacademicos(niveluno,instprimaria,niveldos,instsecundaria,niveltres,instbachiller,nivelcuatro,instuni,nivelcinco,instposgrado,tokenAccess) VALUES ('$nivprimaria','$nprimaria','$nivsecu','$nsecu','$nivbach','$nbach','$nivuni','$nuni','$nivposgrado','$nposgrado','$iduseraca')";
                //Ejecutar consulta
                $resul = mysqli_query($conn, $insertar);

                $insertar_idioma="INSERT INTO idioma(idiomauno,idiomados,idiomatres,idiomacuatro,idiomacinco,idiomaseis,idiomasiete, tokenAccess) VALUES ('$espanol','$ingles','$chino','$aleman','$frances','$italia','$otro','$iduseraca')";
                $queryidioma = mysqli_query($conn, $insertar_idioma);

                $insertar_exp = "INSERT INTO empleos(empresa,puesto,duracion,inicio,fin,descripcion,tokenAccess) VALUES ('$empresa','$puesto','$duracion','$inicio','$fin','$descrip','$iduseraca')";
                $queryexp = mysqli_query($conn, $insertar_exp);

                if($empresa2 != ""){
                    $insertar_exp2 = "INSERT INTO empleos(empresa,puesto,duracion,inicio,fin,descripcion,tokenAccess) VALUES ('$empresa2','$puesto2','$duracion2','$start','$end','$descrip2','$iduseraca')";
                    $queryexp2 = mysqli_query($conn, $insertar_exp2);


                    if($empresa3 !=""){
                        $insert_exp3 = "INSERT INTO empleos(empresa,puesto,duracion,inicio,fin,descripcion,tokenAccess) VALUES ('$empresa3','$puesto3','$duracion3','$inicio3','$fin3','$desc3','$iduseraca')";
                        $queryexp3 = mysqli_query($conn, $insert_exp3);


                        if($empresa4 !=""){
                            $insert_exp4 = "INSERT INTO empleos(empresa,puesto,duracion,inicio,fin,descripcion,tokenAccess) VALUES('$empresa4','$puesto4','$duracion4','$inicio4','$fin4','$desc4','$iduseraca')";
                        }
                    }
                }
                if($ofipopular != ""){
                    $insertar_cat = "INSERT INTO categorias(categoria, fkgiro, tokenAccess) VALUES ('$ofipopularid','$giroofipopular','$iduseraca')";
                    $query_cat = mysqli_query($conn, $insertar_cat);
                }
                else if($servprof != ""){
                    $insertar_cat2 = "INSERT INTO categorias(categoria, fkgiro, tokenAccess) VALUES ('$servprofid','$giroservprof','$iduseraca')";
                    $query_cat2 = mysqli_query($conn, $insertar_cat2);
                }
                else if($empleodiv != ""){
                    $insertar_cat3 = "INSERT INTO categorias(categoria, tokenAccess) VALUES ('$empleodivid','$iduseraca')";
                    $query_cat3 = mysqli_query($conn, $insertar_cat3);
                }
                else if($empleocor != ""){
                    $insertar_cat4 = "INSERT INTO categorias(categoria, tokenAccess) VALUES ('$empleocorid','$iduseraca')";
                    $query_cat4 = mysqli_query($conn, $insertar_cat4);
                }
                

                if(!$resul) {
	               echo "Error al registrar datos académicos.";
                }
                else{ 
                        $_SESSION['token'] = $iduseraca;
                    ?>
                       <!DOCTYPE html>
                       <html lang="en">
                       <head>
                       <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <meta name="description" content="">
                        <meta name="author" content="">
                        <title>GOIJOB | Sitio Oficial</title>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                        <link rel="stylesheet" href="css/registro.css">
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

                       </head>


                       <body>
                       <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                    <div id="fondot">
                        <a href=""><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                    </div>

            </nav>
        <!--/.Navbar -->
        <div id="barra">   
    </div>
    <div><br></div>

                            <div id="barra"></div>
                            <div class="container">
                                <div></div>
                                <img src="img/4141223.jpg" alt="" width="40%" height="40%" style="margin-left: 29%;">
                                <br>
                                    <div class="title" style="text-align: center;">
                                            <h2>¡Felicidades! Ya estás registrado</h2>

                                    </div>
                                <div>
                                    <br>
                                </div>
                                <div id="btn" style="margin-left:42%">
                                    <a href="miperfil.php"><button type="submit" class="btn btn-primary">Ir a mi perfil</button></a>

                                </div>
                                <div class="footer">
<br>
                                </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                       </body>
                       </html>
                        <?php
                                                            
                }
                                      
 
    }
}
//cerrar conexion
 mysqli_close($conn);

?>