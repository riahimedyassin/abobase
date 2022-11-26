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
          <ul class="navbar-nav ms-auto m-md-0 m-sm-4">
            <li class="nav-item ">
              <button type="button" class="btn btn-danger donate-button" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                DONATE NOW
              </button>

              <!-- Modal -->
              <div class="modal fade modal-margin" id="staticBackdrop" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content modal-color">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">LOGIN</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <form>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                          </div>
                          <div class="row">
                            <div class="col-md-4 col-sm-5"></div>
                            <a href="register.php"
                              class="btn button-color col-md-2 col-sm-2 me-2 align-center">Register</a>
                            <button type="submit" class="btn button-color  col-md-2 col-sm-2">Login</button>
                            <div class="col-md-4 col-sm-5"></div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>