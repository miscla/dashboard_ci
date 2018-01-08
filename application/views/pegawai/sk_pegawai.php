<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">

  <meta name="language" content="en-EN" />
  <meta name="author" content="Irfan Maulana" />
  <title>Dashboard by Moch Dian Lazuardi Yudha</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bar_sk.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bar_pensiun.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/dataTables.bulma.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/dataTables.bulma.min.css">

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

  <div class="section" style="background-color: #fff;">
    <div class="columns">
      <aside class="column is-2">
        <nav class="menu">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a href="#"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Iuran</a></li>
            <li><a class="is-active" href="#"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> SK Masuk</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-desktop"></i></span> Tangguhan</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-table"></i></span> Kelebihan Bayar</a></li>  
          </ul>
          <p class="menu-label">
            Filter Pada All Table
          </p>
          <ul class="menu-list">
            <nav class="panel">
              <a class="panel-block" style="">
                Jenis SK
                <div class="control" style="">
                  <div class="select is-fullwidth">
                    <select>
                      <option>Janda/Duda/Anak</option>
                      <option>Normal</option>
                      <option>Disini</option>
                    </select>
                  </div>
                </div>
              </a>
              <a class="panel-block" style="">
                Rentang Batas Akhir SK
                <div class="columns">
                  <div class="column is-12">
                    <div class="control" style="">
                      <input class="input" type="date" name="awalTgl">
                    </div>
                  </div>
                </div>
                <p style="margin-top:-15px; margin-bottom:10px;">Sampai</p>
                <div class="columns">
                  <div class="column is-12">
                    <div class="control" style="">
                      <input class="input" type="date" name="akhirTgl">
                    </div>
                  </div>
                </div>
              </a>
              <a class="panel-block" style="">
                Status SK
                <div class="control" style="">
                  <div class="select is-fullwidth">
                    <select>
                      <option>Sudah SK</option>
                      <option>Belum SK</option>
                    </select>
                  </div>
                </div>
              </a>
              <div class="panel-block">
                <button class="button is-link is-outlined is-fullwidth">
                  Filter
                </button>
              </div>
            </nav>
          </ul>
        </nav>
      </aside>

      <main class="column">
        <div class="column is-12" style="margin-bottom:-20px;">
          <nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">SK</a></li>
            </ul>
          </nav>
        </div>
        <div class="columns is-multiline">
          <div class="column" style="text-align:center">
            <div class="box notification is-primary">
              <div class="heading">Janda/Duda/Anak</div>
              <div class="title">
                <?php
                $jumlah = 0;
                foreach($query as $row) {
                  if($row->jenis_sk == "janda/duda") {
                    $jumlah = $jumlah + count($row->nik);
                  }
                } 
                echo $jumlah;
                ?>
              Jiwa</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Sudah SK</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "selesai" && $row->jenis_sk == "janda/duda") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">SK Diproses</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "sedang diproses" && $row->jenis_sk == "janda/duda") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Belum SK</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "belum diproses" && $row->jenis_sk == "janda/duda") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column" style="text-align:center">
            <div class="box notification is-warning">
              <div class="heading">Pensiun Diri</div>
              <div class="title">
                <?php
                $jumlah = 0;
                foreach($query as $row) {
                  if($row->jenis_sk == "diri") {
                    $jumlah = $jumlah + count($row->nik);
                  }
                } 
                echo $jumlah;
                ?>
              Jiwa</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Sudah SK</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "selesai" && $row->jenis_sk == "diri") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">SK Diproses</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "sedang diproses" && $row->jenis_sk == "diri") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Belum SK</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "belum diproses" && $row->jenis_sk == "diri") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column" style="text-align:center">
            <div class="box notification is-info">
              <div class="heading">Pensiun Normal</div>
              <div class="title">
                <?php
                $jumlah = 0;
                foreach($query as $row) {
                  if($row->jenis_sk == "normal") {
                    $jumlah = $jumlah + count($row->nik);
                  }
                } 
                echo $jumlah;
                ?>
              Jiwa</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Sudah SK</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "selesai" && $row->jenis_sk == "normal") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">SK Diproses</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "sedang diproses" && $row->jenis_sk == "normal") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Belum SK</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      foreach($query as $row) {
                        if($row->status_proses == "belum diproses" && $row->jenis_sk == "normal") {
                          $jumlah = $jumlah + count($row->nik);
                        }
                      } 
                      echo $jumlah;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="columns is-multiline">
          <div class="panel column is-12">
            <div class="panel-heading">
              <label class="label">Data SK</label>
            </div>
            <div class="panel-block column is-12">
              <table id="fullfeatures" class="table is-striped is-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Instansi</th>
                    <th>Tgl Pengajuan</th>
                    <th>Batas Tanggal Terakhir</th>
                    <th>Jenis SK</th>
                    <th>Status SK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  foreach($query as $row) {
                    ?>
                    <tr>
                      <td><?php echo $row->nama_pensiun ?></td>
                      <td><?php echo $row->instansi ?></td>
                      <td><?php echo $row->tgl_pengajuan ?></td>
                      <td><?php echo $row->batas_proses ?></td>
                      <td><?php echo $row->jenis_sk ?></td>
                      <td><?php echo $row->status_proses ?></td>
                    </tr>
                    <?php
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/dataTables.bulma.min.js"></script>

<script>
  $(document).ready(function() {
    $('#fullfeatures').DataTable({
     "drawCallback": function( settings ) {
       if(!$("#fullfeatures").parent().hasClass("table-is-responsive")){
         $("#fullfeatures").wrap('<div class="table-is-responsive"></div>');
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
</script>

<script src="<?php echo base_url();?>js/bar_sk.js"></script>
<script src="<?php echo base_url();?>js/chart_pensiun.js"></script>
<script src="<?php echo base_url();?>js/chart_atas.js"></script>

</body>

</html>
