<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SÜMEYYE ŞAHİN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- ✅ Load CSS file for DataTables  -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
            integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        header{
            padding: 70px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg shadow-lg p-3 mb-5 bg-body rounded ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<header>
    <div>
        <table id="example"  class="table table-hover table-bordered table-striped display w-100 " style="width:100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>

            </tr>
            </thead>
            <tbody id="there"></tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
            </tr>
            </tfoot>
        </table>

    </div>
</header>


<footer class="footer">
    <div class="jumbotron mt-5" style="background-color: blueviolet;margin-bottom:0px ;height: 50px">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12  col-sm-12  text-center text-white " style="margin-top: 10px">
                Copyright © 2021 <a href="#" style="color: #d1bd2d;text-decoration: none">Sümeyye Şahin</a> <a href="#"></a> All rights reserved.
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


<!-- ✅ load DataTables ✅ -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script>
    $(document).ready(function () {
        $('#example').DataTable( );
    $.ajax({
        url: "https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
        method: "POST",
        timeout: 0,
        headers: {
            "Content-Type": "application/json"
        },
        data: JSON.stringify({
            "token": "c19edcb6c30e5236b4f8290d8f8d0af5",
            "startDate": "2022-08-30",
            "endDate": "2022-08-30",
            "type": [
                0,
                1
            ]
        }),

        success: function(response) {
            $("#there").empty();
            var len = response.data.length;
            for (var i = 0; i < len; i++) {
                var id = response.data[i].id;
                var username = response.data[i].username;
                var Cargo = response.data[i].Cargo;
                var TS = response.data[i].TS;

                var row =
                    "<tr>" +
                    "<td>" + id + "</td>" +
                    "<td >" + username + "</td>" +
                    "<td>" + Cargo + "</td>" +
                    "<td>" + TS + "</td>" +
                    "</tr>";

                $("#there").append(row);


            }
            console.log(response);
        }
    });
</script>



</body>
</html>