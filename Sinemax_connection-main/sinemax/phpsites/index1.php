<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="style1.css">
    <!-- Bootstrap Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/72bb70657a.js" crossorigin="anonymous"></script>
	<title>Sinemax | Home</title>
</head>
<body style="background: url('img/sinemaxbackg.jpg') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover;">

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbarScroll" style="font-family: 'Anton', sans-serif;">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/sinemaxlogo.png" style="width: 100px;height: 50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guide">Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['user_name'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
<!-- carousel section-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/c1.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/c2.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/c3.png" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Us</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="img/sinemaxlogo.png" class= "imageAboutPage">
                </div>
                <div class="col-lg-8">
                    <div class="row mt-3">
                        <p class="ptxt">SineMAX is one of the largest partnered online cinema reservation websites that is based in Quezon City. It has partnered with the largest cinema companies in the Philippines. It provides the latest movies, international and local to the Filipino people. They have a large user base that uses the app regularly to book and reserve seats whenever, wherever. With people going digital and mobile in watching movies, SineMAX makes sure you get the best deal.
                        </p>
                    </div>
                </div>
            </div>
    </section>
<!-- How it works section-->
    <section id="guide">
        <div class="container mt-3">
            <h1 class="text-center">How it works?</h1>
            <h4 class="text-center">3 Simple steps to book your favourite movie</h4>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <i class="fa-solid fa-film filmIcon"></i>
                        <div class="card-body">
                            <h4 class="card-title">1. Choose your favourite movie</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <i class="fa-solid fa-credit-card creditIcon"></i>
                        <div class="card-body">
                            <h4 class="card-title">2. Pay your tickets</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <i class="fa-solid fa-couch couchIcon"></i>
                        <div class="card-body">
                            <h4 class="card-title">3. Pick your seats & Enjoy watching</h4>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
    </section>
    <br><br><br><br><br>
<!-- Trailer section-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <h1 class="text-center" style="color: white; font-family: 'Anton', sans-serif;">Movie Trailers</h1>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <iframe width="1980" height="720" src="https://www.youtube.com/embed/Go8nTmfrQd8" title="Marvel Studios' Thor: Love and Thunder | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="carousel-item">
        <iframe width="1980" height="720" src="https://www.youtube.com/embed/ZlNFpri-Y40" title="Marvel Studios’ Ant-Man and The Wasp: Quantumania | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="carousel-item">
        <iframe width="1980" height="720" src="https://www.youtube.com/embed/_Z3QKkl1WyM" title="Marvel Studios’ Black Panther: Wakanda Forever | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="carousel-item">
        <iframe width="1980" height="720" src="https://www.youtube.com/embed/aWzlQ2N6qqg" title="Marvel Studios' Doctor Strange in the Multiverse of Madness | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="carousel-item">
        <iframe width="1980" height="720" src="https://www.youtube.com/embed/oZ6iiRrz1SY" title="MORBIUS - Official Trailer (HD)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center" style="color: white;">Contact Us</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    
                    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
                        <div style="overflow:hidden;resize:none;max-width:100%;width:500px;height:500px;"><div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Pasig,+Metro+Manila,+Philippines&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-html" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="inject-map-data">premium bootstrap themes</a><style>#google-maps-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
                        </div>
                        <a class="googlemaps-html" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                        <style>#embedmap-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}
                        </style>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form>
                        <input type="text" class="form-control form-control-lg" placeholder="Name">
                        <input type="email" class="form-control mt-3" placeholder="Email">
                        <input type="text" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Concern Details"></textarea>
                        </div>
                    </form>
                    <button type="button" class="btn btn-outline-success">Contact Us</button>
                    
                </div>

            </div>
        </div>
    </section>
 <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>

    <script src="script1.js"></script>
</body>
</html>