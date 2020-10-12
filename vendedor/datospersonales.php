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
$nombrefotop = $_FILES['fileupp']['name'];
$archivofotop = $_FILES['fileupp']['tmp_name'];
$ruta0 = '../img/usuarios/' . $nombrefotop;
move_uploaded_file($archivofotop, $ruta0);
$phone = $_POST["Tell"];
$correoe = $_POST["correo"];
$ciudad = $_POST["ciudad"];
$ocupacion = $_POST["ocupacion"];
$nombre = $_POST["Nombre"];
$app = $_POST["Ap"];
$apm = $_POST["Am"];
$day = $_POST["Dia"];
$mes = $_POST["Mes"];
$ano = $_POST["Ano"];
$fechanac = $day . '/' . $mes . '/' . $ano;
$rfc = $_POST["RFC"];
$idnumber = $_POST["idnumber"];
$nombrearchivo = $_FILES['id-o']['name']; //contiene el nombre del archivo
$archivoid = $_FILES['id-o']['tmp_name']; //Contiene el archivo.
$ruta = '../img/archivospdf/' . $nombrearchivo; // Path 
move_uploaded_file($archivoid, $ruta); //guardamos la imagen en el servidor
$nombrecomprobante = $_FILES['ido2']['name'];
$archivocomprobante = $_FILES['ido2']['tmp_name']; //Contiene el archivo.
$ruta2 = '../img/archivospdf/'.$nombrecomprobante;
move_uploaded_file($archivocomprobante, $ruta2);
$estado = '2';
$session = $_POST["session"];


$sql= "SELECT correoel, id, nombre, tokenAccess FROM `datospersonales` WHERE correoel = '$correoe'";
$res=$conn->query($sql);
$count=mysqli_num_rows($res);
if($count == 1)
{
    ?>
	               <script type="text/javascript">
	                   alert("ESTA CUENTA YA EXISTE")
                        window.history.back();
                    </script>
            <?php
}

    else
    {
        
                $insertar = "INSERT INTO datospersonales(foto,tel,correoel,ciudad,ocupacion,nombre,app,apm,fechanac,rfc,numid,identificacion,comprobante,estado,tokenAccess) VALUES ('$ruta0','$phone','$correoe','$ciudad','$ocupacion','$nombre','$app','$apm','$fechanac','$rfc','$idnumber','$ruta','$ruta2','$estado','$session')";
                //Ejecutar consulta
                $resul = mysqli_query($conn, $insertar);
                if(!$resul) {
	               echo "error al registrar";
                }                
                else{                                         

                    ?>
                        <script type="text/javascript">
	                        alert("Tus datos serán validados (Esto podría tardar hasta 24 hrs). Favor de rellenar los siguientes formularios.")
						    window.location.href="registro.php";
                        </script>
                        <?php

                    }                    
 
    }
//cerrar conexion
 mysqli_close($conn);

?>