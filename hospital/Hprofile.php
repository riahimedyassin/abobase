<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Settings | ABO BASE</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../admin/adminstyle.css">
  <link rel="shortcut icon" type="image/jpg" href="../ressource/icon/hospt.ico" />
</head>
<body>
  <?php include "../pages/hospital/hnav.php" ?>
  <div class="d-flex justify-content-center p-3 m-3">
    <div class="cont  profile-cont d-flex flex-column justify-content-center align-content-center ">
      <div class="d-flex align-content-center flex-column align-items-center">
        <h1>Hospital Name</h1>
        <h2>exemple@gmail.com</h2>
        <h3>Change Password ?</h3>
      </div>
      <div class="d-flex justify-content-start align-content-center m-3 align-items-center">
        <label for="">New password</label>
        <input type="password" name="" id="changePass" class="form-control input-resize">
        <label for="">Retype Password</label>
        <input type="password" name="" id="changePassConfirm" class="form-control input-resize">
      </div>
      <div class="d-flex justify-content-center">
        <a href="hlogin.php" class="btn btn-danger">Disconnect</a>
      </div>
    </div>
  </div>
  <?php include "../pages/hospital/hfooter.php" ?>
</body>

</html>