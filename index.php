<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" type="text/css">
<script language="JavaScript" type="text/javascript"  src="script.js"></script>
	<script language="JavaScript" type="text/javascript"  src="js/random_password.js"></script>
	<script src="js/ajax_user_check.js"></script>
	<script src="js/ajax_sign_up.js"></script>
	<script src="js/ajax_activate.js"></script>
</head>

<body style="background: #FCD0CF">
<div class="container-fluid">
	<div class="row main-box">
		<div class="col-4 main-box">1</div>
		<div class="col-4 p-4">
		<img src="main_pic.jpg" class="shadow-lg">
		</div>
		<div class="col-4 p-4">
		<h1 class="mb-3">SIGN UP</h1>
<form autocomplete="off">
	<input type="text" name="fullname" id="fullname"
		   placeholder="ENTER YOUR NAME" required="required">
	<div class="email-box">
	<input type="email" name="email" id="email" 
		   placeholder="EMAIL" required="required">
	<i class="fa fa-circle-o-notch fa-spin email-loader d-none" style="font-size: 18px"></i>
	</div>
	
	<div class="password-box">
	<input type="password" name="password" id="password"
		   placeholder="ENTER YOUR PASSWORD" required="required">
	<i class="fa fa-eye show-icon"></i>
	</div>
	<button class="btn float-left py-2">
	CLICK GENERATE TO IMPROVE SECURITY
	</button>
	
	
	<button class="btn submit-btn m-3" disabled="disabled" type="submit">
	Register now
	</button>
	<div class="signup-notice p-2"></div>
</form>
<div class="px-2 d-none activator">
	<span>Please check your email to get activation code</span>
	<input type="text" name="code" id="code" class="my-3" placeholder="Activation Code">
	<button class="btn btn-dark activate-btn" >Activate now</button>
</div>			
			<button class="btn generate-btn float-right">GENERATE</button>
		</div>
	</div>
	</div>
	<p id="ax"></p>
</body>
</html>