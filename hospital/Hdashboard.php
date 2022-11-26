<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Dashboard | ABO BASE</title>

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
  <h1 class="dash">Dashboard</h1>
  <h2 class="dash">Hospital Name</h2>
  <div class="d-flex justify-content-center">
    <div class="cont d-flex justify-content-around align-items-center">
      <a href="hrequest.php" class="cont-child total-donor link-null">
        <img src="../ressource/images/dashboard/people.png" alt="" class="icon-size">
        <h3>Request a Donator</h3>
      </a>
      <a href="hprofile.php" class="cont-child total-donor link-null">
        <img src="../ressource/images/hospital.png" alt="" class="icon-size">
        <h3>Settings</h3>
      </a>

    </div>
  </div>
  <?php include "../pages/hospital/hfooter.php" ?>




</body>

</html>