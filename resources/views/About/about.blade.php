<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>About Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="aboutstyle.css">

    @include('About.layout.css')

</head>

<body>
  <div class="main-nav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
          <img class="logo" src="{{asset('assests/images/logo.jpeg')}}" alt="logo">
        </a>
        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <div class="other-option">
              <a href="/" class="home-btn">HOME</a>
            </div>
              <div class="other-option">
              
                <a href="about" class="signup-btn">About</a>
              </div>
                <div class="other-option">
                  <a href="services.html" class="signup-btn">Services</a>
                </div>
                  <div class="other-option">
                    <a href="contact.html" class="signup-btn">Contact</a>
                  </div>
              </ul>

          <div class="other-option">
            <a href="login" class="signup-btn">Sign Up/Sign In</a>
      
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!-- Navbar Area End -->

<div class="container d-flex gap">
  <div class="w-50 p-3 m-2" style="background-color: #a1dc7adf;">
    <h2 class="typing-animation">WHO ARE WE?</h2>
    <p>Welcome to FARMS TO FARMING, your premier destination for farming land rentals. Our mission is to foster a thriving agricultural community by connecting farmers with ideal land opportunities. Our platform simplifies the process, making it easy for both landowners and farmers to find, list, and manage properties.</p>
    <p>At FARMS TO FARMING, transparency and trust are paramount. We provide accurate information, enabling informed decisions and building strong, lasting relationships. Our user-friendly interface ensures effortless navigation, while our dedicated support team is ready to assist you at every turn.</p>
    <p>We value integrity, sustainability, collaboration, and empowerment. By prioritizing these principles, we create an environment where farmers can achieve their goals and landowners can unlock their property's potential.</p>
    <p>Join us in cultivating a prosperous future. Explore FARMS TO FARMING today and become part of a dynamic community that's shaping the future of agriculture. For inquiries, reach out to E21@bmsit.in. Together, we grow.</p>
  </div>
  
    <div class="d-flex align-items-center">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
          src="{{asset('assests/images/about1.jpg')}}"
            class="d-block w-100" alt="Carousel 1" style="height: 400px; width: 100px;">
        </div>
        <div class="carousel-item">
          <img
          src="{{asset('assests/images/about2.jpg')}}"
            class="d-block w-100" alt="Carousel 2" style="height: 400px; width: 100px;">
        </div>
        <div class="carousel-item">
          <img
          src="{{asset('assests/images/about3.jpeg')}}"
            class="d-block w-100" alt="Carousel 3" style="height: 400px; width: 100px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  </div>

  <footer class="pt-3">
    <div class="footer">

      Contact us at: <a href="mailto:e21@bmsit.in">e21@bmsit.in</a>

    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>