<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Farmer Registration</title>
  <link rel="stylesheet" href="./style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <?php echo $__env->make('Farmerregisteration.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="body1">
  <div class="container">
    <main>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 hello">Farmer Details</h4>


        <!-- form -->


        <form class="needs-validation" action="<?php echo e(route('farmer.register')); ?>" method="post">
        <?php echo csrf_field(); ?>
          <div class="row g-3">
            <!-- Your form fields here -->
            <div class="col-sm-6">
              <label for="firstName" class="form-label white">First name</label>
              <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First name" value="" required=""
                fdprocessedid="8u67y9" />
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label white">Last name</label>
              <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last name" value="" required=""
                fdprocessedid="7b9je6" />
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label white">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required=""
                  fdprocessedid="4ug9ag" />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label white">Email </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com"
                fdprocessedid="4suotl" />
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label white">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required=""
                fdprocessedid="so4zo8" />
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label white">Address 2
                <span class="text-body-secondary">(Optional)</span></label>
              <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite"
                fdprocessedid="gk66ba" />
                

                
            </div>
            <div class="col-md-5">
                <label for="state" class="form-label white">State</label>
                <select class="form-select" name="state" id="state" required="" fdprocessedid="nrx2do">
                  <option value="">Choose...</option>
                  <option value="AN">Andaman and Nicobar Islands</option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CH">Chandigarh</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="DN">Dadra and Nagar Haveli</option>
                  <option value="DD">Daman and Diu</option>
                  <option value="DL">Delhi</option>
                  <option value="GA">Goa</option>
                  <option value="GJ">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                  <option value="JH">Jharkhand</option>
                  <option value="KA">Karnataka</option>
                  <option value="KL">Kerala</option>
                  <option value="LA">Ladakh</option>
                  <option value="LD">Lakshadweep</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="MH">Maharashtra</option>
                  <option value="MN">Manipur</option>
                  <option value="ML">Meghalaya</option>
                  <option value="MZ">Mizoram</option>
                  <option value="NL">Nagaland</option>
                  <option value="OR">Odisha</option>
                  <option value="PY">Puducherry</option>
                  <option value="PB">Punjab</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="SK">Sikkim</option>
                  <option value="TN">Tamil Nadu</option>
                  <option value="TG">Telangana</option>
                  <option value="TR">Tripura</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="UT">Uttarakhand</option>
                  <option value="WB">West Bengal</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid State.
                </div>
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
              <input type="text" class="form-control" name="pincode" id="zip" placeholder="" required="" fdprocessedid="qi13ae" />
              <div class="invalid-feedback">Pincode required.</div>
            </div>
          </div>

          <hr class="my-4" />

          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info" />
            <label class="form-check-label save" for="save-info">Save this information for next time</label>
          </div>
          <hr class="my-4" /> -->
          <button class="w-100 btn btn-primary btn-lg" type="submit">
            Register
          </button>
        </form>
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
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="checkout.js"></script>


</body>

</html><?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/Farmerregisteration/farmer.blade.php ENDPATH**/ ?>