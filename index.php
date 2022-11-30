<?php 
    






?> 


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
  <title>Home | ABO Base</title>
  <link rel="shortcut icon" type="image/jpg" href="ressource/icon/bloodicon.ico" />

</head>

<body>
  <span id="home"></span>
  <?php include "pages/home/navbar.php" ?>
  <div class="row">
    <h1 class="col welcome">
      Welcome to ABO Base
    </h1>
    <img src="ressource/images/blood.png" style="width:30%;margin-right: 3%;" class="logo" alt="">
  </div>
  <div class="row">
    <div class="col-2"></div> 
    <h4 class="col slogon">
      Help , Donate and Save a Life !
    </h4>
  </div>
  <div class="row">
    <div style="height:180px"></div>
  </div>
  <div id="about"></div>
  <div class="white ">
    <hr>
    <div class="row d-flex align-center">
      <h2>About US</h2>
    </div>
    <div class="row d-flex justify-content-around">
      <div class="card card-color card-hover col-md-3" style="width: 20rem;">
        <a href="privacy.html#isa"><img src="ressource/images/identite.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Register Secured</h5>
          <p class="card-text">All of your data will be stored,manipulated and used in a safe way</p>
        </div>
      </div>
      <div class="card card-color card-hover col-md-3" style="width: 20rem;">
        <a href="privacy.html#isk"><img src="ressource/images/donate.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Donate Safely</h5>
          <p class="card-text">Your donations will be realised only in Hospitals with good equipments</p>
        </div>
      </div>
      <div class="card card-color card-hover col-md-3" style="width: 20rem;">
        <a href="privacy.html#icu stretched-link"><img src="ressource/images/hospital.png" class="card-img-top" alt="hospital"></a>
        <div class="card-body">
          <h5 class="card-title">Data only for Hospitals</h5>
          <p class="card-text">Your data will be manipulated only by Hospitals in emergency</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
    <div class="col m-md-4 m-sm-3 card-color">
      To facilitate and secure the transfer of blood in case of emergencies, and instead of randomly looking for
      donors that we need to test their blood, and therefore,
      a waste of time, the creation of a blood database. can make this task easier and can save someone's life.
    </div>
    <div class="col-md-2"></div>
      </div>
      <div class="row d-flex justify-content-center ">
        <button type="button" class="btn btn-danger donate-button-body donate-button" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                DONATE NOW
        </button>
      </div>
      <div id="contactus"></div>
      <hr>
      <div class="row d-flex align-center">
        <h2>Contact US</h2>
      </div>
      <div class="row white m-5 p-2">
        <div class="row g-0 bg-contact position-relative">
          <div class="col-md-6 mb-md-0 p-md-4">
            <h2 class="mt-0">You Can Find Us On</h2>
              <ul class="contact-links d-flex flex-column align-content-start">
                <li><a href="" target="_blank" class="facebook">Facebook</a></li>
                <li><a href="" target="_blank" class="instagram">Instagram</a></li>
                <li><a href="" target="_blank" class="facebook">LinkedIn</a></li>
                <li><a href="" target="_blank" class="behance">Behance</a></li>
              </ul>
          </div>
          <div class="col-md-6 p-4 ps-md-0 ">
            <h2 class="mt-0">Send US an Email</h2>
                <div class="row ">
                  <form class="d-flex flex-column justify-content-start p-3" action=””
                  method=”POST”
                  enctype=”text/plain”
                  name=”EmailForm”>
                    <div class="mb-3 ">
                      <label for="exampleInputEmail1" class="form-label">Your Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Message</label>
                      <textarea type="text" class="form-control" id="exampleInputPassword1" style="height:100px"></textarea>
                    </div>
                    <button type="submit" class="btn button-color">Submit</button>
                  </form>
                </div>
            
          </div>
        </div>
      </div>


    </div>
  </div>
  <?php include "pages/donate.php" ?>
  <?php include "pages/home/homefooter.php"?>
</body>

</html>