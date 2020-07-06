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
	<?php
         require 'Header.php';
    	?>

	<div class="container-fluid">
	<div class="row pt-4 mt-5">
			<div class="col">
				<div class="jumbotron" style="background-color:Crimson">
					<h1>English</h1>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:400px;background-color:olive">
          <h4>Beginner</h4>
          <p> </p>
					<p>Step-by-Step teaching method</p>
          <p>Downloadable PDF</p>
          <p>Assignments</p>
          <p>Video Lessons</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
          <button id="register" type="button" class="btn btn-dark">Register</button>
          <p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:400px;background-color:olive">
          <h4>Pre-Intermediate</h4>
          <p> </p>
					<p>Step-by-Step teaching method</p>
          <p>Downloadable PDF</p>
          <p>Assignments</p>
          <p>Video Lessons</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
          <button id="register1" type="button" class="btn btn-dark">Register</button>
          <p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:400px;background-color:olive">
					<h4>Intermediate</h4>
					<p> </p>
					<p>Step-by-Step teaching method</p>
          <p>Downloadable PDF</p>
          <p>Assignments</p>
          <p>Video Lessons</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
          <button id="register2" type="button" class="btn btn-dark">Register</button>
          <p> </p>
					<p style="color:darkred">
						<strong>Validity</strong>: 1 year</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron jumbotron-fluid" style="height:400px;background-color:olive">
					<h4>Advance</h4>
					<p> </p>
					<p>Step-by-Step teaching method</p>
          <p>Downloadable PDF</p>
          <p>Assignments</p>
          <p>Video Lessons</p>
					<p>Rs: <i class="fa fa-rupee"></i> XXX</p>
          <button id="register3" type="button" class="btn btn-dark">Register</button>
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
			<p> After the payment is done, you need to email us the screenshot or picture of transaction details or the pictures of the bank pay-in-slip at mohdyaquoob10@gmail.com with the subject line as <strong>"payment done for English </strong><strong id="subject"></strong><strong>".</strong> Once it is done, you will be given access to private lecture videos within 24 hours. You can watch the videos online anytime, anywhere and any number of times. Please note that the videos are not downloadable. Sharing your access or trying to sell or distribute videos is a legally punishable offense. If we caught some people doing this then they will be punished legally and a huge penalty will be imposed on them.</p>
		</div>
		</div>
	</div>
	<!--footer-->
	<?php
         require 'footer.php';
    	?>
	<script>
		var modal = document.getElementById("mod");
		var btn= document.getElementById("register");
		var btn1= document.getElementById("register1");
		var btn2= document.getElementById("register2");
		var btn3= document.getElementById("register3");
		var span = document.getElementsByClassName("close")[0];
		var subject;
		btn.onclick= function(){
			document.getElementById("subject").innerHTML="Beginner";
			modal.style.display="block";
		}
		btn1.onclick= function(){
			document.getElementById("subject").innerHTML="Pre-Intermediate";
			modal.style.display="block";
		}
		btn2.onclick= function(){
			document.getElementById("subject").innerHTML="Intermediate";
			modal.style.display="block";
		}
		btn3.onclick= function(){
			document.getElementById("subject").innerHTML="Advance";
			modal.style.display="block";
		}
		span.onclick=function(){
			modal.style.display="none";
		}
		window.onclick=function(event){
			if (event.target==modal){
				modal.style.display="none";
			}
		}
	</script>
</body>
</html>
