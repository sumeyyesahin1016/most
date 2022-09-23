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
    <link href="https://cdn.datatables.net/v/bs-3.3.7/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/datatables.min.css" rel="stylesheet"/>

    <title>Hello, world!</title>
</head>
<style>
    header{
        padding: 70px;
    }
    #example{
        border-style: none;
    }
    #example  tr th {
        border-radius: 10px;
        box-shadow: grey 5px;
        background-color: whitesmoke;

    }
    #example tr td{
        border-radius: 10px;
        box-shadow: grey 3px;
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

            <table id="example" class="table table-hover table-bordered table-striped display w-100 ">
                <thead>
                <tr>
                    <th class="wd-15p" >ID</th>
                    <th class="wd-15p" >Kullanıcı</th>
                    <th class="wd-15p" >Çıkış Tarihi</th>
                    <th class="wd-15p" >Sipariş No</th>
                    <th class="wd-15p" >Tarih</th>
                    <th class="wd-15p" >Firma</th>
                    <th class="wd-15p" >Takip No</th>
                    <th class="wd-15p" >Durum</th>
                    <th class="wd-15p" >Tekrar</th>
                    <th class="wd-15p" >Tekrar Tarih</th>
                    <th class="wd-15p" >E-Arşiv</th>
                    <th class="wd-15p" >Teslim Tarihi</th>
                    <th class="wd-15p" >ETGB</th>
                    <th class="wd-15p" >Ülke</th>
                    <th class="wd-15p" >Tutar</th>
                    <th class="wd-15p" >Paket</th>
                    <th class="wd-15p" >AV. Ülkesi</th>
                </tr>
                </thead>
                <tbody id="example_tbody">

                </tbody>
                <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Kullanıcı</th>
                    <th rowspan="1" colspan="1">Çıkış Tarihi</th>
                    <th rowspan="1" colspan="1">Sipariş No</th>
                    <th rowspan="1" colspan="1">Tarih</th>
                    <th rowspan="1" colspan="1">Firma</th>
                    <th rowspan="1" colspan="1">Takip No</th>
                    <th rowspan="1" colspan="1">Durum</th>
                    <th rowspan="1" colspan="1">Tekrar</th>
                    <th rowspan="1" colspan="1">Tekrar Tarih</th>
                    <th rowspan="1" colspan="1">E-Arşiv</th>
                    <th rowspan="1" colspan="1">Teslim Tarihi</th>
                    <th rowspan="1" colspan="1">ETGB</th>
                    <th rowspan="1" colspan="1">Ülke</th>
                    <th rowspan="1" colspan="1">Tutar</th>
                    <th rowspan="1" colspan="1">Paket</th>
                    <th rowspan="1" colspan="1">Av. Ülkesi</th>

                </tr>
                </tfoot>

            </table>

        </div>
    </div>
</header>

<!-- Optional JavaScript; choose one of the two! -->


<!--jQuery and Bootstrap Bundle (includes Popper) -->

<!-- DATATABLE -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs-3.3.7/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/datatables.min.js"></script>
<script>
    $(document).ready(function () {

        $.ajax({
            url: 'https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste',
            method: 'POST',
            timeout: 0,
            headers: {
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                "token": "cdce171ff0528f56cfc7962ab2ec319b",
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
                    var cikis_tarih = response.data[i].cikis_tarih;
                    var TS = response.data[i].TS;
                    var Cargo = response.data[i].Cargo;
                    var takipno = response.data[i].takipno;
                    var durum = response.data[i].durum;
                    var tekrar = response.data[i].tekrar;
                    var guncelletarih = response.data[i].guncelletarih;
                    var tarih = response.data[i].tarih;
                    var etgb = response.data[i].etgb;
                    var DeliveryCountry = response.data[i].DeliveryCountry;
                    var OrderTotalPrice = response.data[i].OrderTotalPrice;
                    var Currency = response.data[i].Currency;
                    var post_packet = response.data[i].post_packet;

                    var row =
                        "<tr>" +
                        "<td>" + id + "</td>" +
                        "<td>" + username + "</td>" +
                        "<td>" + cikis_tarih + "</td>" +
                        "<td>" + TS + "</td>" +
                        "<td>" + tarih + "</td>" +
                        "<td>" + Cargo  + "</td>" +
                        "<td>" + takipno + "</td>" +
                        "<td>" + durum + "</td>" +
                        "<td>" + tekrar + "</td>" +
                        "<td>" + guncelletarih + "</td>" +
                        "<td>" +  "<button id='submit'>E-Arşiv</button> " + "</td>" +
                        "<td>" + tarih + "</td>" +
                        "<td>" + etgb + "</td>" +
                        "<td>" + DeliveryCountry + "</td>" +
                        "<td>" + OrderTotalPrice + Currency + "</td>" +
                        "<td>" + post_packet + "</td>" +
                        "<td>" +  + "</td>" +
                        "</tr>";

                    $("#example_tbody").append(row);

                }
                console.log(response);

                /*DataTables instantiation.*/
                $( "#example" ).DataTable({

                    initComplete: function () {
                        this.api()
                            .columns()
                            .every(function () {
                                var column = this;
                                var select = $('<select><option value=""></option></select>')
                                    .appendTo($(column.footer()).empty())
                                    .on('change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                        column.search(val ? '^' + val + '$' : '', true, false).draw();
                                    });
                                column
                                    .data()
                                    .unique()
                                    .sort()
                                    .each(function (d, j) {
                                        select.append('<option value="' + d + '">' + d + '</option>');
                                    });
                            });
                    },
                    dom: 'Bfrtip',
                    buttons: {
                        dom: {
                            button: {
                                tag: 'button',
                                className: ''
                            }
                        },
                        buttons: [{
                            extend: 'excel',
                            className: 'btn btn-sm btn-success',
                            titleAttr: 'Excel export.',
                            text: 'Excel',
                            filename: 'excel-export',
                            extension: '.xlsx'
                        }, {
                            extend: 'copy',
                            className: 'btn btn-sm btn-primary',
                            titleAttr: 'Copy table data.',
                            text: 'Copy'
                        }]
                    }

                });
            }

        });
    });
</script>

</body>
</html>

