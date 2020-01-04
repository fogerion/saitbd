<html>
 <head>
  <title>WEB-site of the M.N.T.P Los-Ykt customs</title>
  <style>
   .allmasters {
    position:relative;
	top:50px;
	right:-500px;
   }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
    <div>
	    <h2 style="position:relative;text-align:center;">Our masters,they can all:</h2>
	</div>
	    
	<div>
	    <img src="images/allmasters.jpg" alt="forsajteam" width="800" height="600" class="allmasters">
	
	  <br>
	  <br>
	<?php
	// Соединяемся, выбираем базу данных VER3

	include('config.php');	
	$link = mysqli_connect($server, $user, $password, $database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	echo '<P></P>';
	
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT fio.fio,mechanic.razr,mechanic.stage FROM fio INNER JOIN mechanic ON mechanic.id_mech=fio.id_mech';
	$SQLresult = mysqli_query($link,$SQLquery);
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<P>%s, %s,stage: %s </P>',$result[0],$result[1],$result[2]);
	}
	// Освобождаем память от результата
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
    </div>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>