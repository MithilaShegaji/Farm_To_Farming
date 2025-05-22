<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Land Registration</title>
  <link rel="stylesheet" href="./style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
<?php echo $__env->make('Client.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</head>

<body>
<div class="container">
  <main>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3 hello">Personal Details</h4>


<!-- form -->
      <form class="needs-validation" action="<?php echo e(route('client.register')); ?>" method="post" >
      <?php echo csrf_field(); ?>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label white">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First name" value="" required=""
              fdprocessedid="5enxan" />
            <div class="invalid-feedback">Valid first name is required.</div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label white">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastName" placeholder="" value="" required=""
              fdprocessedid="4w3wj" />
            <div class="invalid-feedback">Valid last name is required.</div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label white">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" required=""
                fdprocessedid="455iia" />
              <div class="invalid-feedback">Your username is required.</div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label white">Email
            </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" fdprocessedid="5r2pg" />
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label white">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required=""
              fdprocessedid="qyoan" />
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12">
            <label for="address2" class="form-label white">Address 2
              <span class="text-body-secondary">(Optional)</span></label>
            <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite"
              fdprocessedid="bqrky" />
          </div>

          <div class="col-md-5">
            <label for="state" class="form-label white">State</label>
            <select class="form-select" name="state" id="state" required="" fdprocessedid="80jvne">
              <option value="">Choose...</option>
              <option>Karnataka</option>
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>

          <div class="col-md-4">
                <label for="state" class="form-label white">District</label>
                <input type="text" class="form-control" name="district" id="district" placeholder="" required="" fdprocessedid="qi13ae" />
                <div class="invalid-feedback">
                  Please provide a valid district.
                </div>
              </div>

          <div class="col-md-3">
            <label for="zip" class="form-label white">Pincode</label>
            <input type="text" class="form-control" name="pincode" id="zip" placeholder="Pincode" required="" fdprocessedid="00x4i" />
            <div class="invalid-feedback">Pincode required.</div>
          </div>
        </div>


        <hr class="my-4" />


        <!-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info" />
          <label class="form-check-label" for="save-info save">Save this information for next time</label>
        </div> -->

        <!-- <hr class="my-4" /> -->
        <h5 class="mb-3 hello">Land Details</h5>
        <div class="col-12">
          <label for="dimmension" class="form-label white">Dimensions</label>
          <div class="input-group has-validation">

            <input type="text" class="form-control" name="dimmension" id="dimension" placeholder="xx Sqmtrs" required=""
              fdprocessedid="455iia" />
            <div class="invalid-feedback">Land dimension is required.</div>
          </div>
        </div>
        <h5 class="mb-3 white"> Location </h5>

        <div class="row g-3">
          <div class="col-sm-6">
            <label for="location" class="form-label white">Longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" placeholder="" value="" required=""
              fdprocessedid="5enxan" />
            <div class="invalid-feedback">Longitude is required.</div>
          </div>

          <div class="col-sm-6">
            <label for="latitude" class="form-label white">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" placeholder="" value="" required=""
              fdprocessedid="4w3wj" />
            <div class="invalid-feedback">Latitude is required.</div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label white">Soil Report</label>
            <div class="input-group has-validation">
                <input type="file" name="soilreport" id="myFile" >
              </form>
              <div class="invalid-feedback">Soil Report is required.</div>
            </div>
          </div>

          <div class="col-12">
            <label for="BhoomiLandId" class="form-label white">Bhoomi Land-Id</label>
            <div class="input-group has-validation">

              <input type="text" class="form-control" name="BhoomiLandId" id="BhoomiLandId" placeholder="" required=""
                fdprocessedid="455iia" />
              <div class="invalid-feedback">Land ID is required.</div>
            </div>
          </div>

          <hr class="my-4" />

          <button class="w-100 btn btn-success btn-lg" type="submit" fdprocessedid="2wmdfk">
            Register Land
          </button>
      </form>
    </div>
</div>
</main>

<footer class="my-5 pt-5 text-body-secondary text-center text-small">
  <p class="mb-1 white">Farms To Farming</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
</footer>
</div>
  </body>

</html><?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/Client/client.blade.php ENDPATH**/ ?>