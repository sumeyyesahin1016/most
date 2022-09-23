<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/af-2.4.0/b-2.2.3/b-html5-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>



    <title>Hello, world!</title>
</head>
<style>
    header{
        padding: 70px;
    }
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Link
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Link</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<header>
    <div>
        <div>
            <table id="example"  class="table table-hover table-bordered table-striped display w-100 " style="width:100%"  >
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>aaaa</th>
                </tr>
                </thead>
                <tbody id="example_tbody">
                </tbody>

                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Age</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
</header>

<!-- Optional JavaScript; choose one of the two! -->


<!--jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- DATATABLE -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script>
     $( document ).ready(function() {

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
             success: function (response) {
                 $("#example_tbody").empty();
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
                         "<td>" + CargoId + "</td>" +
                         "</tr>";

                     $("#example_tbody").append(row);


                 }
                 console.log(response);
             }

         });
         $('#example').DataTable();
     })
</script>

</body>
</html>