<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="dash.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cerebral | Dashboard</title>


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="cerebrallogo.png" style="width:40px; height:40px; margin-right:10px;"></a>

                <a class="navbar-brand" href="#">Cerebralhub Data</a>
              </nav>
<div class="back" style="background-color:#333;">
<div class="container-fluid">
    <div class="row d-flex">
        <div class="col-md-2 float-left col-1 pl-0 pr-0 " id="sidebar">  
			<div class="list-group border-0 card text-center text-md-left"> 
				
                <a href="dashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th-large"></i> <span class="d-none d-md-inline">Dashboard</span></a>

                <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
				<i class="fa fa-address-book"></i> <span class="d-none d-md-inline">Employees</span> </a>
                <div class="collapse" id="menu1">
                    <a href="private/employees.php" class="list-group-item" data-parent="#menu1">View All</a>
                    <a href="private/addemployee.php" class="list-group-item" data-parent="#menu1">Add Employee</a>
					<a href="private/profile.php" class="list-group-item" data-parent="#menu1">Profile</a>
				</div>
				
				
                <a href="#menu2" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
				<i class="fa fa-folder-open"></i> <span class="d-none d-md-inline">Projects</span> </a>
                <div class="collapse" id="menu2">
                    <a href="projects.php" class="list-group-item" data-parent="#menu2">View All</a>
                    <a href="addproject.php" class="list-group-item" data-parent="#menu2">Add project</a>
					<a href="subprojects.php" class="list-group-item" data-parent="#menu2">Sub Projects</a>
					<a href="addsubproject.php" class="list-group-item" data-parent="#menu2">Add Sub-Projects</a>
                </div>
				
                <a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
				<i class="fa fa-user"></i> <span class="d-none d-md-inline">Client</span> </a>
                <div class="collapse" id="menu3">
                    <a href="clients.php" class="list-group-item" data-parent="#menu3">View All</a>
                    <a href="addclient.php" class="list-group-item" data-parent="#menu3">Add Client</a>
                </div>
				
                <a href="#menu4" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
				<i class="fa fa-tasks"></i> <span class="d-none d-md-inline">Assets</span> </a>
                <div class="collapse" id="menu4">
                    <a href="assets.php" class="list-group-item" data-parent="#menu4">View All</a>
                    <a href="addasset.php" class="list-group-item" data-parent="#menu4">Add Asset</a>
                </div>
				
                <a href="#menu5" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
				<i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Settings</span> </a>
                <div class="collapse" id="menu5">
                    <a href="private/viewusers.php" class="list-group-item" data-parent="#menu5">View all Users</a>
                    <a href="private/register.php" class="list-group-item" data-parent="#menu5">Add new user</a>
	
			<?php require_once 'user.php'; ?>

			<form method="POST" action="dashboard.php" style="width:40%;">
				<?php include ('error.php');  ?>				
					<div class="input-group">
						<button type="submit" name="logout" class="btn btn-secondary">Log Out</button>
					</div>
			
			</form>
                </div>
				
                
            </div>
        </div>
		<div class="others" style="background-color:white; width:80%;height:100%; padding-bottom:20px;">
        <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
		<div class="other" style="backgrund-color:white;">
			<div class="dashboard" style="margin-top:10px;">

							<h3>Welcome!</h3>

					</div><br>
			<div class= "announcement">
			            <?php require_once 'dash.php'; ?>
				<?php 
					if(isset($_SESSION['message'])):
				 ?>
				<div class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				 ?>
				</div>
				<?php endif; ?>
				<div class="content">
					<h4>Recent Information</h4>
						<div class="out" style= "border:1px solid black; width:100%; margin:0px; padding:10px; padding-right:5px; overflow: scroll; height:500px;">

						 <?php
							$mysqli = new mysqli('127.0.0.1:3307', 'tobi', 'Famous10', 'cerebral') or die(mysqli_error($mysqli));
							$result = $mysqli->query("SELECT * FROM dash ORDER BY time DESC") or die($mysqli->error);
							//pre_r($result)
							?>
							
							<?php
								while($row=$result->fetch_assoc()):?>
									<div class="input-group">

										<b><?php echo $row['name']; ?></b>
											
										
										</b></div>
									<div class="input-group">

										<?php echo $row['info']; ?><br>
										<?php echo substr($row['time'],0,16); ?>

										</div>
																
										<a href="dash.php?delete=<?php echo $row ['id'];?>"
												class="btn-danger">Delete </a>
										
								<?php endwhile;?>
								
							</div>

								<?php
								function pre_r($array){
									echo '<pre>';
									print_r($array);
									echo '</pre>';
								}
								 ?> 
							</div>
			</div>
            <div class="info" style="margin-top:60px;">
					<?php include ('error.php');  ?>

					<h4>Add a new Information</h4>
					<?php require_once 'dash.php'; ?>

					<form action="dash.php" method="POST">
						<div class="input-groupp">
							<label><h6><b>Name</b></h6></label> <br>
							<input type="text" name="name" placeholder="">
						</div>
						<div class="input-group">
							<label><h6><b>Information (Apostrophe ' not allowed)</b></h6></label>
							<input type="text" name="info" placeholder="">
						</div>
					
						<button type = "Submit" class="btn btn-info"name="save">Post</button>
						
						</form>
					</div>
        </main>
		</div>
		</div>

    </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
