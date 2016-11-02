<!DOCTYPE HTML5>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>ATMOS - 2015 | Registration</title>   
    <link rel="shortcut icon" href="favicon.ico">
	<meta name="description" content="ATMOS is the annual techno management fest of BITS Pilani Hyderabad Campus" /> 
    <meta name="keywords" content="ATMOS,techno management fest, BITS Pilani">
    <meta name="author" content="Akash Singh">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>  
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style1.css">  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67714408-1', 'auto');
  ga('send', 'pageview');

</script>
</head>	

<body>
<div class="big-wrapper">
	<form action="run.php" name="myForm" onsubmit="return( validate() );"  method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off">
		<fieldset>
		
			<div class="field">
				<div class="label"><label for="fname">First-name : &nbsp; &nbsp;</label></div>
				<div class="input"><input type="text" maxlength="25" name="fname" /></div>
			</div>
			
			<div class="field">
				<div class="label"><label for="lname">Last-name :&nbsp; &nbsp; </label> </div>
				<div class="input"><input type="text" maxlength="25" name="lname"  /> </div>
			</div>
			
			<div class="field">
				<div class="label"><label for="college">College :&nbsp; &nbsp; </label> </div>
				<div class="input"><input type="text" maxlength="60" name="college"  /> </div>
			</div>
			
			<div class="field">
				<div class="label"><label for="year">Year of Study :&nbsp; &nbsp; </label> </div>
				<div class="input">
					<select name="year"  onchange="changeMe(this)">
						<option value="" selected disabled>Select...</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
                                                <option value="Nil">NIL</option>
					</select>
				</div>
			</div>
			
			<div class="field">
				<div class="label"><label for="event">Event to Participate :&nbsp; &nbsp; </label> </div>
				<div class="input"><input type="text" maxlength="60" name="event"  /> </div>
			</div>
			
			<div class="field">
				<div class="label"><label for="contact">Contact Number :&nbsp; &nbsp; </label> </div>
				<div class="input"><input type="number" maxlength="10" name="contact"  /></div>
			</div>	
			
			<div class="field">
				<div class="label"><label for="email">E-Mail address :&nbsp; &nbsp; </label> </div>
				<div class="input"><input type="email" maxlength="40" name="email"  /></div>
			</div>	
			
			<div class="field">
				<div class="label"><label for="accomidation">Do You want accomidation with us:&nbsp; &nbsp; </label> </div>
				<div class="input">
					<div class="radio"><input type="radio" name="accomidation" value="1">&nbsp; &nbsp; &nbsp; &nbsp; Yes</input></div>
					<div class="radio"><input type="radio" name="accomidation" value="0">&nbsp; &nbsp; &nbsp; &nbsp; No</input></div>
				</div>
			</div>
			
			<div class="field">
				<div class="label"><label for="ambassador">Are You a Campus Ambassador:&nbsp; &nbsp; </label> </div>
				<div class="input">
					<div class="radio"><input type="radio" name="ambassador" value="1">&nbsp; &nbsp; &nbsp; &nbsp; Yes</input></div>
					<div class="radio"><input type="radio" name="ambassador" value="0">&nbsp; &nbsp; &nbsp; &nbsp; No</input></div>
				</div>
			</div>
			
			<div class="field">
				<div class="label"><label for="fee">Did you pay your registration Fee:&nbsp; &nbsp; </label> </div>
				<div class="input">
					<div class="radio"><input type="radio" name="fee" value="1">&nbsp; &nbsp; &nbsp; &nbsp; Yes</input></div>
					<div class="radio"><input type="radio" name="fee" value="0">&nbsp; &nbsp; &nbsp; &nbsp; No</input></div>
				</div>
			</div>
											
			<input type="submit" value="Join the Frontier" />
		</fieldset>
	</form>
</div>
</body>
<script type="text/javascript">
    function changeMe(sel)
    {
      sel.style.color = "#000";              
    }
</script>
</html>