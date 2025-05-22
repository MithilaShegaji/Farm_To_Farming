<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="./style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  @include('Auth.layout.css')
</head>

<body class="changebdy">
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3">
              <span color="black">Log In </span><span color="black">Sign Up</span>
            </h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3 white">Log In</h4>
                      <div class="form-group">

                        <form action="{{route('login.authenticate')}}" method="post">
                        @csrf
                          <input type="email" name="email" class="form-style" placeholder="Your Email" id="email"
                            autocomplete="off" />
                            <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                          <i class="input-icon uil uil-at"><img src="{{ asset('svg/envelope-at-fill.svg') }}" />

                          </i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="password" class="form-style" placeholder="Your Password"
                          id="password" autocomplete="off" />
                          <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                        <i class="input-icon uil uil-lock-alt"><img src="{{ asset('svg/lock-fill.svg') }}" />
                        </i>
                      </div>
                      <button type="submit" class="btn  butt1">
                        Login
                      </button>
                      </form>

                      <p class="mb-0 mt-4 text-center">
                        <a href="#0" class="link">Forgot your password?</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3 white">Sign Up</h4>

                      <form action="{{route('signup.create')}}" method="post"> 
                      @csrf
                      <div class="form-group">
                        <input type="text" name="name" id="name" class="form-style" placeholder="Your Full Name" 
                          autocomplete="off" />
                          <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                        <i class="input-icon uil uil-user"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="email" name="email" id="logemail" class="form-style" placeholder="Your Email" 
                          autocomplete="off" />
                          <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="password" id="password" class="form-style" placeholder="Your Password"
                           autocomplete="off" />
                           <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <!-- <div class="form-group mt-2">
                        <input type="password" name="cnfpswrd" id="cnfpswrd" class="form-style" placeholder="Confirm Password"
                           autocomplete="off" />
                           <span class="text-danger">
                            @error('cnfpswrd')
                            {{$message}}
                            @enderror
                        </span>
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div> -->
                      <button type="submit" class="btn  butt1">Signin</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>