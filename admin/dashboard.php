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
  <title>Admin Dashboard | ABO Base</title>
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
  <h1 class="dash">Dashboard</h1>
  <div class="d-flex justify-content-center">
    <div class="cont d-flex justify-content-around align-items-center">
      <a href="allusers.html" class="cont-child total-donor link-null">
        <img src="../ressource/images/dashboard/people.png" alt="" class="icon-size">
        <h3>Total Donors</h3>
        <span id="total-donors">9596</span>
      </a>

      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
        class="cont-child recent-request link-null">
        <img src="../ressource/images/dashboard/most-recent.png" alt="" class="icon-size">
        <h3>Recent Blood Requests</h3>
      </button>
      <div class="modal fade madal-custom" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Recent Blood Transfers</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                style="border:none"></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <tr>
                  <th>Hospital</th>
                  <th>User</th>
                </tr>
                <tr>
                  <td>TEST</td>
                  <td>TEST</td>
                </tr>
                <tr>
                  <td>TEST</td>
                  <td>TEST</td>
                </tr>
                <tr>
                  <td>TEST</td>
                  <td>TEST</td>
                </tr>
              </table>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <a href="allhospitals.html" class="cont-child total-donor link-null">
        <img src="../ressource/images/hospital.png" alt="" class="icon-size">
        <h3>Total Hospitals</h3>
        <span>96</span>
      </a>

    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="cont cont-reports">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">New USERS</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Rhesus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
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