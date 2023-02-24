<?php include_once('include.php');


  if(isset($_SESSION['id'])){
    header('Location: ' . URL . 'feed.php');
  }

    if(!isset($remember)){
      $remember = null;
    }

  if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    if (isset($_POST['signin'])){       
      [$er_mail, $er_psw] = $__User->form_connexion($mail, $psw, $remember);

      if (!empty($er_mail)) {
        $__Notification->notif('Log In',$er_mail,'2','danger');
      } elseif (!empty($er_psw)) {
        $__Notification->notif('Log In',$er_psw,'2','danger');
      }
      
    }elseif (isset($_POST['register'])){
      
      [$e_lgn, $e_slgn, $e_mail, $e_psw, $e_birthday, 
        $e_sex] = $__User->form_inscription($lgn, $slgn, $mail, $psw, $day, $month, $year, $sex, $actu);
    $er=$e_lgn.$e_sex.$e_birthday.$e_psw.$e_mail.$e_slgn;
    $__Notification->notif('Register',$er,'2','danger');
    }
  }
 ?>

  <body class="bg-gray">
    <!-- Login -->

    <div class="container mt-5 pt-5 d-flex flex-column flex-lg-row justify-content-evenly">

      <!-- heading -->
      <div class="text-center text-lg-start mt-0 pt-0 mt-lg-5 pt-lg-5">
        <h1 class="text-primary fw-bold fs-0"><span style="font-family: roman;">Mino</span></h1>
        <p class="w-75 mx-auto fs-4 mx-lg-0">Mino helps you connect and share with the people in your life.</p>
      </div>


      <!-- form card -->
      <div style="max-width: 28rem; width: 100%">
        <!-- login form -->
        <!-- first was form tag -->
        <div class="bg-white shadow rounded p-3 input-group-lg" style="font-size: 13px;">
          <form method="POST">

        <input type="email" class="form-control my-3" name="mail" placeholder="Email address" value="<?php if(isset($mail) && !isset($_COOKIE['comail'])){ echo $mail; } if(isset($_COOKIE['comail'])){ echo urldecode($_COOKIE['comail']); }?>" required />


          <input type="password" class="form-control my-3" name="psw" placeholder="Password"  value="<?php if(isset($_COOKIE['copassword'])){ echo $__Crypto->decryptWithPassword($_COOKIE['copassword'], $__Secret__key); } ?>" required />

          <button type="submit" name="signin" class="btn btn-primary w-100 my-3" style="height: 40px;text-align: ;justify-content: center;">Log In</button>
          </form>
          <a href="forgot.php" class="text-decoration-none text-center"><p>Forgotten password?</p></a>
          <!-- create form -->
          <hr />

          <div class="text-center my-4">
            <button class="btn btn-success btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#createModal">Create New Account</button>
          </div>
          <!-- create modal -->





          <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <!-- head -->
                <div class="modal-header">
                  <div>
                    <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
                    <span class="text-muted fs-7">It's quick and easy.</span>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body">
                  <form method="POST">
                    <!-- names -->
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="First name" name="lgn" maxlength="20" value="<?php if(isset($lgn)){ echo $lgn; } ?>" required />
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Surname" name="slgn" maxlength="20" value="<?php if(isset($slgn)){ echo $slgn; } ?>" required />
                      </div>
                    </div>
                    <!-- email & pass -->

                   <input type="email" class="form-control my-3" name="mail" placeholder="Email address" required />

                  <input type="password" class="form-control my-3" name="psw" placeholder="Password" required />

                    <div class="row my-3">
                      <span class="text-muted fs-7">Date of birth <i class="fas fa-question-circle" data-bs-toggle="popover" type="button" data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>
                      <div class="col">
                      <select class="form-select" name="day">
                        <?php if (isset($day) && !empty($day)){ ?>
                          <option value="<?= $day ?>"><?= $day ?></option>
                        <?php } ?>
                        <option value="" hidden>Day</option>
                        <?php for($r = 1; $r <= 31; $r++) { ?>
                        <option value="<?= $r ?>"><?= $r ?></option>
                        <?php } ?>
                      </select>
                      </div>
                      <div class="col">
                      <select class="form-select" name="month">
                        <?php if (isset($month) && !empty($month)){ $monthName = $__Crypt_password->month($month);?>  
                          <option value="<?= $month ?>"><?= $monthName ?></option><?php }  ?>
                          <option value="" hidden>Month</option>
                          <?php for($r = 1; $r <= 12; $r++) {$monthName = $__Crypt_password->month($r);?>
                          <option value="<?= $r ?>"><?= $monthName ?></option><?php } ?>
                      </select>
                      </div>
                      <div class="col">
                        <select class="form-select" name="year">
                        <?php if (isset($year) && !empty($year)){ ?>  
                          <option value="<?= $year ?>"><?= $year ?></option><?php } ?>
                          <option value="" hidden>Année</option>
                          <?php for($r = date('Y', strtotime(date('Y-m-d') . '-18 years')); $r >= date('Y', strtotime(date('Y-m-d') . '-80 years')); $r--) { ?>
                          <option value="<?= $r ?>"><?= $r ?></option><?php } ?>
                        </select>
                      </div>
                    </div>
                    <!-- gender -->
                    <div class="row my-3">
                      <span class="text-muted fs-7">Gender <i class="fas fa-question-circle" data-bs-toggle="popover" type="button" data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>
                      <div class="col d-none">
                        <div class="border rounded p-2">
                          <label class="form-check-label" for="flexRadioDefault1">Male </label>
                          <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" <?php if((isset($sex) && $sex == 1) || (!isset($sex))){ echo 'checked="checked"';} ?> value="1" />
                        </div>
                      </div>
                      <div class="col d-none">
                        <div class="border rounded p-2">
                          <label class="form-check-label" for="flexRadioDefault1">Female </label>
                          <input class="form-check-input" type="radio" id="flexRadioDefault2"  <?php if(isset($sex) && $sex == 2){ echo 'checked="checked"';} ?> name="sex" value="2" />
                        </div>
                      </div>
                      <div class="col d-none">
                        <div class="border rounded p-2">
                          <label class="form-check-label" for="flexRadioDefault1">Custom </label>
                          <input class="form-check-input" type="radio" <?php if(isset($sex) && $sex == 3){ echo 'checked="checked"';} ?> name="sex" value="3" id="flexRadioDefault3" />
                        </div>
                      </div>
                    </div>
                    <!-- gender select -->
                    <div name='sex' id="genderSelect">
                      <select class="form-select">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Custom</option>
                      </select>
                      <div class="my-3">
                        <span class="text-muted fs-7">Your actu text is visible to everyone.</span>
                        <input type="text" class="form-control" placeholder="Actu text" name="actu" required />
                      </div>
                    </div>
                    <!-- disclaimer -->
                    <div>
                      <span class="text-muted fs-7">By clicking Sign Up, you agree to our Terms, Data Policy....</span>
                    </div>
                    <!-- btn -->
                    <div class="text-center mt-3">
                      <button type="submit" class="btn btn-success btn-lg" name="register" data-bs-dismiss="modal">Sign Up</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modal end -->
        </div>
        <!-- tag -->

        <div class="my-5 pb-5 text-center">
          <p class="fw-bold"><a href="#" class="text-decoration-none text-dark">Createa a Page</a> <span class="fw-normal">for a celebrity, band or business.</span></p>
        </div>

      </div>
    </div>




    <!-- Footer -->
    <footer class="bg-white p-4 text-muted">
      <div class="container">
        <!-- actions -->
        <div class="d-flex flex-wrap">
          <p class="mx-2 fs-7 mb-0">Sign Up</p>
          <p class="mx-2 fs-7 mb-0">Login</p>
          <p class="mx-2 fs-7 mb-0">Mino Messenger</p>
          <p class="mx-2 fs-7 mb-0">Mino Lite</p>
          <p class="mx-2 fs-7 mb-0">Watch</p>
          <p class="mt-4 mx-2"><p class="fs-7">Mino &copy; 2021</p></p>
        </div>
      </div>
    </footer>
  </body>
<script src="./bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./main.js"></script>
</html>
