<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php



$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$Address = filter_input(INPUT_POST, 'Address');
$Email = filter_input(INPUT_POST, 'Email');
$username = filter_input(INPUT_POST, 'username');
$password= filter_input(INPUT_POST, 'password');
$contact = filter_input(INPUT_POST, 'contact');
$gender = filter_input(INPUT_POST,'gender');



if (!empty($fname)){
if (!empty($lname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fooddata";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registration (fname, lname, Address, Email, username, password, contact, gender)values ('$fname','$lname', '$Address','$Email', '$username','$password', '$contact','$gender')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "contact should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
</b><br><br>
<div class="btn-group">
	<button onclick="window.location.href = 'form.html';">Previous</button>
	<button onclick="window.location.href = 'Homepage.html';">Next</button>
	
</div>
</center>
</body>
</html>