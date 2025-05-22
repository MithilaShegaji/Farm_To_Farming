<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Registeraiton</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="aboutstyle.css">
  @include('Category.css')
  <style>
    .image-button {
      color: #000;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 34px;
      text-decoration: none;
      border: 2px solid #fff;
      padding: 10px 20px;
      transition: all 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    .image-button:before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: all 0.3s ease-in-out;
      z-index: -1;
    }

    .image-button:hover {
      color: #efef12;
    }

    .image-button:hover:before {
      left: 100%;
    }
  </style>

</head>

<body>
  <div class="main-nav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
          <img class="logo" src="{{asset('assests/images/logo.png')}}" alt="logo">
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
              <a href="services" class="signup-btn">Services</a>
            </div>
            <div class="other-option">
              <a href="contact" class="signup-btn">Contact</a>
            </div>
          </ul>

          <div class="other-option">
            <a href="/" class="logout-btn btn-danger">Log out</a>

          </div>
        </div>
      </nav>
    </div>
  </div>
  </div>
  <!-- Navbar Area End -->

  <div class="d-flex align-items-center">
    <div class="w-50 p-3 m-2" style="background-color: #a1dc7adf;">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="image-container">
          <img src="{{asset('assests/images/about1.jpg')}}" alt="Image 1" style="height: 300px; width: 100%;">
        </div>
        <div class="pt-4">
        <form class="image-button" action="{{route('category1.choose')}}" method="get" >
            <button type="submit" class="button btn-success btn-lg">Register as Farmer</button>
            </form>
          <!-- <a href="./farmer.html" class="image-button">Register As Farmer</a> -->
        </div>
      </div>
    </div>

    <div class=" w-50 p-3 m-2" style="background-color: #a1dc7adf;">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="image-container">
          <img src="{{asset('assests/images/about2.jpg')}}" alt="Image 2" style="height: 300px; width: 100%;">
        </div>
        <div class="pt-4">
        <form class="image-button" action="{{route('category2.choose')}}" method="get">
            <button type="submit" class="button btn-success btn-lg">Register Your Land</button>
        </form>
          <!-- <a href="./client.html" class="image-button">Register Your Land</a> -->
        </div>
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