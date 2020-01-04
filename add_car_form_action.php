<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$id_nomer = mysqli_real_escape_string($link, $_POST['id_nomer']);
$fio = mysqli_real_escape_string($link, $_POST['fio']);
$god = mysqli_real_escape_string($link, $_POST['god']);
$marka = mysqli_real_escape_string($link, $_POST['marka']);
// ÇÀÝÑÊÅÉÏÈÒÜ
// PhPMyAdmin
// ÑÀÊÈËÀ ÂÎÐËÄ
echo 'Thanks for add your car';
$SQLquery = "INSERT INTO car (id_nomer, fio, marka, god) VALUES ($id_nomer,'$fio','$marka',$god)";


if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New car created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>