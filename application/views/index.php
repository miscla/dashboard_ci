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
  
  <script src="<?php echo base_url();?>js/Chart.bundle.js"></script>
  
  <script src="<?php echo base_url();?>js/Chart.bundle.min.js"></script>
  
  <script src="<?php echo base_url();?>js/Chart.js"></script>

  <script src="<?php echo base_url();?>js/Chart.min.js"></script>

  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link href="<?php echo base_url();?>css/sidebar.css" rel="stylesheet">
</head>

<style>

#content {
  width:300px;
  margin:10px auto;
}

#thermometer {
  width:70px;
  height:270px;
  position: relative;
  background: #ddd;
  border:1px solid #aaa;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  -ms-border-radius: 12px;
  -o-border-radius: 12px;
  border-radius: 12px;

  -webkit-box-shadow: 1px 1px 4px #999, 5px 0 20px #999;
  -moz-box-shadow: 1px 1px 4px #999, 5px 0 20px #999;
  -ms-box-shadow: 1px 1px 4px #999, 5px 0 20px #999;
  -o-box-shadow: 1px 1px 4px #999, 5px 0 20px #999;
  box-shadow: 1px 1px 4px #999, 5px 0 20px #999;
}

#thermometer .track {
  height:250px;
  top:10px;
  width:20px;
  border: 1px solid #aaa;
  position: relative;
  margin:0 auto;
  background: rgb(255,255,255);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(0,0,0)), color-stop(1%,rgb(255,255,255)));
  background: -webkit-linear-gradient(top, rgb(0,0,0) 0%,rgb(255,255,255) 10%);
  background:      -o-linear-gradient(top, rgb(0,0,0) 0%,rgb(255,255,255) 10%);
  background:     -ms-linear-gradient(top, rgb(0,0,0) 0%,rgb(255,255,255) 10%);
  background:    -moz-linear-gradient(top, rgb(0,0,0) 0%,rgb(255,255,255) 10%);
  background:   linear-gradient(to bottom, rgb(0,0,0) 0%,rgb(255,255,255) 10%);
  background-position: 0 -1px;
  background-size: 100% 5%;
}

#thermometer .progressb {
  height:0%;
  width:100%;
  background: rgb(20,100,20);
  background: rgba(20,100,20,0.6);
  position: absolute;
  bottom:0;
  left:0;
}

#thermometer .goal {
  position:absolute;
  top:0;
}

#thermometer .amount {
  display: inline-block;
  padding:0 5px 0 60px;
  border-top:1px solid black;
  font-family: Trebuchet MS;
  font-weight: bold;
  color:#333;
}

#thermometer .progressb .amount {
  padding:0 5px 0 60px;
  position: absolute;
  border-top:1px solid #060;
  color:#060;
  left:0px;
}

