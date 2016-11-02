<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Register</title>
		<meta name="description" content="Register For Atmos" />
		<meta name="keywords" content="Register For Atmos" />
		
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="demo.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="set1.css" />
		<link rel="stylesheet" type="text/css" href="default.css" />
		<link rel="stylesheet" type="text/css" href="component.css" />
		<script src="modernizr.custom.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67714408-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
$(document).ready(function () {
        $("#submit").click(function () {
            var name = $("#input-1").val();
			var college = $("#input-2").val();
			var year = $("#input-3").val();
			var phone = $("#input-4").val();
			var email = $("#input-5").val();
			var event = $("#input-6").val();
			<?php $id = rand(10,1000);
                               $id = $id.rand(1,100);
                               $id = $id.rand(1,10);
                               $id = "Atmos".$id;
 ?>
			var id = "<?php echo $id ?>";
			if(name==''||year==''||college==''||phone==''||email==''){
				$("#afterSubmit").text("Please fill the form correctly");
			}
			else{
			$.post("database.php", { id: id,name: name,college: college,year: year,phone: phone,email: email,event: event }, function (data) {
                if (data == "1")
                    $("#afterSubmit").text("Thanks for Registering. Your Atmos Id is <?php echo $id ?>. The same has been sent to your Email.");
                else
                    $("#afterSubmit").text("Thanks for Registering. Your Atmos Id is <?php echo $_COOKIE['Atmos_id']; ?>. The same has been sent to your Email.");
            });
			$("#input-1").val('');
			$("#input-2").val('');
			$("#input-3").val('');
			$("#input-4").val('');
			$("#input-5").val('');
			$("#input-6").val('');
			}
		});
		});
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
				<a href="http://bits-atmos.org" class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" >home</a>
				<a href="campus.php" class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" >Campus Ambassador</a>
				
			</header>
			
				<h2 style="color:#FFFFCC;">Register With Us</h2>
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
					
					<input  type="checkbox" name="vehicle" id="input-6" value="Bike">Football &nbsp &nbsp &nbsp
				</span>
				<span class="input input--kuro">
				<button class="btn btn-1 btn-1a" style=" font-size:15px; padding:15px;" id="submit"  >Submit</button>
				</span>
				<h3 id="afterSubmit" style="color:#FFFFCC;"></h3>
			</section>
			
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
		