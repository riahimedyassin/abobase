<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Register | ABO Base</title>
  <link rel="shortcut icon" type="image/jpg" href="ressource/icon/bloodicon.ico" />
  <script src="registercontrol.js"></script>

</head>

<body>
  <?php include "pages/home/navbar.php" ?>
  <div class="row m-5">
    <div class="register-container">
      <div class="">
        <form action="user/userprofile.php" method="post" name="regform" onsubmit="return register()">
          <div class="form-title">REGISTER</div>
          <div class="row g-3 mb-4">
            <div class="col">
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                id="register-name" name="r-name">
              <div id="wrongwrite" class="wrong"></div>
            </div>
            <div class="col">
              <label for="exampleInputEmail1" class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                id="register-last-name">
              <div id="wrong-forname" class="wrong"></div>
            </div>

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" id="register-email">
            <div id="emailHelp" class="form-text">Only Valide Mails</div>
            <div id="wrongemail" class="wrong"></div>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="register-password">
            <div id="wrongpass" class="wrong"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Retype Password</label>
            <input type="password" class="form-control" id="register-password-2">
            <span class="wrong" id="wrong-match"></span>
          </div>
          <div class="row g-3 mb-4">
            <div class="col">
              <label for="exampleInputEmail1" class="form-label">BloodType</label>
              <select class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Choose Your Blood Type</option>
                <option value="b1">A</option>
                <option value="b2">B</option>
                <option value="b3">AB</option>
                <option value="b4">O</option>
              </select>
            </div>
            <div class="col">
              <label for="exampleInputEmail1" class="form-label">Rhesus Type</label>
              <select class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Choose Your Rhesus Type</option>
                <option value="r1">Rh+</option>
                <option value="r2">Rh-</option>
              </select>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col">
              <label for="exampleInputEmail1" class="form-label">Do you have any tattos</label>
              <select class="form-select form-select" aria-label=".form-select-lg example">
                <option>Answaer : Yes or No</option>
                <option value="t1">Yes</option>
                <option value="t2">No</option>
                <option value="t3">I used to have one</option>
              </select>
            </div>
            <div class="col">
              <label for="exampleInputEmail1" class="form-label">Any serious sickness</label>
              <select class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Answer </option>
                <option value="s1">Yes</option>
                <option value="s2">No</option>
              </select>
            </div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="agreement">
            <label class="form-check-label" for="exampleCheck1">I agree to <a href="privacy.html" class="link-white">the
                privacy of this website</a></label>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5"></div>
            <input type="submit" class="btn button-color  col-md-2 col-sm-2" value="Register">
            <div class="col-md-5 col-sm-5"></div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <?php include "pages/home/homefooter.php" ?>
  

</body>

</html>