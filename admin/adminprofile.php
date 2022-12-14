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
    <title>Admin Profile | ABO Base</title>
    <link rel="shortcut icon" type="image/jpg" href="../ressource/icon/admin.ico" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light d-flex justify-content-around nav-custom navbar-color">
        <div class="d-flex justify-content-around align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="dashboard.html">Dashboard</a>
                    <a class="nav-link" href="allusers.html">All Users</a>
                    <a class="nav-link" href="allhospitals.html">All Hospitals</a>
                    <a href="adminprofile.html" class="nav-link"><img src="../ressource/icon/user-profile.png" alt=""
                            class="nav-icon"></a>
                </div>
            </div>

        </div>
    </nav>
    <div class="d-flex justify-content-center p-3">
        <div class="cont  profile-cont d-flex flex-column justify-content-center align-content-center ">
            <div class="d-flex align-content-center flex-column align-items-center">
                <h1>Riahi Yassin</h1>
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
                <a  href="login.html"class="btn btn-danger">Disconnect</a>
            </div>
            <div>
                <div class="social-media d-flex justify-content-between align-center m-5 flex-sm-wrap flex-wrap">
                    <a href="https://github.com/riahimedyassin" target="_blank">
                        <div class="d-flex justify-content-center align-center ">
                            <img src="../ressource/icon/github.png" alt="" class="nav-icon">
                        </div>
                    </a>
                    <a href="https://www.behance.net/fernandoyassin" target="_blank">
                        <div class="d-flex justify-content-center align-center ">
                            <img src="../ressource/icon/behance.png" alt="" class="nav-icon">
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/in/riahi-yassin-32ba05243/" target="_blank">
                        <div class="d-flex justify-content-center align-center ">
                            <img src="../ressource/icon/linkedinblack.png" alt="" class="nav-icon">
                        </div>
                    </a>
                    <a href="https://www.facebook.com/8I93f/" target="_blank">
                        <div class="d-flex justify-content-center align-center ">
                            <img src="../ressource/icon/facebookblack.png" alt="" class="nav-icon">
                        </div>
                    </a>
                    <a href="https://twitter.com/8_93f" target="_blank">
                        <div class="d-flex justify-content-center align-center ">
                            <img src="../ressource/icon/twitterblack.png" alt="" class="nav-icon">
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
    







</body>

</html>