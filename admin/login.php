
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
      <link rel="stylesheet" href="adminstyle.css">
      <title>Admin Login | ABO Base</title>
      <link rel="shortcut icon" type="image/jpg" href="../ressource/icon/admin.ico" />
      <script src="admincontrol.js"></script>
    
    
    </head>
<body>
    <nav class="navbar nav-custom navbar-color d-flex justify-content-center" >
          <a class="navbar-brand " href="../home.html" >ABO Base</a>
    </nav>
    <div class="row" style="margin-top:7%">
        <div class="d-flex justify-content-center ">
            <form class="d-flex flex-column align-content-center admin-login" onsubmit="return login()" method="POST" action="dashboard.php">
                <div class="col d-flex justify-content-center">
                    <img src="../ressource/icon/admin.png" alt="" style="width:30%">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                  <span id="wronguser" class="wrong"></span>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                  <span id="wrongpass" class="wrong"></span>
                  <?php 
                    if (isset($error)) {echo 'nexsite pas';} 
        
                  ?>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn button-color"name="logme">Login</button>
            </form>
              
        </div>
        
    </div>
    <footer>
        <div class="row d-flex align-content-center justify-content-center">
            <div class="col d-flex align-content-center justify-content-center">
                <a href="https://www.linkedin.com/in/riahi-yassin-32ba05243/" target="_blank" class="report">
                    Report a Problem
                </a>
            </div>
        </div>
    </footer>

      
    

    
</body>
</html>