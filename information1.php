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
					<h1 class="pad75">Types<br>Of Doorbell?</h1>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="pad75 showcase">
	<div class="container">
		<div class="row">


			<div class="w50 align-self-center">
				<div class="w50 text-center">
					<img src="images/modernbell.png" alt="" title="" />
				</div>
			</div>



			<div class="w50 align-self-center">
				<div class="w100">
					<h1>Modern Doorbell</h1>
					<p><br>
						A Ring Doorbell is a smart home device that combines a traditional doorbell with a built-in video camera, microphone, and speaker. It allows homeowners to see, hear, and communicate with visitors at their front door remotely using a mobile app or a connected device, such as a smartphone or tablet.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="pad75 showcase">
	<div class="container">
		<div class="row">


			<div class="w50 align-self-center">
				<div class="w50 text-center">
					<img src="images/bell.png" alt="" title="" />
				</div>
			</div>



			<div class="w50 align-self-center">
				<div class="w100">
					<h1>Traditional Doorbell</h1>
					<p><br>
						A Ring Doorbell is a smart home device that combines a traditional doorbell with a built-in video camera, microphone, and speaker. It allows homeowners to see, hear, and communicate with visitors at their front door remotely using a mobile app or a connected device, such as a smartphone or tablet.
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
				<img src="images/HotelLogo.png" alt="Circle Image" class="circle-image">
			</div>
			<div class="w50 information-holder">
				<h2 class="section-title">Our Logo!!!</h2>
				<p class="section-description">
					while exploring the Adobe Photoshop We creativity designed this website Logo for the given topic Ring Doorbell.
				</p>
			</div>
		</div>
	</div>
</section>


<!-- Partners-->

<section class="partners-section">
    <div class="container">
        <h2 class="section-title">Our Partners</h2>
        <div class="row partner-logos">
            <div class="w20 partner-logo">
                <img src="images/cp1.png" alt="Partner 1" title="Partner 1">
            </div>
            <div class="w20 partner-logo">
                <img src="images/cp4.png" alt="Partner 2" title="Partner 2">
            </div>
            <div class="w20 partner-logo">
                <img src="images/cp3.png" alt="Partner 3" title="Partner 3">
            </div>
            <div class="w20 partner-logo">
                <img src="images/cp.png" alt="Partner 4" title="Partner 4">
            </div>
            <div class="w20 partner-logo">
                <img src="images/cp5.png" alt="Partner 5" title="Partner 5">
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