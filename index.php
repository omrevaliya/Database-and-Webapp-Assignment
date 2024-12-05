<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="images/favicon.png" rel="icon" />
	<title>Cabins Homestay</title>
	<link href="CSS/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<header>
		<nav>
			<ul class='nav-bar'>
				<li class='logo'><a href='#'><img src='images/HotelLogo.png'alt="Cabins Homestay" title="Cabins Homestay" height="60px" width="60px"/></a></li>
				<input type='checkbox' id='check' />
				<span class="menu">
					<li><a href="index.php">Home</a></li>
                    <li><a href="Information1.php">History</a></li>
                    <li><a href="Information2.php">Built</a></li>
                    <li><a href="References.php">References</a></li>
                    <li><a href="ContactUs.php">Contact</a></li>
					<label for="check" class="close-menu"><i class="fas fa-times"></i></label>
				</span>
				<label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
			</ul>
		</nav>
	</header>

<section class="row pad25 showcase">
	<div class="container">
		<div class="row">
			<div class="w100 align-self-center pad75">
				<div class="w100 text-center">
					<h1 class="pad75">What Is<br>Cabins Homestay?</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pad75 showcase">
	<div class="container">
		<div class="row">
			<div class="w50 align-self-center">
				<div class="w100">
					<h1>Cabins Homestay?</h1>
					<p>
						Cabins Homestay offers a unique experience combining comfort and nature. Stay in our beautifully designed cabins nestled in the tranquil surroundings. Our homestay offers a peaceful retreat, ideal for those seeking a getaway in the woods, by the lake, or near the mountains.
					</p>
				</div>
				<button class="button">Book Now</button>
			</div>
			<div class="w25 align-self-center">
				<div class="w100 text-center">
					<img src="images/Home1.jpg" alt="Cabin Image" title="Cabin Image" />
				</div>
			</div>
			<div class="w25 align-self-center">
				<div class="w100 text-center">
					<img src="images/Home2.jpg" alt="Modern Cabin Image" title="Modern Cabin" />
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pad75 showcase card-section">
	<div class="container">
		<h2 class="section-title highlight-text">Book Now</h2>
		<div class="row">
			<!-- Card 1 -->
			<div class="w33">
				<div class="card-content text-center">
					<img src="images/Home1.jpg" alt="Cabin 1" class="card-image">
					<h2 class="card-title highlight-text">Tranquil Timberlands</h2>
					<p class="card-price"><strike>£400</strike> $199</p>
					<p class="card-description">
						Enjoy a peaceful retreat in Cabin 1 with cozy amenities and stunning views open to sky bath.
					</p>
					<a href="#" class="button">Book Now</a>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="w33">
				<div class="card-content text-center">
					<img src="images/Home2.jpg" alt="Cabin 2" class="card-image">
					<h2 class="card-title highlight-text">Forest View Sanctuary</h2>
					<p class="card-price"><strike>£500</strike> $249.99</p>
					<p class="card-description">
						Upgrade your experience with Cabin 2, featuring luxurious interiors and a private garden.
					</p>
					<a href="#" class="button">Book Now</a>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="w33">
				<div class="card-content text-center">
					<img src="images/Home3.jpg" alt="Cabin 3" class="card-image">
					<h2 class="card-title highlight-text">Whispering Pines Escape</h2>
					<p class="card-price">£299.99</p>
					<p class="card-description">
						Cabin 3 offers cutting-edge design with advanced features, perfect for modern travelers.
					</p>
					<a href="#" class="button">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gallery">
	<div class="container">
		<h2 class="section-title highlight-text">Gallery</h2>
		<div class="row">
			<div class="w33">
				<img src="https://images.pexels.com/photos/290518/pexels-photo-290518.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Image 1">
			</div>

			<div class="w33">
				<img src="https://images.pexels.com/photos/108120/pexels-photo-108120.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Image 2">
			</div>

			<div class="w33">
				<img src="https://images.pexels.com/photos/5997993/pexels-photo-5997993.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Image 3">
			</div>

			<div class="w33">
				<img src="https://images.pexels.com/photos/1179156/pexels-photo-1179156.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Image 4">
			</div>

			<div class="w33">
				<img src="https://images.pexels.com/photos/7276971/pexels-photo-7276971.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Image 5">
			</div>

			<div class="w33">
				<img src="https://images.pexels.com/photos/3320529/pexels-photo-3320529.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Image 6">
			</div>
		</div>
	</div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-between align-self-center">
            <div class="w25">
                <a href="#"><img src="images/facebook.png" alt="Facebook" title="Facebook"></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter" title="Twitter"></a>
                <a href="#"><img src="images/instagram.png" alt="Instagram" title="Instagram"></a>
            </div>
            <div class="w50">
                <form action="search.php" method="get">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
