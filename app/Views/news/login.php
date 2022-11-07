

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="http://localhost/kawalpowertool/views/shop.jpg"
                alt="nikl" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

                <form action="" method="post">
                 <?= csrf_field() ?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                   
                    <label for="body" id="form2Example27" class="form-control form-control-lg" >Username</label>
    		   <input type="input" name="title" class="form-label"><br>

                  </div>

                  <div class="form-outline mb-4">
                   
                    <label for="body" id="form2Example27" class="form-control form-control-lg" >Password</label>
    			<textarea name="body" class="form-label"></textarea><br>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" name="submit" value="login" >
                  </div>

        
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

