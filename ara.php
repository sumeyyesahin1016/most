<!doctype html>

<html lang="tr">

<head>

    <meta charset="UTF-8">

    <title>Kargo Kontrol Kargolar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://tedarik.modaselvim.net/js/jquery.growl.js" type="text/javascript"></script>
    <link href="https://tedarik.modaselvim.net/css/jquery.growl.css" rel="stylesheet" type="text/css" />

    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- validator
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    -->
    <script type="text/javascript" src="https://tedarik.modaselvim.net/js/validator.js"></script>

    <!-- dataTables -->
    <!--
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-3.2.1/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css" />
    <!--
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    -->
    <script type="text/javascript" src="https://tedarik.modaselvim.net/js/vfs_fonts.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.9/api/sum().js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/turkish-string.js"></script>
    <script type="text/javascript" src="https://tedarik.modaselvim.net/js/colResizable-1.6.min.js"></script>
    <!--	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/pagination/input.js"></script>  -->


    <style>
        body {
            font-size: 12px;
        }

    </style>
    <script type="text/javascript">
        var table1;
        $(document).ready(function() {
            table1 = $('#arama').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Turkish.json",
                    "buttons": {
                        "pageLength": {
                            "_": "Sayfada %d kayıt göster",
                            "-1": "Tümünü göster" // « This will not work in JS, right?
                        }
                    }
                },
                "pagingType": "simple_numbers",
                "select": {
                    style: "multi"
                },
                "dom": "Bfrtip",
                "lengthMenu": [
                    [15, 25, 50, 100, 500, -1],
                    ["15", "25", "50", "100", "500", "Tümü"]
                ],
                "buttons": [
                    "pageLength", "excel", "pdf"
                ],
                "responsive": false,
                "initComplete": function() {

                    this.api().columns([4, 5, 6, 8, 9, 10, 11, 12, 13, 18, 19, 20]).every(function() {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                },
                "fixedHeader": {
                    header: true,
                    footer: true,
                    headerOffset: 50
                },
                //"fixedHeader": true,
                //"iDisplayLength": 15,
                //"aLengthMenu": [[15, 25, 50, 100, 500, 1000, -1], [15, 25, 50, 100, 500, 1000, "Tümü"]],
                "columnDefs": [{
                    "render": function(data, type, row) {
                        nb = row.length;
                        mySum = 0;
                        for (i = 3; i < nb; i++) {
                            mySum += parseFloat(row[i]);
                        }
                        return mySum;
                    }
                },
                    {
                        type: "select"
                    },
                    {
                        type: 'turkish',
                        targets: 1
                    },
                    {
                        "bSearchable": false,
                        "aTargets": [0]
                    }
                ],
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api(),
                        data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                                i : 0;
                    };
                    /**
                     // Total over all pages
                     total = api
                     .column( 3 )
                     .data()
                     .reduce( function (a, b) {
									return intVal(a) + intVal(b);
								}, 0 );

                     // Total over all pages

                     total1 = api
                     .column( 4 )
                     .data()
                     .reduce( function (a, b) {
									return intVal(a) + intVal(b);
								}, 0 );
                     */
                    /**
                     // Total over this page
                     pageTotal = api
                     .column( 3, { page: 'current'} )
                     .data()
                     .reduce( function (a, b) {
									return intVal(a) + intVal(b);
								}, 0 );
                     // Total over this page

                     pageTotal1 = api
                     .column( 4, { page: 'current'} )
                     .data()
                     .reduce( function (a, b) {
									return intVal(a) + intVal(b);
								}, 0 );
                     */
                    /**
                     // Update footer
                     $( api.column( 3 ).footer() ).html(
                     'Sayfada '+pageTotal +' ( Toplam '+ total +')'
                     );
                     // Update footer

                     $( api.column( 4 ).footer() ).html(
                     'Sayfada '+pageTotal1 +' ( Toplam '+ total1 +')'
                     );
                     */
                }
            });
            //$("#example").colResizable({resizeMode:'flex'});
            /**
             $("#zimmet").colResizable({
				  resizeMode: 'flex',
				  liveDrag: true
				});
             */
        });
    </script>


</head>

<body>
<style type="text/css">
    /*basit tasarım*/
    .clearfix { display: inline-block; }
    body { padding-top: 70px; }
