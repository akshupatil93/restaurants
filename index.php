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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	<link href="css/templatemo-style.css" rel="stylesheet" />
	

	
	<style>
	a 
	{
	text-decoration: none;
	} 
	</style>
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">All Restaurants</h1>
								<h6 class="tm-site-description">Find your Restaurant</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to All-in-One Restaurants Page</h2>
				<form action="bnm.php"  method="GET">
					<label>Search by : </label>
					<select name ="searchcategory" class="form-select" autocomplete="off" required>Choose a Category
						<option value="" selected="selected">Choose a Category</option>
						<option value="resid">By Restaurant ID</option>
						<option value="name">By Restaurant Name</option>
						<option value="cuisine">By Restaurant Cuisine</option>
						<option value="phone">By Restaurant PhoneNo</option>
						<option value="address">By Restaurant Address</option>
						<option value="state">By Restaurant State</option>
						<option value="pincode">By Restaurant ZipCode</option>
					</select>
					<input type="text" name="searchedtext" placeholder="search" autocomplete="off" required/>
					<input type="submit" name="search" value="Search" />
				</form>
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

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel1.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								
								 <h4 class="tm-gallery-title">Brunch & Munch</a></h4>
								<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
								<!-- <p class="tm-gallery-price">$45 / $55</p> -->
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel2.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Spanish Cuisine</h4>
								<p class="tm-gallery-description">Our mission is to share our family’s authentic Spanish recipes with the world</p>
					
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel3.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">The 13th Floor</h4>
								<p class="tm-gallery-description">with its unique rooftop ambiance five it diners a never before experience. The premium menu that features North Indian, Continental, and Thai</p>
								<!-- <p class="tm-gallery-price">$30.50</p> -->
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel4.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">The Persian Terrace</h4>
								<p class="tm-gallery-description">Offering spectacular views of the Bangalore sky, you can cosy up with bae or have a leisurely dinner with your fam here. </p>
								<!-- <p class="tm-gallery-price">$25.50</p> -->
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel5.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Matteo Coffea</h4>
								<p class="tm-gallery-description">It is hands down the most buzzing Bangalore cafes, known for authentic coffee and desserts. Famed as a speciality coffeehouse, this place uses the top-quality Arabica beans for the rich coffee taste.</p>
								<!-- <p class="tm-gallery-price">$80.25</p> -->
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel11.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Coffee Day</h4>
								<p class="tm-gallery-description">We imagine a world where there’s no such thing as a bad cup of coffee and all coffee farmers live prosperously.</p>
								<!--<p class="tm-gallery-price">$20 / $40 / $60</p>-->
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel7.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Toscano</h4>
								<p class="tm-gallery-description">is a fine-dining Italian restaurant chain and it offers an intimate yet vibrant atmosphere.</p>
								<!-- <p class="tm-gallery-price">$94</p> -->
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/hotel8.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Stonny Brook</h4>
								<p class="tm-gallery-description">Stonny Brook is built with a concept of bringing a brook to the city and is touted to be India’s first stream restaurant.</p>
								<!-- <p class="tm-gallery-price">$15</p> -->
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Menu One</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$25</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Second Title Salad</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$30</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Third Salad Item</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$45</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Superior Salad</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Sed ultricies dui</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$55 / $60</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Maecenas eget justo</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$75</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle One</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$12.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle Second</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$15.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Third Soft Noodle</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$20.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Aliquam sagittis</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$30.25</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Maecenas eget justo</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$35.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Quisque et felis eros</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$40.50</p>
							</figcaption>
						</figure>
					</article>

				</div> <!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Stay Healthy, Stay Safe</h4>
							<p class="tm-mb-45">Health is a state of complete mental, social and physical well-being, not merely the absence of disease or infirmity</p>
							
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