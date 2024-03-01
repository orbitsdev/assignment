<?php
include("backend/methods.php");
include('backend/preventaccess/is_login.php')
?>
<!doctype html>
<html lang="en">

<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontend/style.css">
</head>

<body>

  <!-- <img src="frontend/images/pexels-pixabay-415829.jpg" alt="" style="width: 100px; height: 100px;"> -->
  <div class="section">
    <div class="container">
      <?php
      include('backend/database/connection_indicator.php');
      ?>

      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                  <?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Clear the session errors after displaying them -->
        <?php unset($_SESSION['errors']); ?>
    <?php endif; ?>
                    <form class="section text-center" action="backend/forms/login.php" method="post">
                      <h4 class="mb-4 pb-3">Log In
                      </h4>
                      <div class="form-group">
                        <input type="email" class="form-style" placeholder="Email" name="email">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" class="form-style" placeholder="Password" name="password">
                        <i class="input-icon uil uil-lock-alt "></i>
                      </div>
                      <button type="submit" class="btn mt-4" name="login">Login</a>

                    </form>
                   
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <form action="backend/forms/register.php" method="post">
                        <h4 class="mb-3 pb-3">Sign Up</h4>
                        <div class="form-group">
                          <input type="text" class="form-style" placeholder="Full Name" name="fullname">
                          <i class="input-icon uil uil-user"></i>
                        </div>

                        <div class="form-group mt-2">
                          <input type="email" class="form-style" placeholder="Email" name="email">
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Password" name="password">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4" name="send">Register</button>
                      </form>
                    </div>
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
</body>

</html>