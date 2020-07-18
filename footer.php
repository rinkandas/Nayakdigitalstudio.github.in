<!DOCTYPE html>
<html>
<head>
	<title>Responsive footer section</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>



<style>
	.footer{
	color:#d9d9d9;
	box-sizing: border-box;
	font-family: sans-serif;
}
footer{
	bottom: 0px;
	width: 100%;
	background: #111;
}
.main-content{
	display: flex;
}
.main-content .box{
	flex-basis: 50%;
	padding: 5% 10%;
}
.box h2{
	font-size: 1.125rem;
	font-weight: 600;
	text-transform: uppercase;
}
.box .content{
	margin: 20% 0 0 0;
}
.left h2{
	margin-left: 25%;
}
.left .content p{
	text-align: justify;
}
.left .content .social{
	margin: 20% 0 0;
}
.left .content .social a{
	padding: 0 2%;
}


.center-box{
	margin-left: 5%;
}

.center-box h2{
	margin-bottom: 8%;
	margin-left: 20%;
}


.content  a i{	
      transition: all 0.3s linear;
}
    .content a:hover i{
      transform: scale(1.4);
    }

.content .place i{
	color: green;
}

.content .phone i{
	color: #4cd137;
}
.content .email i{

	color:red;

}


    .social a i{
      transition: all 0.3s linear;
    }
    .social a:hover i{
      transform: scale(1.4);
    }
    .fa-facebook{
    	color: blue;
    	margin-right: 3%;
    }
    .fa-instagram{
      color: #e84393;
      margin-right: 3%
    }
    .fa-twitter{
      color: #0097e6;
      margin-right: 3%
    }

    .fa-youtube{
      color: red;
      margin-right: 3%
    }


.btn button{
	color: black;
}
input{
	color: black;
}









	.followus a{
      text-decoration: none;

      font-weight: bold;
      color: white;
      transition: all 0.9s ease-in-out;
      opacity: 0.6;
    }
    .followus a:hover{
  text-decoration: none;
  color: red;

    }
    .followus{
      color: white;
      text-align: center;
    }
</style>








	<footer>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<div class="footer">
			<div class="container">
				<div class="col-lg-8 m-auto d-block">
					<div class="main-content">
						<div class="main-content">
							<div class="left box">
								<h2>About us</h2>
								<div class="content">
									<p>Ajay kumar nayak is a well trained photographer and video editor. He has succesfully completed all photography cources.He is the owner of the Nayak Digital Studio,Markona,Balesore.It has many brances in different districts over Odisha. For any kind of photoshot or video shot can contact directly to mobile no-(7750818632,9337511194) or can contact through our contact page or though email.</p>
									<div class="social">
										<a href="https://www.facebook.com/Nayak-studio-1961330204095325/" target="_blank"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
										<a href="https://www.instagram.com/ajaynayak3846/?igshid=4o4rpk1txb8b" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
									    <a href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
									  	<a href="https://www.youtube.com/channel/UCEz5NEE5oK5KY_gZqDOGUYg" target="_blank">
									  		<i class="fa fa-2x fa-youtube" aria-hidden="true"></i></a>

									</div>
								</div>
							</div>
							<div class="center box">
								<div class="center-box">
									<h2>Address</h2>
									<div class="content">
										<div class="place">
											<a href="https://www.google.co.in/maps/place/Nayak+Digital+Studio/@21.1894205,86.6005391,17z/data=!4m12!1m6!3m5!1s0x3a1c7317989dbf85:0x1964d4dd16fb6ac2!2sNayak+Digital+Studio!8m2!3d21.1894155!4d86.6027278!3m4!1s0x3a1c7317989dbf85:0x1964d4dd16fb6ac2!8m2!3d21.1894155!4d86.6027278?hl=en&authuser=0"><i class="fas fa-2x fa-map-marker-alt" target="_blank"></i></a>
											<span class="text">Nayak Digital Studio,Markona,Baleswar</span>
										</div><br>
										<div class="phone">
											<a href="#"><i class="fas fa-2x fa-phone-alt"></i></a>
											<span class="text">7750818632</span>
										</div><br>
										<div class="email">
											<a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"><i class="fas fa-2x fa-envelope"></i></a>
											
											<span class="text">Ajay Kumar Nayak</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="right box">
							<h2>contact us</h2>
							<div class="content">
								<form action="userinfo.php" method="post">
									<div class="name">
										<div class="text">Name</div>
										<input type="text" name="user" required>
									</div>
									<div class="email">
										<div class="text">Email</div>
										<input type="email" name="email" required>
									</div>
									<div class="address">
										<div class="text">Address</div>
										<input type="text" name="address" required>
									</div>
									<div class="number">
										<div class="text">Mobile Number</div>
										<input type="number" name="mobile" required>
									</div>
									<div class="msg">
										<div class="text"> Message</div>
										<textarea rows="2" cols="25" name="comments" required></textarea>
									</div>
									<div class="btn">
										<button type="submit">Send</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
					<div class="followus"><a href="aboutus.php" target="_blank">ABOUT STUDIO</a> | <a href="contact.php" target="_blank">CONTACT US</a> | <a href="terms and conditions.php" target="_blank">TERMS AND CONDITIONS</a>
					</div>
				</div>
	</footer>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>