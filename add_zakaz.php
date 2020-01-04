<html>
 <head>
  <meta charset="utf-8" />
  <title>WEB-site of the M.N.T.P Los-Ykt customs</title>
  <style>
   ul.hr {
    margin: 10px; /* Обнуляем значение отступов */
    padding: 10px; /* Значение полей */
   }
   ul.hr li {
    display: inline; /* Отображать как строчный элемент */
    margin-right: 30px; /* Отступ слева */
     /* border: 1px solid #000; Рамка вокруг текста */
    padding: 5px; /* Поля вокруг текста */
	top:10px;
	.zakaz {
    position:relative;
	top:50px;
	right:-500px;
   }
  </style>
 </head>
<body>
	<div>
	    <ul class="hr">
		   <li><font size="3" color="gray" face="Arial">+79659942711</font></li>
		   <li><font size="3" color="gray" face="Arial">+79679261865</font></li>
		   <li><font size="3" color="gray" face="Arial">Без выходных:09:00-21:00</font></li>
		   <li><font size="3" color="gray" face="Arial">fogeryndbrdtl@gmail.com</font></li>
	</div>
	
    <div style="position:relative;background-color: #A9A9A9;width:100%;height:100px;top: -20px;">
	    <h1 style="position:relative;text-align:center; top:10px;"><font size="7" color="black" face="cursive,serif">Los-Ykt Customs</font></h1>
	</div>
	<div>
	    <ul class="hr">
		   <li><a href="about.html"><font size="5" color="black" face="fantasy">About us    </font></a></li>
		   <li><a href="allmasters.php"><font size="5" color="black" face="fantasy">Allmasters    </font></a></li>
		   <li><a href="cars.php"><font size="5" color="black" face="fantasy">Cars    </font></a></li>
		   <li><a href="zakaz.php"><font size="5" color="black" face="fantasy">Orders    </font></a></li>
		   <li><a href="services.php"><font size="5" color="black" face="fantasy">Services    </font></a></li>
		   <li><a href="add_car.php"><font size="5" color="black" face="fantasy">Add Car    </font></a></li>
		   <li><a href="add_zakaz.php"><font size="5" color="black" face="fantasy">Add Order    </font></a></li>
		 </ul>
	</div>
	<div>
	    <img src="images/neworder.jpg" alt="xzibit" width="600" height="350" class="zakaz">
	    <h2 style="position:relative;text-align:center;">Add new order.</h2>
			<form action="add_zakaz_form_action.php" method="post">
          		choose a service: 
				<select name="id_vid">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id_vid,name FROM vid_rab';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				</select>
				<br>
				<br>
				your car number:
				<select name="id_nomer">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id_nomer,fio FROM car';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				</select>
				<br>
				<br>
				release date:<input type="text" name="date_v">
          		  	<br>
					<br>
				plane date:<input type="text" name="date_p">
          		  	<br>
					<br>
				real date:<input type="text" name="date_r">
          		  	<br>
					<br>
				choose your mechanic: 
				<select name="id_mech">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id_mech,fio FROM fio';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				</select>
          		  	<br>
					<br>
				<br>
            		  	<input type="submit" value="Add zakaz">
      		</form>	
	</div>
	<div class="fonorder">
	<p></p>
	</div>
	<div style="position:relative;background-color: #A9A9A9;width:100%;height:100px;top: -20px;">
	    <h1 style="position:relative;text-align:center; top:10px;"><font size="3" color="black" face="Arial">Contacts:  +79659942711,<br>+79679261865, +79244668128<br>PMI-18-2@mail.ru<br><br>&copy 2020 M.N.T.P all rights reserved</font></h1>
	</div>
 </body>
</html>