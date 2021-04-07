<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>All-in-one Restaurants</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" /> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	<link href="css/templatemo-style.css" rel="stylesheet" />
	
	<style>
	a 
	{
	text-decoration: none;
	} 
	body {
  background-color: #3caea3;
}
	</style>
	
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 
<?php
					if(isset($_GET['search']))
					{
						include('config.php');
						$searchcategory=$_GET['searchcategory'];
						$searchedtext=$_GET['searchedtext'];
						switch($searchcategory)
						{
							case "name" :
							$sql="SELECT `res_id`, `res_name`, `res_mobile`,`res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode`, `res_menus`,`res_img` from list_restaurants where res_name like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_array($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								
								?>
								<div class="row">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px" style="font-color:black">
										<label>Details : 
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										<!--<iframe src=<?php echo '{$row["res_location"]}' ?> width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('Restaurant Name is incorrect!');
									window.location.href='index.php';
									</script>";
							}
						break;
						case "Address":
						$sql="SELECT `res_id`, `res_name`, `res_mobile`,`res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode`, `res_menus`, `res_img` from list_restaurants where res_address like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								?>
								<div class="col-12">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px">
										<label>Details :
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('No Restaurant is avaiable in this Address');
									window.location.href='index.php';
									</script>";
							}
							break;
							case "pincode":
						$sql="SELECT `res_id`, `res_name`, `res_mobile`,`res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode` , `res_menus`, `res_img` from list_restaurants where res_pincode like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								?>
								<div class="col-12">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px">
										<label>Details :
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('Kindly check Zip-Code Again!');
									window.location.href='index.php';
									</script>";
							}
							break;
							case "phone":
						$sql="SELECT `res_id`, `res_name`, `res_mobile`, `res_cuisine`,`res_website`, `res_address`, `res_state`, `res_pincode` , `res_menus`, `res_img` from list_restaurants where res_mobile like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								?>
								<div class="col-12">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px">
										<label>Details :
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('Phone Number is incorrect');
									window.location.href='index.php';
									</script>";
							}
							break;
							case "state":
						$sql="SELECT `res_id`, `res_name`, `res_mobile`,`res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode` , `res_menus`, `res_img` from list_restaurants where res_state like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								?>
								<div class="col-12">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px">
										<label>Details :
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										<p><a href="https://goo.gl/maps/vg8PucxHwe7crzg27">13thfloor</a><p>
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('No Restaurant is avaiable in this State');
									window.location.href='index.php';
									</script>";
							}
							break;
							case "cuisine" :
							$sql="SELECT `res_id`, `res_name`, `res_mobile`,`res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode` , `res_menus`, `res_img` from list_restaurants where res_cuisine like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								?>
								<div class="row">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px">
										<label>Details : 
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('No Such Restaurant Cuisine is avaiable');
									window.location.href='index.php';
									</script>";
							}
						break;
						case "resid" :
							$sql="SELECT `res_id`, `res_name`, `res_mobile`,`res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode` , `res_menus`, `res_img` from list_restaurants where res_id like '%$searchedtext%'";
							// var_dump($sql);
							$result=mysqli_query($conn,$sql) or die(error());
							if(mysqli_num_rows($result) > 0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 
								echo "<div class='img-fliud'><img src='img/gallery/{$row['res_img']}.jpg' width='55%' height='20%' style='margin-left:20%;margin-bottom:5px'></div>";
								?>
								<div class="row">
								<div class="col-md-4">
									
									</div>
									<div class="col-md-4" margin="2px">
										<label>Details : 
										<p><?php echo "Name: " .$row['res_name'] ?></p>
										<p><?php echo "Cuisine-Type: " .$row['res_cuisine'] ?></p>
										<?php echo '<a href="http://'.$row["res_website"].'" target="_blank"> '.$row["res_website"].'</a>';?>
										<p><?php echo "Address:" .$row['res_address'] ?></p>
										<p><?php echo "Zip-Code:" .$row['res_pincode'] ?></p>
										<p><?php echo "Phone Number:" .$row['res_mobile'] ?></p>
										</label>
									</div>
									
									<div class="col-md-4">
									
									</div>
								
								</div>
								<label style="margin-left:50%">Menus : </label>
								<div class="row" style="margin-left:15%">
								
								<?php
									echo "<div class='img-fliud'><img src='img/gallery/{$row['res_menus']}.jpg' width='100%' height='80%' style='margin-left:20%;margin-bottom:5px'></div>"; ?>
								</div>
								<?php
								
								}
							}
							else
							{
								echo "<script>
									alert('No Such Restaurant ID is not avaiable');
									window.location.href='index.php';
									</script>";
							}
						break;
						}

						
						
					}
				
				?>

	
						<!--<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>-->	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title"></h2>
				<!--<form action="bnm.php"  method="POST">
					<label>Search by : </label>
					<select name ="searchcategory" class="form-select">Choose a Category
						<option value="">Choose a Category</option>
						<option value="name">By Name</option>
						<option value="cuisine">By Cuisine</option>
						<option value="phone">By PhoneNo</option>
						<option value="address">By Address</option>
						<option value="state">By State</option>
						<option value="pincode">By Zip Code</option>
					</select>
					<input type="text" name="searchedtext" placeholder="search" required/>
					<input type="submit" name="search" value="Search" />
				</form>-->
			</header>
			
			<!--<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
					</ul>
				</nav>
			</div>-->
			
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title"></h4>
							<p class="tm-mb-45"></p>
							
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2021 All in-one Restaurants
            
            | Design: Akshata Patil</p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>