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
<title>Viva La Bam! - Order Meal</title>
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
      <div id="content">
      		<div id="popup">
			Item: 	<select id="prices" name="Item">
						<option value="0.00" selected="selected">Select an Item</option>
						<option value="7.99">Pepperoni Pizza</option>
						<option value="8.99">Sausage Pizza</option>
						<option value="6.99">Cheese Pizza</option>
						<option value="9.99">BBQ Pizza</option>
						<option value="2.99">Bread Sticks</option>
						<option value="3.50">Cheese Sticks</option>
						<option value="5.99">Pasta Marinara</option>
						<option value="5.99">Pasta Alfredo</option>
					</select>
			<br />
			Amount: <input id="amount" type="text" size="5" maxlength="5" value="0" />
			<br />
			Total: $<input id="total" type="text" size="5" maxlength="10" value="0.00" disabled>
			<br />
			<button id="placeorder">Order</button>
			<br />
			<button id="close">Close</button>
			<br />
			<span id="thanks">Thank you for your Order!</span>
            </div>
      <div id="footer">
      	<hr />
		<div id="footer">Viva La Bam!</div>
    </div>
  </div>
</div>
</body>
</html>
