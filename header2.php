<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/index.css"> 
<link rel="stylesheet" href="assets/css/quickquote.css"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
  <style>
  
  * {
 box-sizing:border-box;
 font-family:corbel,"century gothic", helvetica , sans-serif;
}
  
  #header{
	text-align:center;
}

.navbar-inverse .navbar-nav > li > a {
	padding : 0 10px 10px 0;
	
	
}

.carousel-inner{
  width:100%;
  max-height: 420px !important;
}
.foo {
    border: 3px solid #f98048;
	border-radius:5px;
	padding: 10px;
}

.tabshov{
	color:#f98048;
	
}


.tabshov:hover{
	color:#fff;
	background-color:#f98048;
}

.colorog{
	color:#f98048;
}
  </style>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="col-sm-2 navbar-left">
	<img src="logo.png" style="height:100px;">
  </div>
  <div class="col-sm-9 navbar-left">
  
		<ul class="nav navbar-nav ">
		  <li><a href="#">ISO 9001</a></li>
		   <li><a href="#">ISO 14001</a></li>
		   <li><a href="#">OHSAS 18001</a></li>
		   <li><a href="#">HACCP ISO 22000</a></li>
		   <li><a href="#">ISO 175025</a></li>
		   <li><a href="#">IMS</a></li>
		   <li><a href="#">ISO 17020</a></li>
		   <li><a href="#">ISO 27001</a></li>
		   <li><a href="#">ISO 20000</a></li>
		   <li><a href="#">SA 8000</a></li>
		   <li><a href="#">Home</a></li>
		   <li><a href="#">About Us</a></li>
		   <li><a href="#">Our Clients</a></li>
		   <li><a href="#">Contact Us</a></li>
		   <li><a href="#">About Us</a></li>
		   <li><a href="#">ISO 10001</a></li>
		   <li><a href="#">ISO 10002</a></li>
		   <li><a href="#">Other Services ></a></li>
		</ul>

  </div>
  <div class="col-sm-1 navbar-right"><button class="btn btn-org navbar-btn">Quick Quote</button></div>
  </nav>
  <div style="height:420px">
<?php include "slideshow.html"; ?>
</div>

<div class="container-fluid" style="margin-top:40px;">
	<div class="foo col-sm-12">
	<h2 class="colorog"><b>MSME INDIA CONSULTANTS</b></h2>
<p><h4>MSME India Consultants is one of the leading management consulting organizations providing
system certifications, product certifications and corporate training.

We offers a wide range of consulting services like strategic management, H.R. Management, marketing management,
 finance management & Quality management with specialization in ISO 9001 27001 14001 OHSAS 18001 SA 8000 & ISO 2200 17025 
 170220 15189 HACCP Certification consulting.  Also we provide other services as well such as SSI/MSME Registration, Import
 Export Code/ Gumasta License, Food License, etc which makes us preferred organization amoung our clients.</h4></p>
 </div>
   <div class="row">
    <div class="col-sm-offset-1 col-sm-4" style="padding:10px;top:100px">
	  <div class="foo tabshov">
	  <h1><b>ISO CERTIFICATES</b></h1>
	  <h4><ul>
			<li><a href="#"> > ISO 9001</a></li>
		   <li><a href="#"> > ISO 14001</a></li>
		   <li><a href="#"> > OHSAS 18001</a></li>
		   <li><a href="#"> > HACCP ISO 22000</a></li>
		   <li><a href="#"> > ISO 175025</a></li>
		   <li><a href="#"> > IMS</a></li>
		   <li><a href="#"> > ISO 17020</a></li>
		   <li><a href="#"> > ISO 27001</a></li>
		   <li><a href="#"> > ISO 20000</a></li>
		   <li><a href="#"> > SA 8000</a></li>
	  </ul></h4>
	  </div>
    </div>
    <div class="col-sm-offset-1 col-sm-4" style="padding:10px;top:100px">
	  <div class="foo tabshov">
	  <h1><b>OTHER SERVICES</b></h1>
	  <ul>
	  
	  </ul>
	  </div>
    </div>
  </div>
  
  <div class="row" style="background-color:#f98048;margin-top:400px;text-align:center">
	<h1><b>OUR CLIENTS</b></h1>
  </div>

</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="header">Quick Quote</h4>
        </div>
        <div class="modal-body">
            <form action="/action_page.php">
				<div class="form-group">
				  <label for="lquote">Required quote</label>
				  <input type="text" class="form-control" id="iquote" placeholder="For eg:ISO 9000" name="quote">
				</div>
				<div class="form-group">
				  <label for="lname">Name</label>
				  <input type="text" class="form-control" id="iname" name="name">
				</div>
				<div class="form-group">
				  <label for="lemail">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<div class="form-group">
				  <label for="lmob">Mobile no.</label>
				  <input type="text" class="form-control" id="mobo"  placeholder="Enter Mobile Number" name="mobo">
				</div>
				<div class="form-group">
					<textarea rows="4" cols="60" id="imessage" name="message" placeholder="Messagez"></textarea>
        </div>
        <div class="modal-footer">
				<button type="submit" class="btn btn-default btn-success">Submit</button>
			</form>
          <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>
</div>

</body>
</html>