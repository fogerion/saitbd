<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$id_vid = mysqli_real_escape_string($link, $_POST['id_vid']);
$id_nomer = mysqli_real_escape_string($link, $_POST['id_nomer']);
$date_v = mysqli_real_escape_string($link, $_POST['date_v']);
$date_p = mysqli_real_escape_string($link, $_POST['date_p']);
$date_r = mysqli_real_escape_string($link, $_POST['date_r']);
$id_mech = mysqli_real_escape_string($link, $_POST['id_mech']);

// ÇÀÝÑÊÅÉÏÈÒÜ
// PhPMyAdmin
// ÑÀÊÈËÀ ÂÎÐËÄ
echo '<br>Thanks for your order<br>';
$SQLquery = "INSERT INTO books (id_zakaz, id_vid,id_nomer,date_v,date_p,date_r,id_mech) VALUES ((SELECT IFNULL(max(id_zakaz)+1,1) from (Select id_zakaz from zakaz) as ID), $id_vid,$id_nomer,'$date_v','$date_p','$date_r',$id_mech)";

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New order created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>