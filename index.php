<!-- -------------------------------------------------
	 Testing interact with paypal via your own website
	 Created by HuyLe
	 Group F in eCommerce class - 2015
 ----------------------------------------------------- -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test paypal</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Title</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Link</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div class="container">
		<div class="col-sm-6">
		<img src="img/canon70D.jpg" alt="Product" title="Canon EOS 70D" width="500" height="auto">
		</div>
		<div class="col-sm-6">
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="U76D4VUZV8EKC">
				<table>
				<tr><td><input type="hidden" name="on0" value="Option"><strong>Let's choose your options:</strong></td></tr><tr><td>
				<select name="os0">
					<option value="Camera">Camera $250.00 USD</option>
					<option value="Camera_Lens">Camera + Lens $450.00 USD</option>
					<option value="Camera_Lens_Tripod">Camera + Lens + Tripod $600.00 USD</option>
				</select> </td></tr>
				</table>
				<br>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</body>
</html>