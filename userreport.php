<?php
	//make connection
	mysql_connect('localhost', 'username', 'password');
	//select database
	mysql_select_db('registration');
	//select the registered users in decending order
	$sql = "SELECT * FROM USERS ORDER BY register_date DESC";
	$records = mysql_query($sql);
?>

<html>
<head>
	<title>Display Students</title>
</head>
<body>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address1</th>
			<th>Address2</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			<th>Country</th>
			<th>Date</th>
		</tr>
		<?php
			//display the users of in the MySQL databse in decending order
			while($user=mysql_fetch_assoc($records))
			{
				echo "<tr>";
				echo"<td>". $user['first_name'] ."</td>";
				echo"<td>". $user['last_name'] ."</td>";
				echo"<td>". $user['address'] ."</td>";
				echo"<td>". $user['address2'] ."</td>";
				echo"<td>". $user['city'] ."</td>";
				echo"<td>". $user['state'] ."</td>";
				echo"<td>". $user['zip'] ."</td>";
				echo"<td>". $user['country'] ."</td>";
				echo"<td>". $user['register_date'] ."</td>";
				echo "</tr>";
			}//end while
		?>
	</table>
</body>
</html>