/*Progress Kelebihan Bayar*/
@import url(https://fonts.googleapis.com/css?family=Lato:300);


.progress2 {
  background: #00FF00;
  border-radius: 50%;
  overflow: hidden;
  width: 150px;
  height: 150px;
}

</style>

<body>

  <header class="hero is-light" style="background-color: #fff;">
    <div class="hero-head">
      <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item">
            Dashboard Dapen
          </a>
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

  <div class="section" style="background-color: #fff; height: 100vh;">
    <div class="columns">

      <main class="column">
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <div class="title">Dashboard Admin</div>
            </div>
          </div>
        </div>

        <!-- <div class="columns is-multiline">
          <div class="column">
            <canvas id="pieChart"></canvas>
            <div id="pieChart"></div>
          </div>
          <div class="column" style="margin-top:15px;">
            <div class="box notification is-primary">
              <div class="heading" style="text-align:center; font-size:30px; font-weight:bold;">Janda/Duda</div>
              <div class="title" style="text-align:center">2000</div>
            </div>
          </div>
          <div class="column" style="margin-top:15px;">
            <div class="box notification is-primary">
              <div class="heading" style="text-align:center; font-size:30px; font-weight:bold;">Langsung</div>
              <div class="title" style="text-align:center">3000</div>
            </div>
          </div>
          <div class="column" style="margin-top:15px;">
            <div class="box notification is-primary">
              <div class="heading" style="text-align:center; font-size:30px; font-weight:bold;">Anak</div>
              <div class="title" style="text-align:center">2500</div>
            </div>
          </div>
        </div> -->

        <div class="columns is-multiline">
          <div class="column is-4">
            <div class="panel">
              <div class="panel-block" style="width:100%">
                <p style="text-align:center; width:100%">Pemasukan Iuran</p>
                <a href="<?php echo base_url(); ?>index.php/rute/iuran" class="button is-link" style="">Detail</a>
              </div>
              <div class="panel-block" style="width:100%;">
                <div class="columns is-multiline">
                  <div class="column is-12" style="width:100%">
                    <div class="box notification is-primary" style="width:100%">
                      <div class="level">
                        <div class="level-item" style="text-align:left">
                          <div class="">
                            <div class="heading">Iuran Masuk</div>
                            <div class="title is-5">

                              <?php
                              $dibayar = 0;
                              $target = 0;

                              foreach($query as $row) {
                                $dibayar = $dibayar + $row->iuran_dibayar;
                                $target = $target + $row->target_bayar;
                              }

                              echo ($dibayar / $target) * 100;
                              ?>%

                            </div>
                          </div>
                        </div>
                        <div class="level-item" style="text-align:center">
                          <div class="">
                            <div class="heading">Total Uang</div>
                            <div class="title is-5">

                              <?php
                              $jumlah = 0;

                              foreach($query as $row) {
                                $jumlah = $jumlah + $row->iuran_dibayar;
                              }

                              echo $jumlah;
                              ?>

                            </div>
                          </div>
                        </div>
                        <div class="level-item" style="text-align:right">
                          <div class="">
                            <div class="heading">Instansi Lunas</div>
                            <div class="title is-5">

                              <?php
                              $jumlah = 0;

                              foreach($query as $row) {
                                if($row->tunggakan == "selesai") {
                                  $jumlah = $jumlah + count($row->id_instansi);
                                }
                              }

                              echo $jumlah;
                              ?>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column is-12" style="width:100%; margin-top:10px;">
                    <progress style="" class="progress is-success is-large" value="<?php
                    $dibayar = 0;
                    $target = 0;

                    foreach($query as $row) {
                      $dibayar = $dibayar + $row->iuran_dibayar;
                      $target = $target + $row->target_bayar;
                    }

                    echo ($dibayar / $target) * 100;
                    ?>" max="100"></progress>
                  </div>
                  <div class="column is-12" style="width:100%; text-align:center; margin-top:-6px; margin-bottom:0px;">
                    <p>Status : <?php 
                    $dibayar = 0;
                    $target = 0;

                    foreach($query as $row) {
                      $dibayar = $dibayar + $row->iuran_dibayar;
                      $target = $target + $row->target_bayar;
                    }

                    $tampung = ($dibayar / $target) * 100;

                    if($tampung >= 70) {?>
                    <font color="green">Aman</font>
                    <?php } else { ?>
                    <font color="red">Tidak Aman</font>
                    <?php }
                    ?></p>
                  </div>
                  <div class="column is-12" style="width:100%">
                    <div class="box notification is-danger" style="width:100%">
                      <div class="level">
                        <div class="level-item" style="text-align:left">
                          <div class="">
                            <div class="heading">Belum Masuk</div>
                            <div class="title is-5">

                              <?php
                              $dibayar = 0;
                              $target = 0;

                              foreach($query as $row) {
                                $dibayar = $dibayar + $row->iuran_dibayar;
                                $target = $target + $row->target_bayar;
                              }

                              echo (1 - ($dibayar / $target)) * 100;
                              ?>%

                            </div>
                          </div>
                        </div>
                        <div class="level-item" style="text-align:center">
                          <div class="">
                            <div class="heading">Total Uang</div>
                            <div class="title is-5">

                              <?php
                              $dibayar = 0;
                              $target = 0;

                              foreach($query as $row) {
                                $dibayar = $dibayar + $row->iuran_dibayar;
                                $target = $target + $row->target_bayar;
                              }

                              echo $target - $dibayar;
                              ?>

                            </div>
                          </div>
                        </div>
                        <div class="level-item" style="text-align:right">
                          <div class="">
                            <div class="heading">Nunggak</div>
                            <div class="title is-5">

                              <?php
                              $jumlah = 0;

                              foreach($query as $row) {
                                if($row->tunggakan == "belum lunas") {
                                  $jumlah = $jumlah + count($row->id_instansi);
                                }
                              }

                              echo $jumlah;
                              ?>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-block" style="width:100%; background:blue">
                <div class="columns" style="width:100%; text-align:center; color:white">
                  <div class="column is-6">
                    Sudah Iuran | <?php
                    $jumlah = 0;

                    foreach($query as $row) {
                      $jumlah = $jumlah + count($row->id_instansi);
                    }

                    echo $jumlah;
                    ?> Jiwa
                  </div>
                  <div class="column is-6">
                    Belum Iuran | <?php
                    $jumlah = 0;

                    foreach($query as $row) {
                      if($row->iuran_dibayar == 0) {
                        $jumlah = $jumlah + count($row->id_instansi);
                      }
                    }

                    echo $jumlah;
                    ?> Jiwa
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-2">
            <div class="panel">
              <div class="panel-block" style="width:100%">
                <p style="text-align:left; width:100%">SK Masuk</p>
                <a href="<?php echo base_url(); ?>index.php/rute/sk" class="button is-link" style="">Detail</a>
              </div>
              <div class="panel-block" style="width:100%;">
                <div id="content">
                  <div id="thermometer">
                    <div class="track">
                      <div class="goal">
                        <div class="amount"> <?php
                        $jumlah = 0;

                        foreach($query2 as $row2) {
                          $jumlah = $jumlah + count($row2->status_proses);
                        }

                        echo $jumlah;
                        ?> </div>
                      </div>
                      <div class="progressb">
                        <div class="amount"> <?php
                        $jumlah = 0;

                        foreach($query2 as $row2) {
                          if($row2->status_proses == "selesai") {
                            $jumlah = $jumlah + count($row2->status_proses);
                          }
                        }

                        echo $jumlah;
                        ?> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-block" style="width:100%; background:blue">
                <div class="columns" style="width:100%; color:white">
                  <div class="column is-12">
                    Sisa SK :  <?php
                    $jumlah = 0;

                    foreach($query2 as $row2) {
                      if($row2->status_proses == "sedang diproses" || $row2->status_proses == "belum diproses") {
                        $jumlah = $jumlah + count($row2->status_proses);
                      }
                    }

                    echo $jumlah;
                    ?>  SK
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-6">
            <div class="panel">
              <div class="panel-block" style="width:100%">
                <p style="text-align:left; width:100%">Tangguhan | Rata-rata Tangguhan : <font color="<?php
                $jumlah = 0;
                $total_orang = 0;
                foreach($query3 as $row) {
                  $date1 = strtotime($row->tgl_awal_tangguhan);
                  $date2 = strtotime(date('Y-m-d'));
                  $jumlah = $date2 - $date1;
                  $days = $jumlah / 86400;
                  $months = $days / 30;
                }
                if($months <= 6) {
                  echo "green";
                }else if($months > 6 && $months <= 12) {
                  echo "orange";
                }else if($months > 12) {
                  echo "red";
                }
                ?>"><?php
                $jumlah = 0;
                $total_orang = 0;
                $total_bulan = 0;
                foreach($query3 as $row) {
                  $date1 = strtotime($row->tgl_awal_tangguhan);
                  $date2 = strtotime(date('Y-m-d'));
                  $jumlah = $date2 - $date1;
                  $days = $jumlah / 86400;
                  $months = $days / 30;
                  $total_bulan = $total_bulan + $months;
                  $total_orang = $total_orang + count($row->nik);
                }
                echo $total_bulan/$total_orang;
                ?> Bulan</font></p>
                <a href="<?php echo base_url(); ?>index.php/rute/tangguhan" class="button is-link" style="">Detail</a>
              </div>
              <div class="panel-block" style="width:100%">
                <canvas id="myChart" height="142px"></canvas>
              </div>
              <div class="panel-block" style="width:100%; background:blue">
                <div class="columns" style="width:100%; text-align:center; color:white">
                  <div class="column is-4">
                    1 - 6 Bulan | <?php
                    $jumlah = 0;
                    $total_orang = 0;
                    foreach($query3 as $row) {
                      $date1 = strtotime($row->tgl_awal_tangguhan);
                      $date2 = strtotime(date('Y-m-d'));
                      $jumlah = $date2 - $date1;
                      $days = $jumlah / 86400;
                      $months = $days / 30;
                      if($months <= 6 && $months > 0) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                    }
                    echo $total_orang;
                    ?> Jiwa
                  </div>
                  <div class="column is-4">
                    6 - 12 Bulan | <?php
                    $jumlah = 0;
                    $total_orang = 0;
                    foreach($query3 as $row) {
                      $date1 = strtotime($row->tgl_awal_tangguhan);
                      $date2 = strtotime(date('Y-m-d'));
                      $jumlah = $date2 - $date1;
                      $days = $jumlah / 86400;
                      $months = $days / 30;
                      if($months > 6 && $months <= 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                    }
                    echo $total_orang;
                    ?> Jiwa
                  </div>
                  <div class="column is-4">
                    12 Bulan ++ | <?php
                    $jumlah = 0;
                    $total_orang = 0;
                    foreach($query3 as $row) {
                      $date1 = strtotime($row->tgl_awal_tangguhan);
                      $date2 = strtotime(date('Y-m-d'));
                      $jumlah = $date2 - $date1;
                      $days = $jumlah / 86400;
                      $months = $days / 30;
                      if($months > 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                    }
                    echo $total_orang;
                    ?> Jiwa
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="columns is-multiline">
          <div class="column is-12">
            <div class="column is-12">
              <h2 class="p_pensiun" style="font-weight:bold; font-size:25px; margin-bottom:-25px;">
                Pemasukan Iuran <a href="iuran.html" class="button is-link" style="margin-top:10px; margin-left:10px;">Read More</a>
              </h2>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-primary">
              <div class="heading" style="text-align:center">Sudah Iuran</div>
              <div class="title" style="text-align:center">80%</div>
              <div class="level">
                <div class="level-item" style="text-align:center">
                  <div class="">
                    <div class="heading">Total Uang</div>
                    <div class="title is-5">250.000.000</div>
                  </div>
                </div>
                <div class="level-item" style="text-align:center">
                  <div class="">
                    <div class="heading">Total Orang</div>
                    <div class="title is-5">80.000</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-half">
            <h1 style="font-size:25px; text-align:center; margin-top:25px; font-weight:bold;">
              PROGRESS BAR
            </h1>
            <progress style="margin-top:15px" class="progress is-info is-large" value="80" max="100">80%</progress>
            <div class="columns" style="margin-top:-30px;">
              <div class="column">
                0%
              </div>
              <div class="column" style="text-align:center">
                50%
              </div>
              <div class="column" style="text-align:right">
                100%
              </div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-danger">
              <div class="heading" style="text-align:center">Belum Iuran</div>
              <div class="title" style="text-align:center">20%</div>
              <div class="level">
                <div class="level-item" style="text-align:center">
                  <div class="">
                    <div class="heading">Total Uang</div>
                    <div class="title is-5">250.000.000</div>
                  </div>
                </div>
                <div class="level-item" style="text-align:center">
                  <div class="">
                    <div class="heading">Total Orang</div>
                    <div class="title is-5">80.000</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="panel" style="height: 35%;">
          <div class="panel-block" style="height: 65%;">
            <section class="balanceBox is-four-fifths">
              <div class="headerBox">
                <h1 class="balanceHeader" style="font-weight:bold">
                  Pemasukan SK  <a href="sk.html" class="button is-link" style="margin-top:10px; margin-left:10px;">Read More</a>
                </h1>
              </div>

              <br>
              <p style="left: 40px; position: absolute; font-weight:bold;">
                Pemasukan SK bulan ini yaitu 500 jilid, dan belum sampai dari apa yang diharapkan
              </p>

              <hr class="divider" style="margin-top:50px;">

              <div class="meterContainer" style="margin-top:5%;">
                <div aria-hidden="true" class="meterBackground">
                  <div aria-hidden="true" class="meterBar">
                    <label class="progressValue">
                      <span class="progressNumber"></span>
                      <meter max="1000" value="500" class="leaseMeter"></meter>
                    </label>
                  </div>
                  <div class="columns" style="margin-top:0px;">
                    <div class="column">
                      0
                    </div>
                    <div class="column" style="text-align:center">
                      500
                    </div>
                    <div class="column" style="text-align:right">
                      1000
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div> -->
        <div class="panel">
          <div class="panel-block" style="width:100%">
            <p style="text-align:left; width:100%">Kelebihan Bayar | <font color="green">Laporan Hapus [ 4.06 Bulan ]</font></p>
            <a href="<?php echo base_url(); ?>index.php/rute/kelebihan_bayar" class="button is-link" style="">Detail</a>
          </div>
          <div class="panel-block" style="height:200px">
            <div class="columns" style="width:100%; margin-left: 0px;">
              <div class="column is-3" style="text-align:center;">
                <div class="columns">
                  <div class='progress2 column is-6'>
                    <p style="color: #000000; font-size: 30px; margin-top: 30%;  font-family: 'Lato';"><?php 
                    $total1 = 0;
                    $total2 = 0;
                    $jumlah = 0;
                    foreach($query5 as $row) {
                      if($row->status_kunjungan_sem1 == "sudah") {
                        $total1 = $total1 + count($row->nik);
                      }
                      $total2 = $total2 + count($row->nik);
                    }
                    $jumlah = ($total1/$total2)*100;
                    echo $jumlah;
                     ?>%</p>
                  </div>
                  <div class="column is-6" style="text-align: left; margin-top: 20px;">
                    <p style="font-size: 20px; font-family: 'Lato'; font-weight: bold;">Datul Sem-1</p>
                    <p style="font-size: 16px; font-family: 'Lato';">Tercapai : <?php 
                    $total = 0;
                    foreach($query5 as $row) {
                      if($row->status_kunjungan_sem1 == "sudah") {
                        $total = $total + count($row->nik);
                      }
                    }
                    echo $total;
                     ?></p>
                    <p style="font-size: 16px; font-family: 'Lato';">Target : <?php 
                    $total = 0;
                    foreach($query5 as $row) {
                      $total = $total + count($row->nik);
                    }
                    echo $total;
                     ?></p>
                  </div>
                </div>
              </div>
              <div class="column is-3" style="text-align:center;">
                <div class="columns">
                  <div class='progress2 column is-6'>
                    <p style="color: #000000; font-size: 30px; margin-top: 30%;  font-family: 'Lato';"><?php 
                    $total1 = 0;
                    $total2 = 0;
                    $jumlah = 0;
                    foreach($query4 as $row) {
                      if($row->status_kunjungan_sem1 == "sudah") {
                        $total1 = $total1 + count($row->nik);
                      }
                      $total2 = $total2 + count($row->nik);
                    }
                    $jumlah = ($total1/$total2)*100;
                    echo $jumlah;
                     ?>%</p>
                  </div>
                  <div class="column is-6" style="text-align: left; margin-top: 20px;">
                    <p style="font-size: 20px; font-family: 'Lato'; font-weight: bold;">HV Sem-1</p>
                    <p style="font-size: 16px; font-family: 'Lato';">Tercapai : <?php 
                    $total = 0;
                    foreach($query4 as $row) {
                      if($row->status_kunjungan_sem1 == "sudah") {
                        $total = $total + count($row->nik);
                      }
                    }
                    echo $total;
                     ?></p>
                    <p style="font-size: 16px; font-family: 'Lato';">Target : <?php 
                    $total = 0;
                    foreach($query4 as $row) {
                      $total = $total + count($row->nik);
                    }
                    echo $total;
                     ?></p>
                  </div>
                </div>
              </div>
              <div class="column is-3" style="text-align:center;">
                <div class="columns">
                  <div class='progress2 column is-6'>
                    <p style="color: #000000; font-size: 30px; margin-top: 30%;  font-family: 'Lato';"><?php 
                    $total1 = 0;
                    $total2 = 0;
                    $jumlah = 0;
                    foreach($query5 as $row) {
                      if($row->status_kunjungan_sem2 == "sudah") {
                        $total1 = $total1 + count($row->nik);
                      }
                      $total2 = $total2 + count($row->nik);
                    }
                    $jumlah = ($total1/$total2)*100;
                    echo $jumlah;
                     ?>%</p>
                  </div>
                  <div class="column is-6" style="text-align: left; margin-top: 20px;">
                    <p style="font-size: 20px; font-family: 'Lato'; font-weight: bold;">Datul Sem-2</p>
                    <p style="font-size: 16px; font-family: 'Lato';">Tercapai : <?php 
                    $total = 0;
                    foreach($query5 as $row) {
                      if($row->status_kunjungan_sem2 == "sudah") {
                        $total = $total + count($row->nik);
                      }
                    }
                    echo $total;
                     ?></p>
                    <p style="font-size: 16px; font-family: 'Lato';">Target : <?php 
                    $total = 0;
                    foreach($query5 as $row) {
                      $total = $total + count($row->nik);
                    }
                    echo $total;
                     ?></p>
                  </div>
                </div>
              </div>
              <div class="column is-3" style="text-align:center;">
                <div class="columns">
                  <div class='progress2 column is-6'>
                    <p style="color: #000000; font-size: 30px; margin-top: 30%;  font-family: 'Lato';"><?php 
                    $total1 = 0;
                    $total2 = 0;
                    $jumlah = 0;
                    foreach($query4 as $row) {
                      if($row->status_kunjungan_sem2 == "sudah") {
                        $total1 = $total1 + count($row->nik);
                      }
                      $total2 = $total2 + count($row->nik);
                    }
                    $jumlah = ($total1/$total2)*100;
                    echo $jumlah;
                     ?>%</p>
                  </div>
                  <div class="column is-6" style="text-align: left; margin-top: 20px;">
                    <p style="font-size: 20px; font-family: 'Lato'; font-weight: bold;">HV Sem-1</p>
                    <p style="font-size: 16px; font-family: 'Lato';">Tercapai : <?php 
                    $total = 0;
                    foreach($query4 as $row) {
                      if($row->status_kunjungan_sem2 == "sudah") {
                        $total = $total + count($row->nik);
                      }
                    }
                    echo $total;
                     ?></p>
                    <p style="font-size: 16px; font-family: 'Lato';">Target : <?php 
                    $total = 0;
                    foreach($query4 as $row) {
                      $total = $total + count($row->nik);
                    }
                    echo $total;
                     ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.com/libraries/jQuery.mmenu"></script>

    <script src="<?php echo base_url();?>/js/jquery.sidebar.js"></script>
    <script src="http://jillix.github.io/jQuery-sidebar/js/handlers.js"></script>
    <script src="/bulma-admin-dashboard-template/dist/build.js"></script>

    <script src="<?php echo base_url();?>js/bar_sk.js"></script>
    <script>
      <?php
      $jumlah = 0;
      $total_orang1 = 0;
      $total_orang2 = 0;
      $total_orang3 = 0;
      foreach($query3 as $row) {
        $date1 = strtotime($row->tgl_awal_tangguhan);
        $date2 = strtotime(date('Y-m-d'));
        $jumlah = $date2 - $date1;
        $days = $jumlah / 86400;
        $months = $days / 30;
        if($months <= 6 && $months > 0) {
          $total_orang1 = $total_orang + count($row->nik);
        }else if($months <= 12 && $months > 6) {
          $total_orang2 = $total_orang + count($row->nik);
        }else if($months > 12) {
          $total_orang3 = $total_orang + count($row->nik);
        }
      }
      ?>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'horizontalBar',

          // The data for our dataset
          data: {
              labels: ["1 - 6 Bulan", "6 - 12 Bulan", "12 Bulan ++"],
              datasets: [{
                  label: "Pensiunan yang Ditangguhkan",
                  borderColor: ['rgb(0, 255, 0)', 'rgb(255, 255, 0)', 'rgb(255, 0, 0)'],
                  backgroundColor: ['rgb(0, 255, 0)', 'rgb(255, 255, 0)', 'rgb(255, 0, 0)'],
                  data: [<?php echo $total_orang1; ?>, <?php echo $total_orang2; ?>, <?php echo $total_orang3; ?>],
              }]
          },
      });
    </script>
    <script src="<?php echo base_url();?>js/chart_atas.js"></script>

    <script>
      function formatCurrency(n, c, d, t) {
        "use strict";

        var s, i, j;

        c = isNaN(c = Math.abs(c)) ? 0 : c;
        d = d === undefined ? "," : d;
        t = t === undefined ? "." : t;

        s = n < 0 ? "-" : "";
        i = parseInt(n = Math.abs(+n || 0).toFixed(c), 10) + "";
        j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
      }

/**
 * Thermometer Progress meter.
 * This function will update the progress element in the "thermometer"
 * to the updated percentage.
 * If no parameters are passed in it will read them from the DOM
 *
 * @param {Number} goalAmount The Goal amount, this represents the 100% mark
 * @param {Number} progressAmount The progress amount is the current amount
 * @param {Boolean} animate Whether to animate the height or not
 *
 */
 function thermometer(goalAmount, progressAmount, animate) {
  "use strict";

  var $thermo = $("#thermometer"),
  $progressb = $(".progressb", $thermo),
  $goal = $(".goal", $thermo),
  percentageAmount;

  goalAmount = goalAmount || parseFloat( $goal.text() ),
  progressAmount = progressAmount || parseFloat( $progressb.text() ),
    percentageAmount =  Math.min( Math.round(progressAmount / goalAmount * 1000) / 10, 100); //make sure we have 1 decimal point

    //let's format the numbers and put them back in the DOM
    $goal.find(".amount").text( formatCurrency( goalAmount ) + "SK" );
    $progressb.find(".amount").text( formatCurrency( progressAmount ) + "SK" );


    //let's set the progress indicator
    $progressb.find(".amount").hide();
    if (animate !== false) {
      $progressb.animate({
        "height": percentageAmount + "%"
      }, 1200, function(){
        $(this).find(".amount").fadeIn(500);
      });
    }
    else {
      $progressb.css({
        "height": percentageAmount + "%"
      });
      $progressb.find(".amount").fadeIn(500);
    }
  }

  $(document).ready(function(){

    //call without the parameters to have it read from the DOM
    thermometer();
    // or with parameters if you want to update it using JavaScript.
    // you can update it live, and choose whether to show the animation
    // (which you might not if the updates are relatively small)
    //thermometer( 1000000, 425610, false );

  });

</script>

</body>

</html>
