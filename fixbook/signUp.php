<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Sign Up | FixBook</title>
    <!-- import favicon  -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- import font awesome  -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- import bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- import style  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- import style responsive  -->
    <link rel="stylesheet" href="assets/css/style_responsive.css">
</head>
<body>



    <main>
        <!-- start sign in -->
        <section class="signIn my-3">
         <div class="container">
            <div class="alert  bg-danger  alert-dismissible fade show" role="alert">
              <strong>
                <?php
                  if(isset($_GET["errors"])){
                    $errors = $_GET["errors"];
                    echo $errors;
                  }
                ?>
              </strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 py-3 overlay d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2>We are glad to see you with us!</h2>
                        <p>Join our!</p>
                    </div>
                </div>
                <div class="col-md-6 bg-primary d-flex justify-content-center align-items-center">
                    <form action="include/handle.php" method="post" enctype="multipart/form-data"  class="container">
                        <h2 class="text-center text-secondary my-5">Create a new account</h2>
                        <div class="row mt-3">
                            <div class="col-md-12  mb-3">
                              <input type="text" class="form-control " name="firstName" placeholder="First Name">
                            </div>
                            <div class="col-md-12  mb-3">
                              <input type="text" class="form-control "  name="lastName" placeholder="Last Name">
                            </div>
                            <div class="col-md-12  mb-3">
                              <input type="text" class="form-control "  name="email" placeholder="Email or Phone Number">
                            </div>
                            <div class="col-md-12 mb-3">
                              <input type="password" class="form-control "  name="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 mb-3">
                              <input type="password" class="form-control " name="confirmPassword" placeholder="Confirme Password">
                            </div>
                            <label for="inputState" class="form-label">specializes As</label>
                            <div class="col-md-4 mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specialize[]" value="front-end" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Front-end 
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specialize[]" value="back-end" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Back-end
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specialize[]" value="full-stack" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  js developer
                                </label>
                              </div>
                            </div>
                            <div class="col-12 mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Female
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Male
                                </label>
                              </div>
                            </div>
                            <div class="col-12 mb-3">
                              <select id="inputState" name="interest" class="form-select">
                                <option hidden value="">Interesting</option>
                                <option value="react">React</option>
                                <option value="laravel">Laravel</option>
                                <option value="vue">vue</option>
                                <option value="node">node js</option>
                              </select>
                            </div>
                            <div class="col-md-12 mb-3">
                              <input type="file" name="image" id="">
                            </div>
                            <div class="col-12">
                              <button type="submit" name="register" class="btn btn-secondary w-100  m-auto">Sign Up</button>
                            </div>
                            <p class="text-muted col-12 text-center my-3">
                              Already have an account? <a href="signIn.html" class="text-secondary">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </section>
        <!-- end sign in -->
    </main>

    

    
        <!-- import popper js -->
        <script src="assets/js/popper.min.js"></script>
        <!-- import jquery js -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <!-- import bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- import main js -->
        <script src="assets/js/main.js"></script>
</body>
</html>