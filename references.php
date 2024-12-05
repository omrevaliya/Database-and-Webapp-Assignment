<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="images/favicon.png" rel="icon" />
	<title>Cabins Homestay</title>
	<link href="CSS/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
</head>

<body>

	<header>
		<nav>
			<ul class='nav-bar'>
				<li class='logo'><a href='#'><img src='images/HotelLogo.png'alt="Ring Doorbell" title="Ring Doorbell" height="60px" width="60px"/></a></li>
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

<section class="row pad75 showcase">
	<div class="container">
		<div class="row">
			<div class="w100 align-self-center pad75">
				<div class="w100 text-center">
					<h1 class="pad75">References</h1>

					<p><br>
						<a href="https://en-uk.ring.com/" class="text-white"><u>Modern Door Bell Images</u></a>
					</p>

					<p><br>
						<a href="https://cdn.powered-by-nitrosell.com/product_images/13/3038/large-period-door-bell.jpg" class="text-white"><u>Modern Door Bell Images</u></a>
					</p>

					<p><br>
						<a href="https://www.pexels.com/" class="text-white"><u>Modern Door Bell Images</u></a>
					</p>

					<p><br>
						<a href="https://www.allaboutcircuits.com/news/teardown-tuesday-zmodos-ding-home-package/" class="text-white"><u>Modern Door Bell Images</u></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="circle-image-section">
	<div class="container">
		<div class="row">
			<div class="w50 circle-image-holder">
				<img src="images/me.jpg" alt="Circle Image" class="circle-image">
			</div>
			<div class="w50 information-holder">
				<h2 class="section-title">Bcu Student!!!</h2>
				<p class="section-description">
					Welcome to This Website! I'm Om Revalia, a passionate creator exploring the world of design and
						creativity. This is website design on given topic <span class="highlight highlight-text">'Ring Doorbell'</span> .
				</p>
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