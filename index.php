<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta name="description" content="Bootstrap Demo">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Bootstrap Demo</title>
	<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/mystyle.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700|Droid+Sans' rel='stylesheet' type='text/css'>
	<script src="jquery-1.8.3.min.js"></script>
	<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>	tinymce.init({
				selector: 'div.editable',
				inline: true,
				plugins: [
				    'advlist autolink lists link image charmap print preview anchor',
				    'searchreplace visualblocks code fullscreen',
				    'insertdatetime media table contextmenu paste', 'save code'
				],
				toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | save code charmap'
});
  	</script>
</head>

<body>
<div class="container">
	
	<header class="jumbotron">

		<!--Top navigation -->
				<div id="small-nav-container"><div id="small-nav"></div>
				<div id="small-nav"></div>
				<div id="small-nav"></div>
				<!-- <p class="close-close">X Close</p>-->	
		<nav class="cf">
			<ul class="close-close cf">
				<li><a href="/">Home</a></li>
				<li><a href="/">Photo Gallery</a></li>
				<li><a href="/">About Us</a></li>
				<li><a href="/">Directions</a></li>
				<li><a href="/">Contact Us</a></li>
			</ul>
		</nav>
				</div>
		<!--End of Top Nav-->
		<div class="contact-info"><p>000-647-0000</p><hr /></div>
		<div class="contact-info"><p>email@email.com</p><hr /></div>
		<div id class="logo"><a href="/">
		<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=300%C3%97175&w=300&h=175"></a>
		</div>
</div>
		
		<div class="hero cf">
			<img class="img-responsive" src="photos/hero-3.jpg" alt="">
		</div>
		
		<div class="cta cf">
				<h3><a href="#">Contact Me</a><a href="themes.html">Visit Themes</a></h3>
			</div>	
</header>
<div class="container c-2 cf">			
	<div class=" cf">
		<div class="row content">
			<div class="col-lg-12 editable">
			<h1>Lorem's <strong>Modern</strong> Design</h1>
			</div>
		</div>
			<div class="row content">
					<div class="col-md-4 editable">
					
					</div>

					<div class="col-md-4 editable">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=325×225&w=325&h=225">
					</div>

					<div class="col-md-4 editable">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
					</div>
			</div>
				<div class="row even content">

					<div class="col-md-4 editable">
					<h1>Title-h1</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						<ul>
							<li>quis nostrud exercitation ullamco</li>
							<li>laboris nisi ut aliquip ex ea commodo</li>
							<li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
							<li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</li>
							<li>	proident, sunt in culp</li>
							<li>a qui officia deserunt mollit anim id est laborum.</li>
						</ul>
						<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>	
					</div>

					<div class="col-md-4 editable">
					<h2>Title-h2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
					eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  </p>
					</div>

					<div class="col-md-4 editable">
					<h3>H3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
					eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  </p>
					</div>
				</div>	
		<footer class="cf">
		<div class="row">
			<div class="col-lg-12 cf">
			<p>Footer</p>

			</div>
		</div>
				<script>
					$('#small-nav-container').click(function(){
						$('nav ul, #small-nav-container p').toggleClass('close-close');
					});
				</script>
		</footer>
		
		
</div>
</body>
</html>
