<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <title>F2F</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
          <?php echo $__env->make('layout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </head>
<body>
    <div class="main-nav">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
              <img class="logo" src="<?php echo e(asset('assests/images/logo.jpeg')); ?>" alt="logo">
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
                      <a href="" class="signup-btn">Services</a>
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
    

    <div class="header">
        <h1 class="neon">Farms to Farming</h1>
       <div>
        <p class="text-danger typing-animation">Lands to hand: Join us in cultivating a prosperous future</p>
    </div>
    </div>
    
    <footer>
        <p>Contact us at: <a href="mailto:e21@bmsit.in">e21@bmsit.in</a></p>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/index.blade.php ENDPATH**/ ?>