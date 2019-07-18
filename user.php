<?php
$mysqli = new mysqli('127.0.0.1:3307', 'tobi', 'Famous10', 'cerebral') or die(mysqli_error($mysqli));


$id=0;
$update=false;
$first_name='';
$last_name='';
$user_name='';
$email='';
$password='';
$errors=array();


	
if (isset($_POST['register'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$user_name = $_POST['user_name'];	
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
  
		if(empty($first_name)){
			array_push($errors, "First Name is required");
		}
		if(empty($last_name)){
			array_push($errors, "Last Name is required");
		}
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		if(empty($user_name)){
			array_push($errors, "Username is required");
		}

		if(empty($password_1)){
			array_push($errors, "Password is required");
		}
		
		if($password_1 != $password_2){
			array_push($errors, "The two passwords do not match");
		}
		

		if (count($errors) == 0) { 
		//if no error, save user to database
			$password=$password_1; //encrypt password before storing in database
			$mysqli->query("INSERT INTO users (first_name, last_name, email, user_name, password) VALUES('$first_name', '$last_name', '$email', '$user_name', '$password')") or die($mysqli->error);
			
			//$_SESSION['user_name']=$user_name;
			$_SESSION['message'] = "Registration Successful!";
			$_SESSION['msg_type'] = "success";
	
			
			header("Location:viewusers.php");	

		
		}
	
}
if (isset($_POST['login'])){
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	
	//ensure the form field are filled properly
	
	if(empty($user_name)){
		array_push($errors, "Username is required");
	}
	
	if(empty($password)){
		array_push($errors, "Password is required");
	}
	
	if(count($errors)==0){
		//$password = md5($password); //encrypt password
		$result = $mysqli->query("SELECT * FROM users WHERE user_name='$user_name' AND password='$password'") or die($mysqli->error());
		if($result->num_rows ==1){
			//log user in

			header('location: dashboard.php');
		}
		
		else{
			array_push($errors, "wrong username/password combination");
			//header('location:cerebralhubdata.php');
		}
	}
}

if (isset($_POST['logout'])){
	session_destroy();
	unset($_SESSION['user_name']);
	header('location:cerebralhubdata.php');
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true; 
	$result = $mysqli->query("SELECT * FROM users WHERE id=$id ") or die($mysqli->error());
	//if (count($result) == 1) {
		$row = $result->fetch_array();
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		$user_name = $row['user_name'];
		$password_1 = $row['password'];
		$password_2 = $row['password'];

	}


if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$user_name = $_POST['user_name'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
  
		if(empty($first_name)){
			array_push($errors, "First Name is required");
		}
		if(empty($last_name)){
			array_push($errors, "Last Name is required");
		}
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		if(empty($user_name)){
			array_push($errors, "Username is required");
		}

		if(empty($password_1)){
			array_push($errors, "Password is required");
		}
		
		if($password_1 != $password_2){
			array_push($errors, "The two passwords do not match");
		}
		

		if (count($errors) == 0) { 
		//if no error, save user to database
		$password=md5($password_1); 
		$mysqli->query("UPDATE users SET first_name='$first_name', last_name= '$last_name', email='$email', user_name='$user_name', password='$password' WHERE id=$id ") or die($mysqli->error());
		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";
		header("location: viewusers.php");
		}
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM users WHERE id=$id ") or die($mysqli->error());
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	header("location: viewusers.php");
	} 


?>