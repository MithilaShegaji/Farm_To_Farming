<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="./dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@include('ClientDashboard.css')
</head>

<body>
  <div class="container">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a href="index.html">
          <img src="{{asset('assests/images/logo.png')}}" alt="Logo">
        </a>
        <div class="dropdown">
          <button class="dropbtn" onclick="toggleDropdown">
            <i class="fas fa-caret-down"></i>
          </button>
          <ul class="dropdown-content">
            <a class="dropdown-item" href="#">Action</a><br>
            <a class="dropdown-item" href="#">Another action</a><br>
            <a class="dropdown-item" href="#">Something else here</a><br>
          </ul>
        </div>
    </nav>
  </div>
  <div class="box">
    <nav class="navbar bg-body-tertiary">
      <form class="container-fluid">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">
        </div>
      </form>
    </nav>
  </div>

  <main>
    <div class="container">
      <div class="center-button">
        <button class="available-lands">Available Lands</button>
      </div>
      <div class="card">
        <div class="cards">
          <div class="card-items">
            <img src="{{asset('assests/images/p1.jpg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>
          <div class="card-items">
            <img src="{{asset('assests/images/p2.jpg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>
          <div class="card-items">
            <img src="{{asset('assests/images/p3.jpeg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>

            </div>
          </div>


          <div class="card-items">
            <img src="{{asset('assests/images/p4.jpg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="cards">
          <div class="card-items">
            <img src="{{asset('assests/images/p5.jpg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>
          <div class="card-items">
            <img src="{{asset('assests/images/p12.jpeg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>

          <div class="card-items">
            <img src="{{asset('assests/images/p6.jpg')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>


          <div class="card-items">
            <img src="{{asset('assests/images/p7.avif')}}" alt="Land">
            <div class="lines">
              <button class="View"> View</button>
              <button class="Book"> Book</button>
            </div>
          </div>
        </div>


        <div class="card">

          <div class="cards">
            <div class="card-items">
              <img src="{{asset('assests/images/p8.jpg')}}" alt="Land">
              <div class="lines">
                <button class="View"> View</button>
                <button class="Book"> Book</button>
              </div>
            </div>
            <div class="card-items">
              <img src="{{asset('assests/images/p9.jpg')}}" alt="Land">
              <div class="lines">
                <button class="View"> View</button>
                <button class="Book"> Book</button>
              </div>
            </div>

            <div class="card-items">
              <img src="{{asset('assests/images/p10.jpg')}}" alt="Land">
              <div class="lines">
                <button class="View"> View</button>
                <button class="Book"> Book</button>
              </div>
            </div>


            <div class="card-items">
              <img src="{{asset('assests/images/p11.jpg')}}" alt="Land">
              <div class="lines">
                <button class="View"> View</button>
                <button class="Book"> Book</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
  <footer class="flex-all-centre">
    <a href="index.html"> <p> copyright &copy; farmstofarming.com </p></a>
  </footer>
</body>

</html>