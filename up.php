<?php

$mysqli = new mysqli('127.0.0.1:3307', 'tobi', 'Famous10', 'cerebral') or die(mysqli_error($mysqli));
$id=0;
$id2=0;

if(isset($_POST['submit'])){
	//file for attachment
	$email = $_POST['email'];
	$file=$_FILES['file'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	$fileExt =explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg','jpeg','png','pdf','docx','pptx');
	
	if(in_array($fileActualExt, $allowed)){
		if($fileError==0){
			if($fileSize<10000000){ 
				//$fileNameNew= uniqid('', true).".".$fileActualExt;
				$fileDestination='uploads/'.$fileName;
				move_uploaded_file($fileTmpName, $fileDestination);
				$path=$_SERVER['HTTP_REFERER']."uploads/".$fileName;
				$bpath=substr($path,0,45);
				$apath=substr($path,55,);
				$rpath= $bpath.$apath;
				$result = $mysqli->query("SELECT * FROM employees WHERE email='$email'") or die($mysqli->error());
				$row = $result->fetch_array();
				$id = $row['id'];
				$mysqli->query("UPDATE employees SET file='$rpath' WHERE id=$id ") or die($mysqli->error());
				//echo $path;
				//echo $rpath;
				if($mysqli){
					echo 'Upload Successfully';
				}else{
					echo 'upload failed';
				}
			}else{
				echo "your file is too large";
			}
		}
			else{
				echo "There was an error uploading your file";
			}
		}
		else{
			echo "You cannot upload files of this type!";
		}
		
		$file2=$_FILES['profile_pix'];
		$fileName2=$_FILES['profile_pix']['name'];
		$fileTmpName2=$_FILES['profile_pix']['tmp_name'];
		$fileSize2=$_FILES['profile_pix']['size'];
		$fileError2=$_FILES['profile_pix']['error'];
		$fileType2=$_FILES['profile_pix']['type'];
		$fileExt2 =explode('.', $fileName2);
		$fileActualExt2 = strtolower(end($fileExt2));
		$allowed2 = array('jpg','jpeg','png');
		if(in_array($fileActualExt2, $allowed2)){
		if($fileError2==0){
			if($fileSize2<10000000){ 
				//$fileNameNew= uniqid('', true).".".$fileActualExt;
				$fileDestination2='uploads2/'.$fileName2;
				move_uploaded_file($fileTmpName2, $fileDestination2);
				$path2=$_SERVER['HTTP_REFERER']."uploads2/".$fileName2;
				$bpath2=substr($path2,0,45);
				$apath2=substr($path2,55,);
				$rpath2= $bpath2.$apath2;
				$result2 = $mysqli->query("SELECT * FROM employees WHERE email='$email'") or die($mysqli->error());
				$row2 = $result2->fetch_array();
				$id2 = $row2['id'];
				$mysqli->query("UPDATE employees SET profile_pix='$rpath2' WHERE id=$id2 ") or die($mysqli->error());
				//echo $path;
				echo $rpath2;

				header("Location:employees.php");	
					echo $rpath2;
				if($mysqli){
					
					echo 'Upload Successfully';
				}else{
					echo 'upload failed';
				}
			}else{
				echo "your file is too large";
			}
		}
			else{
				echo "There was an error uploading your file";
			}
		}
		else{
			echo "You cannot upload files of this type!";
		}
}





?>