<?php		

$user_name='';
$pwd='cerebral';

$password='';
$errors = array();

if (isset($_POST['login'])){
	$user_name = $_POST['username'];
	$password = $_POST['password'];
		
	if(empty($user_name)){
		array_push($errors, "Username is required");
		header('location:index.php');

	}
	if(empty($password)){
		array_push($errors, "Password is required");
		header('location: index.php');

	}

	if(count($errors)==0){
		if($password==$pwd){
		//$password=md5($password); //encrypt password

				//log user in

				header('location: animation2.php');
				$_SESSION['user_name']=$user_name;

		}
		else{
			header('location: index.php');
			echo "incorrect login credential";

		}
			}
		
		else{
			array_push($errors, "wrong username/password combination");
 				header('location: index.php');

		}
	}			


?>
