<html>
 <head>
  <title>WEB-site of the M.N.T.P Los-Ykt customs</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style>
    .allcars {
    position:relative;
	top:50px;
	right:-500px;
   }
  </style>
 </head>
 <body>
 <div>
      <img src="images/autoallcars.jpg" alt="cars" width="800" height="600" class="allcars">
      <h2 style="position:relative;text-align:center;">Our Cars:</h2>
	  <br>
	  <br>
	<?php
	// Соединяемся, выбираем базу данных VER3

	include('config.php');	
	$link = mysqli_connect($server, $user, $password, $database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	echo '<P></P>';
	
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT car.id_nomer,marka.marka,car.god FROM car INNER JOIN marka ON marka.id_nomer=car.id_nomer';
	$SQLresult = mysqli_query($link,$SQLquery);
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<P>Number of car: %d,MARKA: %s,GOD: %d',$result[0],$result[1],$result[2]);
	}
	// Освобождаем память от результата
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
</div>
<BR>
<br>
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>