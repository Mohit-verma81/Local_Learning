<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Multi Step Form with Progress Bar Example </title>
      <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
      <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
     <!-- Style CSS -->
    <link rel="stylesheet" href="css/multi_form.css">
	<!-- Demo CSS -->
    <link href="/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="css/demo.css">

  </head>

  <body>
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Local Learning</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/courses" class="nav-item nav-link">Courses</a>

            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('course') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Now<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

 <main>
  <article>

      <!-- Start Multiform HTML -->
  <section class="multi_step_form">
  <form id="msform">
    <!-- Tittle -->
    <div class="tittle">
      <h2>Verification Process</h2>
      <p>In order to use this service, you have to complete this verification process</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Verify Phone</li>
      <li>Upload Documents</li>
      <li>Security Questions</li>

    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h3>Setup your phone</h3>
      <h6>We will send you a SMS. Input the code to verify.</h6>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="tel" id="phone" class="form-control" placeholder="+880">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="+8801123456789">
        </div>
      </div>
      <button type="button" class="action-button previous_button">Send Otp</button>
      <div class="done_text">
        <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
        <h6>A secret code is sent to your phone. <br>Please enter it here.</h6>
      </div>
      <div class="code_group">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
      </div>
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>
    </fieldset>
    <fieldset>
      <h3>Verify Your Identity</h3>
      <h6>Please upload any of these documents to verify your Identity.</h6>
      <div class="passport">
        <h4>Govt. ID card <br>PassPort <br>Driving License.</h4>
        <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
      </div>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="upload">
          <label class="custom-file-label" for="upload"><i class="ion-android-cloud-outline"></i>Choose file</label>
        </div>
      </div>
      <ul class="file_added">
        <li>File Added:</li>
        <li><a href="#"><i class="ion-paperclip"></i>national_id_card.png</a></li>
        <li><a href="#"><i class="ion-paperclip"></i>national_id_card_back.png</a></li>
      </ul>
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>
    </fieldset>
    <fieldset>
      <h3>Create Security Questions</h3>
      <h6>Please update your account with security questions</h6>
      <div class="form-group">
        <select class="product_select">
          <option data-display="1. Choose A Question">1. Choose A Question</option>
          <option>2. Choose A Question</option>
          <option>3. Choose A Question</option>
        </select>
      </div>
      <div class="form-group fg_2">
        <input type="text" class="form-control" placeholder="Anwser here:">
      </div>
      <div class="form-group">
        <select class="product_select">
          <option data-display="1. Choose A Question">1. Choose A Question</option>
          <option>2. Choose A Question</option>
          <option>3. Choose A Question</option>
        </select>
      </div>
      <div class="form-group fg_3">
        <input type="text" class="form-control" placeholder="Anwser here:">
      </div>
      <button type="button" class="action-button previous previous_button">Back</button>
      <a href="#" class="action-button">Finish</a>
    </fieldset>
  </form>
</section>
      <!-- END Multiform HTML -->
  </article>
 </main>

  <footer class="credit">Author: Hyser - Distributed By: <a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank">CodeHim</a></footer>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script src="js/multi_form_script.js"></script>

  </body>
</html>
