<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
	<title>MFC</title>
</head>

<body>
	<!--header-->
	<div class="allexceptfooter">
	<?php
	require 'Header.php';
	?>

	<div class="container-fluid">
	<div class="row pt-4 mt-5">
			<div class="col">
				<div class="jumbotron" style="background-color:violet">
					<h1>CLASS 9</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:505px;background-color:mediumseagreen">
					<h4>PHYSICS</h4>
					<p> </p>
					<p>Whole Syllabus will be covered.
						Previous years question paper will be discussed.
						Sample papers will be provided.</p>
					<p>All NCERT and NCERT Exampler's question will be discussed.
						Important Notes will be provided on regular basis</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
					<button id="register" type="button" class="btn btn-warning">Register</button>
					<p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:505px;background-color:mediumseagreen">
					<h4>CHEMISTRY</h4>
					<p> </p>
					<p>Whole Syllabus will be covered.
						Previous years question paper will be discussed.
						Sample papers will be provided.</p>
					<p>All NCERT and NCERT Exampler's question will be discussed.
						Important Notes will be provided on regular basis</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
					<button id="register1" type="button" class="btn btn-warning">Register</button>
					<p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:505px;background-color:mediumseagreen">
					<h4>MATH</h4>
					<p> </p>
					<p>Whole Syllabus will be covered.
						Previous years question paper will be discussed.
						Sample papers will be provided.</p>
					<p>All NCERT and NCERT Exampler's question will be discussed.
						Important Notes will be provided on regular basis</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
					<button id="register2" type="button" class="btn btn-warning">Register</button>
					<p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:505px;background-color:mediumseagreen">
					<h4>BIOLOGY</h4>
					<p> </p>
					<p>Whole Syllabus will be covered.
						Previous years question paper will be discussed.
						Sample papers will be provided.</p>
					<p>All NCERT and NCERT Exampler's question will be discussed.
						Important Notes will be provided on regular basis</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
					<button id="register3" type="button" class="btn btn-warning">Register</button>
					<p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="mod">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div style="text-align:left">
				<p>If you are interested in registering, you can make the fee payment in the following account either through net banking (IMPS / RTGS / NEFT) or visit your nearest PNB bank to deposit the fees into our account and email us the transaction id or UTR Number or the scan copy of the pay-in-slip.</p>
				<table>
					<tbody>
						<tr>
							<td>Account Name</td>
							<td>Mohd Yaquoob</td>
						</tr>
						<tr>
							<td>Account Number</td>
							<td>2501000100043279</td>
						</tr>
						<tr>
							<td>Account type</td>
							<td>Saving account</td>
						</tr>
						<tr>
							<td>Bank</td>
							<td>PNB</td>
						</tr>
						<tr>
							<td>Branch</td>
							<td>MADHOSINGH</td>
						</tr>
						<tr>
							<td>IFSC</td>
							<td>PUNB0250100</td>
						</tr>
						<tr>
							<td>DISTRICT</td>
							<td>BHADOHI</td>
						</tr>
					</tbody>
				</table>
				<p> </p>
				<p> After the payment is done, you need to email us the screenshot or picture of transaction details or the pictures of the bank pay-in-slip at mohdyaquoob10@gmail.com with the subject line as <strong>"payment done for CLASS-9 </strong><strong id="subject"></strong><strong>".</strong> Once it is done, you will be given access to private lecture videos within 24 hours. You can watch the videos online anytime, anywhere and any number of times. Please note that the videos are not downloadable. Sharing your access or trying to sell or distribute videos is a legally punishable offense. If we caught some people doing this then they will be punished legally and a huge penalty will be imposed on them.</p>
			</div>
		</div>
	</div>
	</div>
	<!--footer-->
	<?php
	require 'footer.php';
	?>
	<script>
		var modal = document.getElementById("mod");
		var btn = document.getElementById("register");
		var btn1 = document.getElementById("register1");
		var btn2 = document.getElementById("register2");
		var btn3 = document.getElementById("register3");
		var span = document.getElementsByClassName("close")[0];
		var subject;
		btn.onclick = function() {
			document.getElementById("subject").innerHTML = "PHYSICS";
			modal.style.display = "block";
		}
		btn1.onclick = function() {
			document.getElementById("subject").innerHTML = "CHEMISTRY";
			modal.style.display = "block";
		}
		btn2.onclick = function() {
			document.getElementById("subject").innerHTML = "MATH";
			modal.style.display = "block";
		}
		btn3.onclick = function() {
			document.getElementById("subject").innerHTML = "BIOLOGY";
			modal.style.display = "block";
		}
		span.onclick = function() {
			modal.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>

</html>