</style>
<script type="text/javascript">

    // GEREKSIZ YERE SISTEMI MESGUL EDIYOR, ISTEK GONDERILEN PHP YOK..


    // Tek Mesaj Çek
    jQuery(document).ready(function() {
        $.ygMesaj=function(id){

            $.ajax({
                type: "GET",
                dataType: 'json',
                url: 'x/ajax.php?kid='+id+'',

                success: function(GMesaj) {
                    var Mes = "";

                    // döngü
                    for (var key in GMesaj) {
                        $("#gid").empty();
                        $("#gid").val(id);
                        if (GMesaj.hasOwnProperty(key)) {
                            Mes += '<option value="'+ GMesaj[key].id +'">'+ GMesaj[key].KullaniciAdi +'</option>';
                            $("#kime").empty();
                            $("#kime").append(Mes);
                        }
                    }
                },
                complete: function() {
                }
            });
        }

    });


    //Tek Mesaj Çek
    jQuery(document).ready(function() {
        $.mesajAc=function(id){

            $.ajax({
                type: "GET",
                dataType: 'json',
                url: 'x/ajax.php?mid='+id+'',

                success: function(YMesaj) {
                    var Mes = "";

                    // döngü
                    for (var key in YMesaj) {
                        $("#msajTitle").empty();
                        $("#msajTitle").text(YMesaj[0]["gonderenAdi"]);
                        if (YMesaj.hasOwnProperty(key)) {
                            Mes += '<div class="panel panel-info">';
                            Mes += "<p class='panel-heading'><strong>Konu: </strong>" + YMesaj[key]["mesajKonu"] +"</p>";
                            Mes += "<p>" + " <strong>Mesaj: </strong>" + YMesaj[key]["mesaj"] +"</p>";
                            Mes += "<p>"+ YMesaj[key]["gonderilmeTarihi"] +"</p>";
                            Mes += "</div>";
                            $("#mj").empty();
                            $("#mj").append(Mes);
                        }
                    }
                },
                complete: function() {
                }
            });
        }

    });

    // Yeni mesaj Çek
    jQuery(document).ready(function() {
        var mesajAjax = function () {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: 'x/ajax.php?id=1390',

                success: function(YeniMesaj) {
                    if (YeniMesaj.length>0){
                        var Deg = "";
                        // döngü
                        for (var key in YeniMesaj) {
                            if (YeniMesaj.hasOwnProperty(key)) {
                                Deg += '<div class="panel panel-info" data-backdrop="static" data-toggle="modal" data-target="#mesajModal" class="btn btn-info" onclick="$.mesajAc('+YeniMesaj[key]["mesajId"]+')">';
                                Deg += "<p class='panel-heading'>" + YeniMesaj[key]["gonderenAdi"] +" - "+ YeniMesaj[key]["gonderilmeTarihi"] + "</p>";
                                Deg += "<p>" + " <strong> Konu:</strong> " + YeniMesaj[key]["mesajKonu"] +"</p>";
                                Deg += "</div>";
                                $("#mesaj").empty();
                                $("#mesaj").append(Deg);
                            }
                        }
                    }else{
                        $("#mesaj").empty();
                        console.log(YeniMesaj.length);
                    }
                },
                complete: function(t) {
                    setTimeout(mesajAjax,240000);
                }
            });
        }
        mesajAjax();
    });
    // Yeni mesaj sayı Çek
    jQuery(document).ready(function() {
        var mesajsAjax = function () {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: 'x/ajax.php?kac=1390',
                success: function(adet) {
                    if(adet){
                        $("#kac").empty();
                        $("#kac").append(adet["kac"]);
                    }
                },
                complete: function() {
                    setTimeout(mesajsAjax,240000);
                }
            });
        }
        mesajsAjax();
    });


    // ==============================
    // Sonuc Bildirim
    function baglanti () {
        $ .alert("Kapanıyor: ", {withTime: true,type: 'info',title:'Bağlatı Hatası!',icon:'glyphicon glyphicon-plus', position: ['top-right', [-0.42, 0]],});
        return false;
    }

    function guncellendi () {
        $ .alert("Başarılı! ", {withTime: false,type: 'success',title:'Gönderildi!',icon:'glyphicon glyphicon-plus', position: ['top-right', [-0.42, 0]],});
        return false;
    }

    function hata () {
        $ .alert("Kapanıyor: ", {withTime: true,type: 'warning',title:'Hata! Bir Sorun Oluştu!',icon:'glyphicon glyphicon-plus', position: ['top-right', [-0.42, 0]],});
        return false;
    }

    $(document).on('click', '.panel-heading span.glyphicon-plus', function (e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapse')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapse');
            $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');

        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapse');
            $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
        }
    });
