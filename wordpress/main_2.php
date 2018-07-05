<?php

$db = mysqli_connect("localhost", "magic4", "magic4","wp") or die ("<h1>Error - No connection to MySQL</h1>\n");



if(isset($_POST["submit"]))
			{
				$foodname0 = mysqli_real_escape_string($db,$_POST["food_name"]);
				$foodname1 = mysqli_real_escape_string($db,$_POST["food_name1"]);
				$foodname2 = mysqli_real_escape_string($db,$_POST["food_name2"]);
				$gender = mysqli_real_escape_string($db,$_POST["gender"]);
				
				
				{
				$query_energy0 = "SELECT * FROM food
				WHERE FoodID = '$foodname0'";
				$result_energy0 = mysqli_query($db, $query_energy0);
				if (mysqli_num_rows($result_energy0) > 0) 
				{
				echo "<center><h2>Calculate result</center></h2>";
				while($row_energy0 = mysqli_fetch_assoc($result_energy0))
				{
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
					$third = $row_energy2['EnergyTaken'];
				}
				}
				else{
					echo "There was an error: ";
				}
			
			$Total = $first + $second +$third ;
			
			echo "<center>Your daily energy taken total is: ".$Total."kj</center>";
			
			if($gender == 2 )
			{			
				if($Total >= 1500 && $Total < 1800)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 1
								AND gymID = 1";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				
				}
				
				else if($Total >= 1800 && $Total < 2300)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 2
								AND gymID = 2";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 2300 && $Total < 3000)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 6
								AND gymID = 6";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 3000 && $Total < 4000)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 3
								AND gymID = 3";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 4000 && $Total < 6500)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 7
								AND gymID = 7";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 6500)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 5
								AND gymID = 5";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else
				{
					echo "<h2><center>Your E-health Life Plan</h2>";
					echo "<h3><center>You don't need exercises today, just keep healthy diet~</h3>";
				}
				
								
				
			}
			
			else if($gender == 1)
			{
				
				if($Total >= 1500 && $Total < 1800)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 4
								AND gymID = 4";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				
				}
				
				else if($Total >= 1800 && $Total < 2300)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 2
								AND gymID = 2";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 2300 && $Total < 3000)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 3
								AND gymID = 3";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 3000 && $Total < 4000)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 1
								AND gymID = 3";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 4000 && $Total < 6500)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 7
								AND gymID = 7";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else if($Total >= 6500)
				{
					$suggest_query0 = "SELECT * FROM exercise, gym
								WHERE exerciseID = 5
								AND gymID = 5";
					$result_suggest_guery0 = mysqli_query($db, $suggest_query0)
					or die ("Error - query could not be executed - Error 1\n");	
					echo "<h2><center>Your E-health Life Plan</h2>";
					while($row_suggest_guery0 = mysqli_fetch_assoc($result_suggest_guery0))
					{
					echo "<fieldset id = plan>";
					echo "<center>Your customized work out plan is " .$row_suggest_guery0['exercise_name'] . "</center>";
					echo "<center><img src='http://localhost/wordpress/wp-content/uploads/2017/09/".$row_suggest_guery0['exercise_image']."' height='200' width='450'/></center><br>";
					echo "<b>Expected Consumed Energy: </b>" .$row_suggest_guery0['exercise_energy']. " kj<br><br>";
					echo "<b>Exercise Discription: </b>" . $row_suggest_guery0['exercise_describe'] . "<br><br>"; 					
					echo "<b>Recommended Gym: </b>" .$row_suggest_guery0['gym_name']. "<br><br>";
					echo "<b>Gym Location: </b>" .$row_suggest_guery0['gym_location']. "<br><br>";
					echo "<b>Gym Discription: </b>" .$row_suggest_guery0['gym_describe']. "<br><br>";					
					echo "</fieldset>";
					}
				}
				
				else
				{
					echo "<h2><center>Your E-health Life Plan</h2>";
					echo "<h3><center>You don't need exercises today, just keep healthy diet~</h3>";
				}
			}
						
		}

?>