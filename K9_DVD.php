<?php

if ( isset($_REQUEST['submit']) ) {

	$email 	= $_REQUEST['email'];
	$name 	= $_REQUEST['name'];

	if ($email != '' && $name != '') {

		$qty 	= $_REQUEST['quantity'];

		$to = 'vit.singh@emctts.com';

		$header  = "From: $name <$email>\r\n";
		$header .= "Reply-To: $email \r\n";

		$subject = 'K9 Training DVD REQUEST';

		$msg = "The quantity requested: \t $qty";

		mail( $to, $subject, $msg, $header );

		header('Location: http://www.policecaninetraining.com/');

		exit;
	}
}

?>

<html>
<head>
<title>Combat Strategies For The K9 Handler</title>

<style type="text/css">
body {
	background: url('http://policecaninetraining.com/wp/wp-content/themes/twentyten/images/background_collage.jpg');
	}
form {
	border: red dashed 8px;
	padding: 60px;
	padding-top: 30px;
	padding-bottom: 60px;
	background-color: white;
	width: 300px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 30px;
	text-align: center;
	}
td {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 1.2em;
	}
.right {
	text-align: right;
	}
div.submit {
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	width: 150px;
	}
div input {
	font-size: 1.2em;
	}
div.img {
	padding-top: 30px;
	margin: auto;
	}
h2 {
	color: #000088;
	}
</style>
</head>

<body>





<form action="K9_DVD.php" method="post">
<h2>"Combat Strategies For The K9 Handler"</h2>
<table>

<tr><td class="right">
First Name:
</td><td>
<input type="text" name="name" maxlength="20" />
</td></tr>

<tr><td class="right">
Email:
</td><td>
<input type="text" name="email" maxlength="30" />
</td></tr>

<tr><td class="right">
Qty:
</td><td>
<select name="quantity">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
</td></tr>

</table>

<div class="submit">
<input type="submit" name="submit" value=" &nbsp; &nbsp; I Want The DVD &nbsp; &nbsp; " />
</div>


<div class="img">
<img src="http://www.policecaninetraining.com/wp/wp-content/uploads/2010/12/dog_DVD-300x207.jpg" />
</div>

</form>




</body>
</html>