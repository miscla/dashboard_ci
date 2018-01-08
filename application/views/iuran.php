<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">

  <meta name="language" content="en-EN" />
  <title>Dashboard by Moch Dian Lazuardi Yudha</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bar_sk.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bar_pensiun.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/dataTables.bulma.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/dataTables.bulma.min.css">

  <script src="<?php echo base_url();?>js/Chart.bundle.js"></script>
  <script src="<?php echo base_url();?>js/Chart.bundle.min.js"></script>
  <script src="<?php echo base_url();?>js/Chart.js"></script>
  <script src="<?php echo base_url();?>js/Chart.min.js"></script>
</head>

<body>

  <header class="hero is-light" style="background-color: #fff;">
    <div class="hero-head">
      <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

          <a class="navbar-item">
            Dashboard Dapen
          </a>
          
          <button class="button navbar-burger" data-target="navMenu">
            < ></span>
            <span></span>
            <span></span>
          </button>

        </div>


        <div class="navbar-menu navbar-end" id="navMenu">
          <a class="navbar-item nav-tag">
            <span class="icon is-medium">
              <i class="fa fa-envelope-o"></i>
            </span>
            <span class="tag is-primary tag-notif">6</span>
          </a>  
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">              
              <figure class="image is-32x32" style="margin-right:.5em;">
                <img src="<?php echo base_url(); ?>profil.jpg">
              </figure>
              Moch Dian Lazuardi Yudha
            </a>
          
            <div class="navbar-dropdown is-right">              
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-user-o"></i>
                  </span>
                  Profile
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>
                  Logout
                </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="section" style="background-color: #fff; height: 100sv;">
    <div class="columns">
      <aside class="column is-2">
        <nav class="menu">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a class="is-active" href="<?php echo base_url(); ?>index.php/rute/iuran"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Iuran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rute/sk"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> SK Masuk</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rute/tangguhan"><span class="icon is-small"><i class="fa fa-desktop"></i></span> Tangguhan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rute/kelebihan_bayar"><span class="icon is-small"><i class="fa fa-table"></i></span> Kelebihan Bayar</a></li>  
          </ul>
          <p class="menu-label">
            Filter Pada All Table
          </p>
          <ul class="menu-list">
          <form action="<?php echo base_url()."index.php/rute/filter_iuran"; ?>" method="POST">
            <nav class="panel">
                <a class="panel-block" style="">
                    Sisa Iuran Maksimal
                    <div class="control" style="">
                        <div class="select is-fullwidth">
                            <select name="sisa">
                                <option value="0.1">10%</option>
                                <option value="0.2">20%</option>
                                <option value="0.3">30%</option>
                                <option value="0.4">40%</option>
                                <option value="0.5">50%</option>
                                <option value="0.6">60%</option>
                                <option value="0.7">70%</option>
                                <option value="0.8">80%</option>
                                <option value="0.9">90%</option>
                                <option value="0.1">100%</option>
                            </select>
                        </div>
                    </div>
                </a>
                <!-- <a class="panel-block" style="">
                    Rentang Terakhir Setoran
                    <div class="columns">
                        <div class="column is-12">
                            <div class="control" style="">
                                <input class="input" type="date" id="awalTgl" name="awalTgl">
                            </div>
                        </div>
                    </div>
                </a> -->
                <div class="panel-block">
                    <button class="button is-link is-outlined is-fullwidth" type="submit">
                    Filter
                    </button>
                </div>
            </nav>
            </form>
          </ul>
        </nav>
      </aside>

      <main class="column">
          <div class="column is-12" style="margin-bottom:20px;">
            <nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Iuran</a></li>
                </ul>
            </nav>
          </div>
          
          <div class="panel column is-12">
            <div class="panel-heading">
                <label class="label">All Table</label>
            </div>
            <div class="panel-block column is-12">
                <table id="iuran" class="table is-striped is-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Nama Perusahaan</th>
                    <th>Jumlah Setoran</th>
                    <th>Total Iuran</th>
                    <th>Tanggal Setor Terakhir</th>
                    <th>Apakah ada tunggakan??</th>
                    <th>Sisa Iuran</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th colspan="5">Jumlah Sisa</th>
                    <?php
                              $dibayar = 0;
                              $target = 0;

                              foreach($query as $row) {
                                $dibayar = $dibayar + $row->iuran_dibayar;
                                $target = $target + $row->target_bayar;
                              }
                              ?>
                    <th><?php echo $target - $dibayar; ?></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                    
                    foreach($query as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row->instansi ?></td>
                            <td><?php echo $row->iuran_dibayar ?></td>
                            <td><?php echo $row->target_bayar ?></td>
                            <td><?php echo $row->setoran_iuran_terakhir ?></td>
                            <td><?php echo $row->tunggakan ?></td>
                            <td><?php echo $row->target_bayar - $row->iuran_dibayar ?></td>
                        </tr>
                    <?php
                    }
                    
                    ?>
                </tbody>
                </table>
            </div>
            </div>

          <div class="columns" style="margin-left:1px; margin-right:1px;">
            <div class="panel column is-6">
                <div class="panel-heading">
                    TOP 10
                </div>
                <div class="panel-block" style="width:100%;">
                    <table id="" class="table is-striped is-bordered" cellspacing="0" width="100%" style="">
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Sisa Iuran</th>
                                <th>Tanggal Setor Terakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                            foreach($query2 as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->instansi ?></td>
                                    <td><?php echo $row->target_bayar - $row->iuran_dibayar ?></td>
                                    <td><?php echo $row->setoran_iuran_terakhir ?></td>
                                </tr>
                                <?php
                            }
                        
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="panel column is-6">
                <div class="panel-heading">
                    BOTTOM 10
                </div>
                <div class="panel-block" style="width:100%;">
                    <table id="" class="table is-striped is-bordered" cellspacing="0" width="100%" style="">
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Sisa Iuran</th>
                                <th>Tanggal Setor Terakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                            foreach($query3 as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->instansi ?></td>
                                    <td><?php echo $row->target_bayar - $row->iuran_dibayar ?></td>
                                    <td><?php echo $row->setoran_iuran_terakhir ?></td>
                                </tr>
                                <?php
                            }
                        
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
      </main>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
  <script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/dataTables.bulma.min.js"></script>

  <script>
      $(document).ready(function() {
		    $('#iuran').DataTable({
		    	"drawCallback": function( settings ) {
	                if(!$("#iuran").parent().hasClass("table-is-responsive")){
	                    $("#iuran").wrap('<div class="table-is-responsive"></div>');
	                }
            	}
		    });
        });
        $(document).ready(function() {
		    $('#Home').DataTable({
		    	"drawCallback": function( settings ) {
	                if(!$("#Home").parent().hasClass("table-is-responsive")){
	                    $("#Home").wrap('<div class="table-is-responsive"></div>');
	                }
            	}
		    });
        });
        $(document).ready(function() {
		    $('#Waris').DataTable({
		    	"drawCallback": function( settings ) {
	                if(!$("#Waris").parent().hasClass("table-is-responsive")){
	                    $("#Waris").wrap('<div class="table-is-responsive"></div>');
	                }
            	}
		    });
		});
        $(document).ready(function(){
            $('#monthlyData').DataTable({
                "drawCallback": function( settings ){
                    if(!$("#monthlyData").parent().hasClass("table-is-responsive")){
                        $("#monthlyData").wrap('<div class="table-is-responsive"></div>');
                    }
                }
            });
        });
	</script>

  <script src="<?php echo base_url();?>js/bar_sk.js"></script>
  <script>
    var ctx = document.getElementById('chartNunggak').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: "Tangguhan Tahun 2010",
                backgroundColor: [
                    'rgb(239, 231, 4)', //Kuning
                    'rgb(0, 255, 0)',   //Hijau
                    'rgb(239, 231, 4)', //Kuning
                    'rgb(239, 231, 4)', //Kuning
                    'rgb(255, 99, 132)',    //Merah
                    'rgb(0, 255, 0)',   //Hijau
                    'rgb(239, 231, 4)',   //Kuning
                    'rgb(0, 255, 0)',    //Hijau
                    'rgb(239, 231, 4)', //kuning
                    'rgb(255, 99, 132)', //merah
                    'rgb(239, 231, 4)', //Kuning
                    'rgb(0, 255, 0)' //Hijau
                ],
                data: [154, 100, 200, 193, 354, 120, 290, 140, 222, 300, 230, 30, 0],
                fill: false,
                borderWidth: 1,
            }]
        },

        // Configuration options go here
        options: {
            onClick: function(c,i){
                e=i[0];
                toggle_visibility('wizard');
                graphEventClick(e._index);
            },            
            elements: {
                line: {
                    tension: 0, // disables bezier curves
                }
            },
            tooltips: {
                mode: 'index'
            },
        }

    });

    function graphEventClick(index){
        $('#tableData').empty();
        for(i=0;i<=index;i++){
            var html_to_insert = "<tr><td>" + chart.data.labels[i] + "</td><td>Dummy</td></tr>";
            $(html_to_insert).insertAfter("#tableData")        
        }
    }

    function toggle_visibility(id){
        var e =document.getElementById(id);
        e.style.visibility = 'visible';
    }

  </script>
  <script src="<?php echo base_url();?>js/chart_atas.js"></script>
</body>

</html>