</script>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav nav-tabs ">
                <li class="btn btn-default btn-sm"><a href="index.php">ANASAYFA</a></li>

                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">FİLTRELE<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="ara.php">Tüm Kargolar</a></li>
                    </ul>
                </li>
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">KARGO<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="alert-info"><a href="https://kargokontrol.modaselvim.net/tel.php?callerid=90500000000&token=d5dfoctfo2tdir4smifdu0sbk1">MÜŞTERİ PANELİ</a></li>
                        <li class="alert-warning"><a href="eksik-urun.php">EKSİK URÜN</a></li>

                        <li class="alert-danger"><a href="kargo-durdur.php">KARGO DURDUR</a></li>
                        <li class="alert-info"><a href="petek.php">PETEK</a></li>
                        <li class="alert-info"><a href="container.html">KONTEYNER</a></li>
                    </ul>
                </li>
                <!--
                <li class="dropdown btn btn-default btn-sm">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">YURTİÇİ<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                    <li><a href="yurtici.php">YURTİÇİ İŞLE</a></li>
                                        <li><a href="yurticiTsSorgu.php">TS İle Sorgu</a></li>
                    </ul>
                </li>

                <li class="dropdown btn btn-default btn-sm">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">SÜRAT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                    <li><a href="surat.php">SÜRAT İŞLE</a></li>
                                        <li><a href="suratTsSorgu.php">TS İle Sorgu</a></li>
                        <li><a href="suratTsSorgu2.php">TS İle Sorgu 2</a></li>
                        <li><a href="suratTakipSorgu.php">Takip No İle Sorgu</a></li>
                    </ul>
                </li>
                -->
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">MNG<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="mngTsSorgu.php">TS İle Sorgu</a></li>
                        <li><a href="mngTsSilme.php">TS İLE ENTEGRASYON SİL</a></li>
                    </ul>
                </li>
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">ASİL<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="asilTsSorgu.php">TS İle Sorgu</a></li>
                        <li><a href="asilTkSorgu.php">Takip No İle Sorgu</a></li>
                    </ul>
                </li>
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">ARAS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="arasTsSorgu.php">TS İle Sorgu</a></li>
                        <li><a href="aras-bekleyen-kargolar.php">Şubede Bekleyen Kargolar</a></li>
                    </ul>
                </li>
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">PTT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pttTakipSorgu.php">PTT Takip Sorgu</a></li>
                        <li><a href="pttTakipSorguY.php">PTT Takip Sorgu Yeni</a></li>
                        <li><a href="pttTakipSorguR.php">PTT TS Sorgu Yeni</a></li>
                    </ul>
                </li>
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">YURT DIŞI<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pts-kargo-takip.php">PTS Kargo Sorgula</a></li>
                    </ul>
                </li>

                <form class="navbar-form navbar-left" action="ara.php" method="post">
                    <div class="input-group">
                        <input required id="ara" type="text" class="form-control" placeholder="Ara" name="ara" value="">
                        <div class="input-group-btn">
                            <button class="btn btn-default btn-primary" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <li class="dropdown btn btn-default btn-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> sumeyye.sahin <span class="caret"></span> <i class="glyphicon glyphicon-user"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Şifre Değiştir</a></li>
                        <li><a href="yurtdisi-zimmet.php">Yurtdışı Zimmet</a></li>
                        <li><a href="cikis.php">ÇIKIŞ</a></li>
                    </ul>
                </li>
                <li class="nav-icon-btn nav-icon-btn-success dropdown btn-sm">
                    <a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="label label-success" id="kac"> </span>
                        <i class="nav-icon fa fa-envelope"></i>
                        <span class="small-screen-text"> Mesaj </span><i class="glyphicon glyphicon-envelope"></i>
                    </a>

                    <!-- MESSAGES -->

                    <!-- Javascript -->
                    <script>
                        /*
                        $(document).ready( function () {
                                $('#main-navbar-messages').slimScroll({ height: 250 });
                            });
                        */
                    </script>
                    <!-- / Javascript -->

                    <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                        <div class="messages-list" id="main-navbar-messages" style="overflow: hidden; width: auto; height: 250px;">

                            <div id="mesaj" class="panel-group">
                            </div>

                        </div>
                        <div class="panel-group">
                            <div class="panel panel-info">
                                <button class="button btn-info btn-sm"><a href="x/index.php"> DİĞER MESAJLAR </a></button>
                                <!--	<button class="button btn-info btn-sm" data-toggle="modal" data-target="#YmesajModal" onclick="$.ygMesaj(1390)"> MESAJ YAZ </button> -->
                            </div>
                        </div>
                    </div> <!-- / .dropdown-menu -->
                </li>
            </ul>
        </div>
    </div>

</nav>
<div class="clearfix"></div>
<div class="clearfix"></div>
<!-- Modal mesaj -->
<div class="modal fade" id="YmesajModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Yeni Mesaj</h4>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" class="form-control" id="gid">
                    <div class="form-group">
                        <label for="kime" class="control-label"> Kime:</label>
                        <select class="form-control" name="kime" id="kime">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="konu" class="control-label"> Konu:</label>
                        <input type="text" class="form-control" name="konu">
                    </div>
                    <div class="form-group">
                        <label for="mesaj" class="control-label">Mesaj:</label>
                        <textarea class="form-control" name="mesaj"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Gönder</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>

    </div>
</div>
<!-- Modal mesaj -->
<div class="modal fade" id="mesajModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="msajTitle"></h4>
            </div>
            <div class="modal-body" id="mj">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>

    </div>
</div>
</div>
</body>

</html>