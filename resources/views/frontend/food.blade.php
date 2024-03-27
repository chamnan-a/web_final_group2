frontend
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="responsive.css">

</head>
<body>
@include('frontend.header')
@include('frontend.hero')

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li data-filter=".drink"><a href="/drink">Drink</a></li>
                            <li data-filter=".drink"><a href="/food">Food</a></li>
                            <li data-filter=".drink"><a href="/bakery">Bakery</a></li>
                        </ul>
                    </div>
                </div>
            </div>

			<form action="" method="post">
				<div class="row product-lists">
					<div class="col-lg-4 col-md-6 text-center strawberry">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img src="img/products/macha_cream.png" alt=""></a>
							</div>
							<h3 id="macha">macha</h3>
							<p class="product-price"><span>Per Kg</span> 85$ </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center berry">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img src="img/products/hot_cappucino.png" alt=""></a>
							</div>
							<h3 id="cappucino">hot cappucino</h3>
							<p class="product-price"><span>Per Kg</span> 70$ </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center lemon">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img src="img/products/hot_expresso.png" alt=""></a>
							</div>
							<h3 id="expresso">hot expresso</h3>
							<p class="product-price"><span>Per Kg</span> 35$ </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img src="img/products/orange_juice.png" alt=""></a>
							</div>
							<h3 id="orange_juice">orange juice</h3>
							<p class="product-price"><span>Per Kg</span> 50$ </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">	
								<a href="single-product.html"><img src="img/products/Fruit_juice.png" alt=""></a>
							</div>
							<h3 id="Fruit_juice">Fruit juice</h3>
							<p class="product-price"><span>Per Kg</span> 45$ </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center strawberry">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img src="img/products/lemonnade.png" alt=""></a>
							</div>
							<h3 id="lemonnade">lemonnade</h3>
							<p class="product-price"><span>Per Kg</span> 80$ </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- end products -->
@include('frontend.footer')

	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>