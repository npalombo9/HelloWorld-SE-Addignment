<?php
	include"config.php";
	//place the user input into the defined variables
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	//place the intial SQL query into a variable
	$insert = 'INSERT INTO users(first_name, last_name, address, address2, city, state,
		zip, country)
	VALUES("'. $firstname. '", "'. $lastname. '", "'. $address1. '", "'. $address2. '",
	"'. $city. '", "'. $state. '", "'. $zip. '", "'. $country. '")';
	//place the user input/variable into the MySQL database
	mysql_query($insert);
?>

<html>
<head>
	<title>Add User</title>
</head>
<body>
<form action="reqprocess.php" method="post">
		<b>Add another user</b>
		<p>First Name:</p><input type="text" name="fname" size="30" placeholder="First Name" required="required"/>
		<p>Last Name:</p> <input type="text" name="lname" size="30" placeholder="Last Name" required="required"/>
		<p>Address1:</p> <input type="text" name="address1" size="30" placeholder="Address 1" required="required"/>
		<p>Address2:</p> <input type="text" name="address2" size="30" placeholder="Address 2" />
		<p>City:</p> <input type="text" name="city" size="30" placeholder="City" required="required"/>
		<p>State:</p> <select name="state" id="state"/>
						<option>Alabama</option>
						<option>Alaska</option>
						<option>Arizona</option>
						<option>Arkansas</option>
						<option>California</option>
						<option>Colorado</option>
						<option>Connecticut</option>
						<option>Delaware</option>
						<option>Florida</option>
						<option>Georgia</option>
						<option>Hawaii</option>
						<option>Idaho</option>
						<option>Illinois</option>
						<option>Indiana</option>
						<option>Iowa</option>
						<option>Kansas</option>
						<option>Kentucky</option>
						<option>Louisiana</option>
						<option>Maine</option>
						<option>Maryland</option>
						<option>Massachusetts</option>
						<option selected="">Michigan</option>
						<option>Minnesota</option>
						<option>Mississippi</option>
						<option>Missouri</option>
						<option>Montana</option>
						<option>Nebraska</option>
						<option>Nevada</option>
						<option>New Hampshire</option>
						<option>New Jersey</option>
						<option>New Mexico</option>
						<option>New York</option>
						<option>North Carolina</option>
						<option>North Dakota</option>
						<option>Ohio</option>
						<option>Oklahoma</option>
						<option>Oregon</option>
						<option>Pennsylvania</option>
						<option>Rhode Island</option>
						<option>South Carolina</option>
						<option>South Dakota</option>
						<option>Tennessee</option>
						<option>Texas</option>
						<option>Utah</option>
						<option>Vermont</option>
						<option>Virginia</option>
						<option>Washington</option>
						<option>West Virginia</option>
						<option>Wisconsin</option>
						<option>Wyoming</option>
					</select>
		<p>Zip:</p> <input type="text" name="zip" size="30" placeholder="Zip" required="required"/>
		<p>Country:</p><select name="country" id="country">
			<option selected="">US</option>
		</select>
		<p>
			<input type="submit" name="submit" value="Send"/>
		</p>
	</form>
</body>
</html>
