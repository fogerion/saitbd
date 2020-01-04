<html>
 <head>
  <title>WEB-site of the M.N.T.P Los-Ykt customs</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style>
    .allservices {
    position:relative;
	top:50px;
	right:-500px;
   }
  </style>
 </head>
 <body>
    <div>
    <img src="images/services.jpg" alt="services" width="800" height="600" class="allservices">
    <h2 style="position:relative;text-align:center;">Thats all we can do:</h2>
	<br>
	<br>
	<?php
	// Соединяемся, выбираем базу данных VER3

	include('config.php');	
	$link = mysqli_connect($server, $user, $password, $database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	echo '<P></P>';
	
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT vid_rab.name FROM vid_rab';
	$SQLresult = mysqli_query($link,$SQLquery);
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<P>%s',$result[0]);
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