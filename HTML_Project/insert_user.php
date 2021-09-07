<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$name = filter_input(INPUT_POST, 'username');
$pwd= filter_input(INPUT_POST, 'pwd');


if (!empty($name)){
if (!empty($pwd)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "foodData";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO user (name, password)values ('$name','$pwd')";
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
echo "Password should not be empty";
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
	<button onclick="window.location.href = 'Loginpage.html';">Previous</button>
	<button onclick="window.location.href = 'Homepage.html';">Next</button>
</div>
</center>
</body>
</html>