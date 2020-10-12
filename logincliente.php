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

$userc = mysqli_real_escape_string($conn, $_POST["e-mail"]);
$pwd = mysqli_real_escape_string($conn, $_POST["passwd"]);
//$passwd=md5($passwd);

session_start();

$_SESSION['usuario'] = $userc;

$sql="SELECT * FROM cuentascliente WHERE email = '$userc' AND pwd = '$pwd'";
$res=$conn->query($sql);
$count=mysqli_num_rows($res);
if($count == 0)
{
    ?>
	               <script type="text/javascript">
	                   alert("Usuario y/o contraseña incorrecto.")
                        window.history.back();
                    </script>
            <?php
}
else
{
                
    $sql1="SELECT id, email, pwd FROM cuentascliente WHERE (email = '$userc' AND pwd = '$pwd')";
    $res1=$conn->query($sql1);
    $count1=mysqli_num_rows($res1);
    if($count1 == 1)
    {

        ?>
	               <script type="text/javascript">
                       alert("Bienvenido");
                        window.location.href="cliente/index.php";
                    </script>
            <?php
                                                            
                                                    
    }
    else
    {
        echo "NO EXISTE";
    }
}   

//cerrar conexion
 mysqli_close($conn);
?>