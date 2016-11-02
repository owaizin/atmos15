<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Campus Ambassador</title>
		<meta name="description" content="Register as Campus Ambassador for Atmos" />
		<meta name="keywords" content="Register as Campus Ambassador for Atmos" />
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="demo.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="set1.css" />
		<link rel="stylesheet" type="text/css" href="default.css" />
		<link rel="stylesheet" type="text/css" href="component.css" />
		<script src="modernizr.custom.js"></script>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<script>
$(document).ready(function () {
        $("#submit").click(function () {
            var name = $("#input-1").val();
			var college = $("#input-2").val();
			var year = $("#input-3").val();
			var phone = $("#input-4").val();
			var email = $("#input-5").val();
			var event = $("#input-6").val();
			$.post("database.php", { name: name,college: college,year: year,phone: phone,email: email,event: event }, function (data) {
                if (data == "1")
                    $("#afterSubmit").text("Thanks for Registering. Your Atmos Id is <?php echo $_COOKIE['Atmos_id']; ?>. The same has been sent to your Email.");
                else
                    $("#afterSubmit").text("Thanks for Registering. Your Atmos Id is <?php echo $_COOKIE['Atmos_id']; ?>. The same has been sent to your Email.");
            });
			$("#input-1").val('');
			$("#input-2").val('');
			$("#input-3").val('');
			$("#input-4").val('');
			$("#input-5").val('');
			$("#input-6").val('');
		});
		});
</script>
<style>
body { 
  background: url(back_image1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>

	</head>
	<body>
		<div class="container">
			<header class="codrops-header">
				<a href="http://bits-atmos.org" class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" >Home</a>
				<a href="index.php" class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" >Register For ATMOS</a>
				<a href="campus_register.php" class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" >Register For Campus Ambassador</a>
				
			</header>
			
			<div>
			<div class="col-md-4">
			<div class="jumbotron" style="opacity:0.7">
  <h3 align="left">WHY ONE SHOULD BECOME A CAMPUS AMBASSADOR?</h3>
  <p align="left">1. A chance to better one's communication skills by interacting with a diverse set of people.<br>
2. An opportunity to learn more about tech-related events.<br>
3.An opportunity to boost your profile. <br> </p>
  
</div>
			
			</div>
			<div class="col-md-4">
			<div class="jumbotron" style="opacity:0.7">
  <h3 align="left">RESPONSIBILITIES</h3>
  <p align="left">Publicity -You'll be expected to publicize about the fest in your college <br>
Co-ordination - Provision of contacts like that of college president/secretary.<br>
Contingent - You are expected to get in a contingent of at least 10 people. </p>
  
</div>
			
			</div>
			<div class="col-md-4">
			<div class="jumbotron" style="opacity:0.7">
  <h3 align="left">WE HAVE PLENTY OF INCENTIVES IN STORE</h3>
  <p align="left">1.A BITS Atmos T-shirt will be given along with a certificate as Campus Ambassador.<br>
2.	Registrations will be exempted for the you for all the three fests if the contingent is above 30. <br>
3. More Atmos goodies at a discounted price.</p>
  
</div>
			
			</div>
			
			</div>
			<!--
				<h2>Register With Us</h2>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro" type="text" id="input-1" style="font-size:15px;" />
					<label class="input__label input__label--kuro" for="input-1" style="font-size:15px;">
						<span class="input__label-content input__label-content--kuro" style="font-size:15px;">Name</span>
					</label>
				</span>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro" type="text" id="input-2" style="font-size:15px;" />
					<label class="input__label input__label--kuro" for="input-2" style="font-size:15px;">
						<span class="input__label-content input__label-content--kuro" style="font-size:15px;">College</span>
					</label>
				</span>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro" type="text" id="input-3" style="font-size:15px;"/>
					<label class="input__label input__label--kuro" for="input-3" style="font-size:15px;">
						<span class="input__label-content input__label-content--kuro" style="font-size:15px;">Year</span>
					</label>
				</span>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro" type="number" id="input-4" style="font-size:15px;" />
					<label class="input__label input__label--kuro" for="input-4" style="font-size:15px;">
						<span class="input__label-content input__label-content--kuro" style="font-size:15px;">Phone No.</span>
					</label>
				</span>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro" type="email" id="input-5" style="font-size:15px;" />
					<label class="input__label input__label--kuro" for="input-5" style="font-size:15px;">
						<span class="input__label-content input__label-content--kuro" style="font-size:15px;">Email</span>
					</label>
				</span>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro" type="text" id="input-6" style="font-size:15px;" />
					<label class="input__label input__label--kuro" for="input-6" style="font-size:15px;">
						<span class="input__label-content input__label-content--kuro" style="font-size:15px;">Events Participating</span>
					</label>
				</span>
				<span class="input input--kuro">
				<button class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" id="submit"  >Submit</button>
				</span>
				<h3 id="afterSubmit"></h3>
			</section>
			-->
			<!-- Related demos -->
			
		</div><!-- /container -->
		
		<script src="classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
		

<!-- For the demo ad only -->   

	</body>
</html>
