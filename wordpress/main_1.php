<?php
$db = mysqli_connect("localhost", "magic4", "magic4","wp") or die ("<h1>Error - No connection to MySQL</h1>\n");

print("<form class = \"submit\" method = \"post\" action = \"http://localhost/wordpress/result/\">");
echo "<center> Please select your gender, and your daily intake" ;

$gender_query = "SELECT * FROM gender";
			$result_gender = mysqli_query($db,$gender_query);
			$num_rows_gender = mysqli_num_rows($result_gender);
			$row_gender = mysqli_fetch_row($result_gender);
			print("<center><select name=\"gender\">\n");
			for($x = 0; $x <$num_rows_gender; $x++) 
			{       
				print ("<option value = " .$row_gender[0]. ">".$row_gender[1]. "</option>\n");
				$row_gender = mysqli_fetch_row($result_gender);
			}
			print("</select><br>&nbsp;&nbsp;&nbsp;</br>"); 

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