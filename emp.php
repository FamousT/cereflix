<?php

//session_start();

$mysqli = new mysqli('127.0.0.1:3307', 'tobi', 'Famous10', 'cerebral') or die(mysqli_error($mysqli));

$id=0;
$update=false;
$first_name='';
$last_name='';
$email='';
$phone_no='';
$residential_address='';
$dob='';
$department='';
$level='';
$salary='';
$file='';

 if (isset($_POST['save'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$residential_address = $_POST['residential_address'];
	$dob = $_POST['dob'];
	$department = $_POST['department'];
	$level = $_POST['level'];
	$salary = $_POST['salary'];
	
	$image = $_POST['file'];
    $imgContent = addslashes(file_get_contents($image));
	
	$mysqli->query("INSERT INTO employees (first_name, last_name, email, phone_no, residential_address, dob,department,level,salary, file) VALUES('$first_name', '$last_name', '$email', '$phone_no', '$residential_address', '$dob', '$department','$level','$salary', '$imgContent')") or die($mysqli->error);
 
	 
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	

		
	header("Location:employees.php");	
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM employees WHERE id=$id ") or die($mysqli->error());
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	header("location: employees.php");
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true; 
	$result = $mysqli->query("SELECT * FROM employees WHERE id=$id ") or die($mysqli->error());
	//if (count($result) == 1) {
		$row = $result->fetch_array();
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		$phone_no = $row['phone_no'];
		$residential_address = $row['residential_address'];
		$dob = $row['dob'];
		$department = $row['department'];
		$level = $row['level'];
		$salary = $row['salary'];
		$file = $row['file'];

	//}
}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$residential_address = $_POST['residential_address'];
	$dob = $_POST['dob'];
	$department = $_POST['department'];
	$level = $_POST['level'];
	$salary = $_POST['salary'];
	$file=$_POST['file'];

	$mysqli->query("UPDATE employees SET first_name='$first_name', last_name='$last_name', email= '$email', phone_no='$phone_no', residential_address='$residential_address', dob='$dob', department='$department', level='$level', salary='$salary', file='$file' WHERE id=$id ") or die($mysqli->error());
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	header("location: employees.php");
	
}
/*
if (isset($_POST["submit"])){
	#retrieve file title
	$title=$_POST["title"];
	
	#file name with a random number so that similar don't get replaced
	$pname=rand(1000,10000)."-".$_FILES["file"]["name"];
	
	#temporary file name to store file							
	#upload directory path
	
	#To move the uploaded files to specific location
	move_uploaded_file($pname);
	
	#sql query to insert into database
	$sql="INSERT into employees(image) VALUES('$pname')";
	
	if(mysqli_query($conn,$sql)){
		echo "File successfully";
	}
	else{
		echo"Error";
	}
}*/


?>
