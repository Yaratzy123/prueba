<html>
<body>

<?php
echo "<h1> Informacion extraida de formulario con PHP </h1>";
$nombre= $_POST['nombre'];
echo "Nombre: ". $nombre."<br>";
$apellidos= $_POST['apellidos'];
echo "Apellidos: ". $apellidos."<br>";
$edad= $_POST['edad'];
echo "Edad: ". $edad."<br>";
$sexo= $_POST['sexo' ];
echo "Sexo: ". $sexo."<br>";
$peli= $_POST['pelicula'];
echo "Pelicula:  ". $peli."<br>";
$opinion= $_POST['opinion'];
echo "Opinion: ". $opinion."<br>";
?>

</body>
</html>