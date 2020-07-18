<!DOCTYPE html>
<html>
<head>
	<title>Nayak Digital Studio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 


</head>
<body>
  <style>
    body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Josefin Sans', sans-serif;
}
  .carousel-inner img {
    width: 100%;
    height: 70vh;
  }
  .skills{
    display: flex;
      justify-content: space-between;
      font-weight: 700;
  }
  .kumar{
    text-align: center;
    font-size: 180%;
  }
  .image{
    padding-bottom: 20%;  
  }
 .details{
  color: red;
  text-align: center;
 }
 .ajay{
  text-align: justify;
 }
  </style>
<h1>Welcome to our Website</h1>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Nayak Digital Studio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>








<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/13.jpg" alt="Los Angeles" width="1100" height="500">   
    </div>
    <div class="carousel-item">
      <img src="Images/22.jpg" alt="Chicago" width="1100" height="500">   
    </div>
    <div class="carousel-item">
      <img src="Images/14.jpg" alt="New York" width="1100" height="500">   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">About us</h1>
	</div>
  <div class="container-fluid">
    <div class="row ">
     <div class="col-lg-6 col-mid-6 col-12 image">
    		  <img src="Images/11.jpg" class="img-fluid aboutimg">
    	 </div>
        <div class="col-lg-6 col-mid-6 col-12">
          <h2 class="display-4 details">Ajay kumar nayak</h2>
          <p class="py-3 ajay">Ajay kumar nayak is a well trained photographer and video editor. He has succesfully completed all photography cources.He is the owner of the Nayak Digital Studio,Markona,Balesore.It has many brances in different districts over Odisha. For any kind of photoshot or video shot can contact directly to mobile no-(7750818632,9337511194) or can contact through our contact page or though email.<br></p>
          <p class="py-3 kumar">
          <b>Special Qualities</b> 
          <div class="skills">
            <span>Video Shoot</span>
            <span>Photoshop & Illustrator</span>
            <span>Album Designer</span>
            <span>Video Editing</span>
          </div>
          </p>

      </div>
        <div class="col-lg-6 col-mid-6 col-12">
        <img src="Images/12.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-mid-6 col-12">
        <h2 class="display-4 details">Sambhab Sadananda Das</h2>
        <p class="py-3 ajay">Sambhab Sadananda Das is a well qualified photographer,web designer and graphics designer. He is co-founder of Nayak Digital Studio.He owned lots of name and fame due to his look annd feel of his designs. For any kind of photoshot or video shot can contact directly to mobile no-(8637258307,7077247727) or can contact through our contact page or though email.</p>
        <p class="py-3 kumar">
        <b>Special Qualities</b> 
        <div class="skills">
          <span>Web design</span>
          <span>Photoshop & Illustrator</span>
          <span>Graphics Design</span>
          <span>Data Handler</span>
        </div>
      </div>

    </div>
</div>
</section>


  <footer class="footer_style">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
<style>
  footer{
    margin: 0; padding: 0; box-sizing: border-box;
   font-family: 'Maven Pro', sans-serif;
  }
  .footer_style{
   background: #2c2c54; color: white;
  }

     a{
   text-decoration: none;
color: white;

  }

  a:hover{ text-decoration: none;
   color: #4bcffa; 

}

  .d-flex div{
    text-align: center;
    border-right: 1px solid grey;
    border-top: 1px solid grey;
  }

  .d-flex div:last-child{
border-right:none;
  }

  @media(max-width: 768px){
   li{
    list-style: none;
   }

   .d-flex span{
    display: none;
   }
  }
  .fa-facebook{
      color: blue;
      
    }
    .fa-instagram{
      color: #e84393;
      
    }
    .fa-twitter{
      color: #0097e6;
      
    }

    .fa-youtube{
      color: red;
      
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


<main class="container-fluid">
  <div class="row p-3">
  <div class="col-md-4 col-12 offset-md-1"> 
    <h4>About</h4>
  <p class="mt-5 text-justify">Ajay kumar nayak is a well trained photographer and video editor. He has succesfully completed all photography cources.He is the owner of the Nayak Digital Studio,Markona,Balesore.It has many brances in different districts over Odisha. For any kind of photoshot or video shot can contact directly to mobile no-(7750818632,9337511194) or can contact through our contact page or though email :) </p>
  
  </div>

<div class="col-md-4 col-12">
    <h4>Contacts</h4>
              <dl>
                <dt>Address:</dt>
                <dd>Markona, Baleswar, Odisha </dd>
              </dl>
              <dl>
                <dt>Email:</dt>
                <dd><a href="mailto:kumarajay199403@gmail.com" >kumarajay199403@gmail.com</a></dd>
              </dl>
              <dl>
                <dt>Phones:</dt>
                <dd><a href="tel:#">+91 99337511194</a>  <span>or</span>  <a href="tel:#">+91 7750818632</a>
                </dd>
              </dl>
</div>

<div class="col-md-2 col-12">
<h4>Links</h4>
              <ul>
                <li><a href="service.php">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="About.php">About</a></li>
              </ul>
</div>
</div>

<div class="d-flex flex-row justify-content-center align-items-center flex-wrap">
    <div class="p-md-5 p-2 flex-fill ">
    <a href="https://www.facebook.com/Nayak-studio-1961330204095325/"><i class="fab fa-facebook" aria-hidden="true" target="_blank"></i><span>Facebook</span></a></div>

    <div class="p-md-5 p-2 flex-fill "><a href="https://www.instagram.com/ajaynayak3846/?igshid=4o4rpk1txb8b"><i class="fab fa-instagram" aria-hidden="true" target="_blank"></i></i><span>Instagram</span></a></div>

    <div class="p-md-5 p-2 flex-fill "><a href="#"><i class="fab fa-twitter" aria-hidden="true" target="_blank"></i><span>Twitter</span></a></div>

    <div class="p-md-5 p-2 flex-fill "><a href="https://www.youtube.com/channel/UCEz5NEE5oK5KY_gZqDOGUYg"><i class="fab fa-youtube" aria-hidden="true" target="_blank"></i><span>Youtube</span></a></div>

    </div><br>
<div class="followus"><a href="aboutus.php" target="_blank">ABOUT STUDIO</a> | <a href="contact.php" target="_blank">CONTACT US</a> | <a href="terms and conditions.php" target="_blank">TERMS AND CONDITIONS</a>
      </div>
      <p class="text-capitalize">&#169 2020 Nayak Digital Studio. All rights reserved. </p>
</main>
</footer>
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>








		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




</body>
</html>