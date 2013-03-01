<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Viva La Bam! - Contact Us</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="fluid_grid.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="main.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1">
      <div id="header"><img src="logo.png" alt="Viva La Bam Logo"></div>
      <div id="nav">
      <a href="index.php">Home</a> | <a href="order.php">Order</a> | <a href="locate.php">Find Store</a> | <a href="contact.php">Contact Us</a>
      </div>
      		<div id="popup">
			<form action="." method="POST">
				<input type="text" value="Subject" />
				<br />
				<textarea>Message</textarea>
				<br />
				<button id="sendmsg">Send Message</button>
			</form>
			<button id="close">Close</button>
			<br />
			<span id="thanks">Thank you for your message, our support staff will look into it shortly!</span>
		</div>
      <div id="content">
      			<p id="popshow">Please send any issues or support requests to <a id="email" href="#">Support</a></p>
            </div>
      <div id="footer">
      	<hr />
		<div id="footer">Viva La Bam!</div>
    </div>
  </div>
</div>
</body>
</html>
