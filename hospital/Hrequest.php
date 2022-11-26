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
    <div class="d-flex justify-content-center">
        <div class="categorie m-md-5 m-sm-3 cont">
            <div class="row m-md-5 m-sm-3">
                <h1 class="col title align-logo" style="text-align:center">Categories</h1>
            </div>
            <div class=" d-flex justify-content-center align-content-center">
                <div class="row m-sm-3 ">
                    <div class="col icons-marg">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-3" role="group" aria-label="First group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">Rh+</a>
                            </div>
                            <div class="btn-group me-3" role="group" aria-label="First group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">Rh-</a>
                            </div>
                            <div class="btn-group me-3" role="group" aria-label="Second group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">A</a>
                            </div>
                            <div class="btn-group me-3" role="group" aria-label="Third group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">B</a>
                            </div>
                            <div class="btn-group me-3" role="group" aria-label="fourth group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">AB</a>
                            </div>
                            <div class="btn-group me-3" role="group" aria-label="fourth group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">O</a>
                            </div>
                            <div class="btn-group me-3 " role="group" aria-label="fourth group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">Available</a>
                            </div>
                            <div class="btn-group me-3" role="group" aria-label="fourth group">
                                <a href="#" class="btn btn-primary " role="button" data-bs-toggle="button"
                                    aria-pressed="true">Not Available</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="d-flex justify-content-center">
        <div class="cont cont-reports">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">BloodType</th>
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

    <?php include "../pages/hospital/hfooter.php" ?>
</body>

</html>