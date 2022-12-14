
<section class="vh-100" >
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
<form action="" method="post" class="was-validated">
                 <?= csrf_field() ?>
    <div class="form-group">
      <label for="id">enter your id:</label>
      <input type="text" class="form-control" id="id" placeholder="enter your id" name="id" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Password:</label>
      <input name="title" class="form-control"  placeholder="Enter username" required><br>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      
    </div>


    <div class="form-group">
      <label for="pbody">Password:</label>
      <input name="body" type="password" class="form-control"  placeholder="Enter password" required><br>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <div style="color:red"><?= esc($title) ?></div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



              

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

