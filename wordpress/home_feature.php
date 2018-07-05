<?php
$db = mysqli_connect("localhost", "magic4", "magic4","wp") or die ("<h1>Error - No connection to MySQL</h1>\n");


if(isset($_POST["submit"]))
			{
				$foodname0 = mysqli_real_escape_string($db,$_POST["food_name"]);
				$foodname1 = mysqli_real_escape_string($db,$_POST["food_name1"]);
				$foodname2 = mysqli_real_escape_string($db,$_POST["food_name2"]);
				{
				$query_energy0 = "SELECT * FROM food
				WHERE FoodID = '$foodname0'";
				$result_energy0 = mysqli_query($db, $query_energy0);
				if (mysqli_num_rows($result_energy0) > 0) 
				{
				echo "<center><h2>Calculate result</center></h2>";
				while($row_energy0 = mysqli_fetch_assoc($result_energy0))
				{
					echo "<center>The energy for ".$row_energy0['FoodName']." is ".$row_energy0['EnergyTaken']." kj</center><br>";
					$first = $row_energy0['EnergyTaken'];
				}
				}
				else{
					echo "There was an error: ";
				}
				}
			    
				$query_energy1 = "SELECT * FROM food
				WHERE FoodID = '$foodname1'";
				$result_energy1 = mysqli_query($db, $query_energy1);
				if (mysqli_num_rows($result_energy1) > 0) 
				{
				while($row_energy1 = mysqli_fetch_assoc($result_energy1))
				{
					echo "<center>The energy for ".$row_energy1['FoodName']." is ".$row_energy1['EnergyTaken']." kj</center><br>";
					$second = $row_energy1['EnergyTaken'];
				}
				}
				else{
					echo "There was an error: ";
				}
			
				$query_energy2 = "SELECT * FROM food
				WHERE FoodID = '$foodname2'";
				$result_energy2 = mysqli_query($db, $query_energy2);
				if (mysqli_num_rows($result_energy2) > 0) 
				{
				while($row_energy2 = mysqli_fetch_assoc($result_energy2))
				{
					echo "<center>The energy for ".$row_energy2['FoodName']." is ".$row_energy2['EnergyTaken']." kj</center><br>";
					$third = $row_energy2['EnergyTaken'];
				}
				}
				else{
					echo "There was an error: ";
				}
			
			$Total = $first + $second +$third ;
			
			echo "<center>Your daily energy taken total is: ".$Total." kj<center>";
			
			
			}
print("<form class = \"submit\" method = \"post\" action = \"index.php \">");


$food_query = "SELECT * FROM food";
			$result0 = mysqli_query($db,$food_query);
			$num_rows_food = mysqli_num_rows($result0);
			$row0 = mysqli_fetch_row($result0);
			
			print("<center><select name=\"food_name\">\n");
			for($a = 0; $a <$num_rows_food; $a++) 
			{       
				print ("<option value = " .$row0[0]. ">".$row0[1]. "</option>\n");
				$row0 = mysqli_fetch_row($result0);
			}
			print("</select> &nbsp;&nbsp;&nbsp;"); 
			
$food_query1 = "SELECT * FROM food";
			$result1 = mysqli_query($db,$food_query1);
			$num_rows_food1 = mysqli_num_rows($result1);
			$row1 = mysqli_fetch_row($result1);
			
			print("<select name=\"food_name1\">\n");
			for($b = 0; $b <$num_rows_food; $b++) 
			{       
				print ("<option value = " .$row1[0]. ">".$row1[1]. "</option>\n");
				$row1 = mysqli_fetch_row($result1);
			}
			print("</select>&nbsp;&nbsp;&nbsp;"); 

$food_query2 = "SELECT * FROM food";
			$result2 = mysqli_query($db,$food_query2);
			$num_rows_food2 = mysqli_num_rows($result2);
			$row2 = mysqli_fetch_row($result2);
			
			print("<select name=\"food_name2\">\n");
			for($c = 0; $c <$num_rows_food; $c++) 
			{       
				print ("<option value = " .$row2[0]. ">".$row2[1]. "</option>\n");
				$row2 = mysqli_fetch_row($result2);
			}
			print("</select>\n"); 			

			print("<br><input type=submit name=submit value=submit />\n");
			print ("</form>\n");
?>