<!DOCTYPE HTML>
<!-- html5up.net | @ajlkn Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
	<head>
		<title>Uppity image upload, crop and resize</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/component.css" />
	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper" class="divided">

				<!-- section -->
				<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
					
					<div class="content">
							
							<h1>Select a profile picture</h1>

							<div>
								<div>
									Click the browse button below to find and select a photo (300 x 300 max ideally) and position the photo in the red squares to crop as required.
								</div>
								<form id="form1" runat="server">
								   <input type='file' id="imgInp" />
								</form>
							</div>

							<div class="component">

		    					<div class="overlay">
									<div class="overlay-inner"></div>
								</div>

								<img id="imageid" class="resize-image" src="images/placeholder.jpeg" alt="image for resizing">

								<div>
									<button class="btn-crop js-crop">Crop<img class="icon-crop" src="images/crop.svg"></button>
								</div>
							</div>
							<div class="a-tip">
								<p><span>Hold SHIFT while resizing to keep the original aspect ratio.</span></p>
							</div>
					</div>

					<div class="image">
						<img src="images/banner.jpg" alt="Travel text" />
					</div>

				</section>

				<!-- Footer -->
				<footer class="wrapper style1 align-center">
					<div class="inner">
						<p>&copy;  <a href="#">UPPITY</a>.</p>
					</div>
				</footer>

			</div>

		<!-- Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/component.js"></script>
		<script type='text/javascript'>//<![CDATA[
			$(window).load(function(){

			    function readURL(input) {
			        if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            
			            reader.onload = function (e) {
			                $('#imageid').attr('src', e.target.result);
			            }
			            
			            reader.readAsDataURL(input.files[0]);
			        }
			    }
			    
			    $("#imgInp").change(function(){
			        readURL(this);
			    });
			});//]]> 
		</script>

	</body>
</html>