<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$ddname = "test";

$conn myaqli_connect($dbhost, $dbuser, $dbpass, $ddname);
if (!$conn) {
	die("No hay conexión: ".mysqli_connect_error());
}
$nombre = $_POST["txtusuario"];
$pass = $_POST["tctpassword"];

$query = mysqli_query ($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows ($query);

1f($nx ==1) {
    //header ("Location: pagina.html")
    echo "Bienvenido:" .$nombre;
}
else if ($nr == 0)
	echo: "No ingreso";
}

?>
