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

if(isset($_POST['finalizar'])){
    $tokenempresa = $_POST['tokenempresa'];
    $nombrefoto = $_FILES['fotoempresa']['name'];
    $archivofoto = $_FILES['fotoempresa']['tmp_name'];
    $rutafoto = '../img/empresas/'.$nombrefoto;
    move_uploaded_file($archivofoto,$rutafoto);
    $nombreido = $_FILES['idoficial']['name'];
    $archivoido = $_FILES['idoficial']['tmp_name'];
    $rutaido = '../img/archivospdf/'.$nombreido;
    move_uploaded_file($archivoido,$rutaido);
    $namecomprobante = $_FILES['comprobante']['name'];
    $archivocom = $_FILES['comprobante']['tmp_name'];
    $rutacom = '../img/archivospdf/'.$namecomprobante;
    move_uploaded_file($archivocom,$rutacom);
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
        $giroempleodiv = $_POST["selectempleodiv"];
    }
    if(isset($_POST["empleocor"])){
        $empleocor = $_POST["empleocor"];
        $empleocorid = '4';
        $giroempleocor = $_POST["selectempleocorp"];
    }
    $desc = $_POST['descripcion'];
    $estado = $_POST['estado'];


    $sql = "CALL completarEmpresa('$tokenempresa','$rutafoto','$rutaido','$rutacom','$desc','$estado')";
    $resultado = mysqli_query($conn, $sql);

    if($ofipopular != ""){
        $insertar_cat = "INSERT INTO categorias(categoria, fkgiro, tokenAccess) VALUES ('$ofipopularid','$giroofipopular','$tokenempresa')";
        $query_cat = mysqli_query($conn, $insertar_cat);
    }
    else if($servprof != ""){
        $insertar_cat2 = "INSERT INTO categorias(categoria, fkgiro, tokenAccess) VALUES ('$servprofid','$giroservprof','$tokenempresa')";
        $query_cat2 = mysqli_query($conn, $insertar_cat2);
    }
    else if($empleodiv != ""){
        $insertar_cat3 = "INSERT INTO categorias(categoria, fkgiro, tokenAccess) VALUES ('$empleodivid','$giroempleodiv','$tokenempresa')";
        $query_cat3 = mysqli_query($conn, $insertar_cat3);
    }
    else if($empleocor != ""){
        $insertar_cat4 = "INSERT INTO categorias(categoria, fkgiro, tokenAccess) VALUES ('$empleocorid','$giroempleocor','$tokenempresa')";
        $query_cat4 = mysqli_query($conn, $insertar_cat4);
    }
    if($resultado){
        session_start();
        $_SESSION['empresa']=$tokenempresa;
        ?>
        <script>
            alert("Registro exitoso");
            window.location.href="miperfil.php";
        </script>
        <?php	
    }
    else{
        echo "No se pudo actualizar :(";
    }

}