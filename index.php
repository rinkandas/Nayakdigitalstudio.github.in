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
    .paragraph h3{
      padding-top: 3%;
      padding-bottom: 2%;
      text-decoration: underline;
      text-align: center;
      color: blue;
      font-size: 40px;
      }
    .paragraph p{
      font-family: 'Dancing Script', cursive;
      font-size: 22px;
      text-align: justify;
      padding-left: 3%;
      padding-right: 3%;
      }
    .h56 {
      background-color: black;
      color: white;
      word-spacing: 1px;
      border: 8px solid red;
      width: 350px;
      height:260px;
      border-radius: 20px 20px 20px 20px;
      margin-left: 50%;
      transform: translate(-50%);
      }
    .h56 h4{
      padding-bottom:10px;
      color: lightgreen;
      text-align: center;
      }
    .h56 p{
      padding-left: 8px;
      }
      .direct{
        margin-left: 1%;

      }
      .direct h2{
        color: darkred;
      }
      .direct button{
      font-size: 20px;
      color: green;
      padding-top:15px;
      padding-bottom: 15px;
      padding-left:30px;
      padding-right:30px; 
      border-radius: 10px;
      border-color: green;
      box-shadow: 1px 4px 2px 2px black;
      margin-bottom: 2%;
    }
    .direct button:hover{
      color: white;
      background-color: green;
      font-size: 25px;
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
        <img src="Images/13.jpg"  width="1100" height="500">   
      </div>
      <div class="carousel-item">
        <img src="Images/22.jpg"  width="1100" height="500">   
      </div>
      <div class="carousel-item">
        <img src="Images/14.jpg"  width="1100" height="500">   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="paragraph">
   <h3>Welcome to India's professional photographers directory</h3>
    <p> Featuring a bank of over tens of thousands of photographer portfolios from over hundreds of locations around the state.

    From wedding to sports, editorial to advertising, kids to fashion, wildlife to product photography, discover and connect with photographers best suited for your needs.

    Use the powerful but simple interface to browse by location, budget, or discipline. Built in features allow you to review portfolios, get in touch, compare quotes and much more.

    The Professional Photographers Directory comes to you from Canvera, India's leading online photography platform.

    Your search for top-of-the-line photography solutions has ended.
    </p>
  </div>

  <div class="h56">
    <h4><b>Services you will get here</b></h4>
      <p><i><b>1.</b>    Full HD and 4k video shooting<br>
       <b>2.</b>    All type of album designing <br>
        <b>3.</b>    Pre-wedding and post-wedding video shoots <br>
        <b>4.</b>    Xerox<br>
        <b>5.</b>    Lamilation<br>
        <b>6.</b>    color print<br>
        <b>7.</b>    Online form apply and Internet sevices</i>
      </p>
      
     </div>  <br><br>   
    <div class="direct">
      <h2><b>REACH US DIRECTLY</b></h2><br>
      <h4><b>Locate Us</b></h4>
       <a href="https://www.google.co.in/maps/place/Nayak+Digital+Studio/@21.1894205,86.6005391,17z/data=!4m12!1m6!3m5!1s0x3a1c7317989dbf85:0x1964d4dd16fb6ac2!2sNayak+Digital+Studio!8m2!3d21.1894155!4d86.6027278!3m4!1s0x3a1c7317989dbf85:0x1964d4dd16fb6ac2!8m2!3d21.1894155!4d86.6027278?hl=en&authuser=0" target="_blank"><button type="submit" name="ok"><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i>  Nayak Digital Studio</button></a>
      <h6><b>Phone</b></h6>
      <p>7750818632<br>8637258307</p>
      <h6><b>Email</b></h6>
      <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank">kumarajay199403@gmail.com</a>
  </div><br><br>















  








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