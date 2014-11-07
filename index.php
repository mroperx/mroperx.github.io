<?php

ini_set('dsplay_errors', 'On');

// Create connection and chooses the database
$user = 'root';
$password = 'root';
$db = 'schools';
$host = 'localhost';
$port = 80;

$conn = mysqli_connect($host, $user, $password);

// Check connection
if (!$conn)
{
  echo "Connection error: " . mysqli_connect_error();
}
else 
{
  echo "Connection successful <br>";
}
//choose Database
mysqli_select_db($conn, "schools");

//Quering the database, testing for results and printing/displaying the results
$res = mysqli_query ($conn, "select teacher_id, first_name, last_name from `TEACHERS`");
$row = mysqli_fetch_row($res);

// while ($row = mysqli_fetch_row ($res))
// {
// 	print_r($row); // 0->teacher_id, 1->first_name, 2->last_name
// 	echo "<br>"; 
// }



echo '<table>
		<tr>
			<th>Student ID</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>';

$year1Students = mysqli_query($conn, "select student_id, first_name, last_name from `Students` where year_group=1");


while ($row2 = mysqli_fetch_row($year1Students))
{
	echo 
		'<tr>
			<td>'.$row2[0].'</td> 
			<td>'.$row2[1].'</td>
			<td>'.$row2[2].'</td>
		</tr>'; 
}
echo '</table>';
?>