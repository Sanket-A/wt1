
<?php
session_start();
 ('location:login.php');


$con= mysqli_connect('localhost','root','');

mysqli_select_db($con,'gces');

$name = $_POST['user'];
$pass = $_POST['password'];

$s =" select * from project where name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
 
if($num == 1) {
	
	echo" Username Already Taken";
}
else{

	$reg= " insert into project(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo"Registration Sucessfull";

}

?>


