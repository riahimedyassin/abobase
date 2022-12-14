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
          <base href="../">
        <link rel="stylesheet" href="style.css">
        <title>My Profile | ABO Base</title>
        <link rel="shortcut icon" type="image/jpg" href="ressource/icon/bloodicon.ico" />
      
      </head>
<body>
  <div class="row nav-custom">
    <nav class="navbar navbar-expand-lg navbar-color">
      <div class="container-fluid">
        <a class="navbar-brand logo-font" href="index.php">ABO Base</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav me-md-auto mx-sm-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#about">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact US</a>
            </li>

          </ul>
          
        </div>
      </div>
    </nav>
  </div>

  <h1 style="text-align: center; margin-top: 50px;color:bisque">Welcome </h1>
  <div class="d-flex justify-content-center">
    <div class="card profile-card p-3 card-color" style="width: 40rem;background-color: rgb(250, 215, 227); color: black;">
      
      
      <div class="card-body">
        <h5 class="card-title">Nom et Prenom</h5>
        <h5 class="card-text">Blood Type : A/B/AB/O</h5>
        <h5 class="card-text">Rhesus + / Rhesus -</h5>
        <h3 class="card-text">Availibilty : Available</h3>
        <p class="card-text">Joined Since : </p>
        <a href="#" class="btn button-color">Change Availibility</a>
        <br>
        <a href="index.php" class="btn btn-danger " style="margin-top:20px">Disconnect</a>
      </div>
    </div>
  </div>
    <footer class="d-flex p-4 justify-content-around footerc">
        <div class="col-md-4">
          <div class="d-flex row justify-content-between align-content-center">
            <div class="footer-catg">Contact US</div>
            <div class="m-3">
              <a href="https://www.facebook.com/8I93f/" target="_blank"><img src="ressource/icon/facebook.png"
                  alt="facebook" class="icon-size"></a>
              <a href="https://www.linkedin.com/in/riahi-yassin-32ba05243/" target="_blank"><img
                  src="ressource/icon/linkedin.png" alt="linkedin" class="icon-size"></a>
              <a href="https://twitter.com/8_93f" target="_blank"><img src="ressource/icon/twitter.png" alt="twitter"
                  class="icon-size"></a>
            </div>
          </div>
    
        </div>
        <div class="col-md-4 m">
          <div class="footer-catg"> Agreement and Privacy</div>
          <div class="col">
            <div class="d-flex justify-content-around flex-column align-center">
              <a href="privacy.html" class="link-null">Read the Privacy</a>
              <a href="founders.html" class="link-null">Founders</a>
              <a href="admin/login.php" class="link-null">Admin</a>
              <a href="hospital/Hlogin.php" class="link-null">Hospital</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-catg">Copyright</div>
          <div class="col">
            <div class="d-flex align-center justify-content-center p-3">
              <img src="ressource/icon/copyright.png" alt="" class="icon-size">
              <div>ABO-Base 2022</div>
            </div>
          </div>
        </div>
      </footer>

</body>
</html>