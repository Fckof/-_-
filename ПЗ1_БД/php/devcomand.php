<?php 
	$userRoot = "root";
	$passRoot = "root";
	$servername="localhost";
	$database="gamedev";

$conn = new mysqli($servername, $userRoot, $passRoot, $database) or die("Не подрубилось...");

$result=$conn->query("SELECT * FROM `команда разработчиков`");

if (count($result)==0){
		echo "Нет записей";
	}

print "<table border='1' cellpaddind='10' cellspacing='10' style='color:black;font-size:25px;margin:30px auto;'><th>ID разработчика</th><th>Название</th><th>Дата начала работы</th>";

while ($row=$result->fetch_assoc()) {
		print "<tr><td>".$row["ID разработчика"]."</td><td>".$row["Название"]."</td><td>".$row["Дата начала работы"]."</td></tr>";
	}

print "</table>";

$conn->close();
 ?>