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

$usern = mysqli_real_escape_string($conn, $_POST["e-mail"]);
$passwd = mysqli_real_escape_string($conn, $_POST["passwd"]);
//$passwd=md5($passwd);


$sql="SELECT * FROM cuentasadmin WHERE email = '$usern' AND passwd = '$passwd'";
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
                
    $sql1="SELECT id, email, passwd FROM cuentasadmin WHERE (email = '$usern' AND passwd = '$passwd')";
    $res1=$conn->query($sql1);
    $count1=mysqli_num_rows($res1);
    if($count1 == 1)
    {
        session_start();

        $_SESSION['email'] = $usern;
        header("Location:cpanel.php");
    }
    else
    {
        echo "NO EXISTE";
    }
}   

//cerrar conexion
 mysqli_close($conn);
?>