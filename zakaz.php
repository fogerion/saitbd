<html>
 <head>
  <title>WEB-site of the M.N.T.P Los-Ykt customs</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
 <div>
     <h2 style="position:relative;text-align:center;">All orders:</h2>
 </div>
 <div>
     <img src="images/orders.jpg" alt="cars" width="800" height="600" >
 </div>
 <div>
	<?php
	printf('<P>Orders:</P>');
	// Соединяемся, выбираем базу данных VER3

	include('config.php');	
	$link = mysqli_connect($server, $user, $password, $database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	echo '<P></P>';
	echo('<P>CAR ID:&emsp;&emsp;&emsp;Type of work:&emsp;&emsp;&emsp;date of issue:&emsp;&emsp;&emsp;planned date:&emsp;&emsp;&emsp;real date:&emsp;&emsp;&emsp;master:<P>');
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT car.id_nomer,vid_rab.name,zakaz.date_v,zakaz.date_p,zakaz.date_r,fio.fio FROM car INNER JOIN zakaz ON car.id_nomer=zakaz.id_nomer INNER JOIN vid_rab ON zakaz.id_vid=vid_rab.id_vid INNER JOIN mechanic ON mechanic.id_mech=zakaz.id_mech INNER JOIN fio ON fio.id_mech=mechanic.id_mech';
	$SQLresult = mysqli_query($link,$SQLquery);
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('&emsp;%d&emsp;&emsp;&emsp;%s&emsp;&emsp;%s&emsp;&emsp;&emsp;&emsp;%s&emsp;&emsp;&emsp;&emsp;%s&emsp;&emsp;&emsp;%s </P>',$result[0],$result[1],$result[2],$result[3],$result[4],$result[5]);
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