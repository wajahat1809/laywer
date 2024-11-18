@extends('layout.mainheader')
@section('theme')
	<aside id="ftco-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/hero_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h1><strong>See Our Gallery</strong></h1>
									<h2>Visit <a href="#" target="_blank">Colorlib</a> for more free templates</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#" target="_blank">Colorlib</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="site-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<a href="images/blog-1.jpg" class="image-popup gallery-item"><img src="images/blog-1.jpg" alt="Image" class="img-responsive"></a>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<a href="images/blog-2.jpg" class="image-popup gallery-item"><img src="images/blog-2.jpg" alt="Image" class="img-responsive"></a>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<a href="images/blog-3.jpg" class="image-popup gallery-item"><img src="images/blog-3.jpg" alt="Image" class="img-responsive"></a>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<a href="images/blog-4.jpg" class="image-popup gallery-item"><img src="images/blog-4.jpg" alt="Image" class="img-responsive"></a>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<a href="images/blog-1.jpg" class="image-popup gallery-item"><img src="images/blog-1.jpg" alt="Image" class="img-responsive"></a>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<a href="images/blog-2.jpg" class="image-popup gallery-item"><img src="images/blog-2.jpg" alt="Image" class="img-responsive"></a>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12 pagination">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="caption">Next</a>
				</div>
			</div>
		</div>
	</div>



	
	<div id="intro-bg">
		<div class="container">
			<div id="ftco-intro" style="position: relative; margin-bottom: -150px!important;">
				<div class="third-col">
					<h2 class="h3">Need Legal Services?</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
				<div class="third-col third-col-color">
					<h2 class="h3">Call now (+1) 123-456-7890</h2>
					<p>Email us at <a href="#" target="_blank">info@yourwebsite.com</a></p>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
		</div>
	</div>

	@endsection