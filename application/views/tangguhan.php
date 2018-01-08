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
  <link rel="stylesheet" href="<?php echo base_url();?>css/delete_data.css">

</head>

<style>

/**
 * Overlay
 * -- only show for tablet and up
 */
 @media only screen and (min-width: 40em) {
  .modal-overlay {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 5;
    background-color: rgba(0, 0, 0, 0.6);
    opacity: 0;
    visibility: hidden;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
    transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  }
  .modal-overlay.active {
    opacity: 1;
    visibility: visible;
  }
}
/**
 * Modal
 */
 .modal {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
  margin: 0 auto;
  background-color: #fff;
  width: 710px;
  max-width: 75rem;
  min-height: 20rem;
  padding: 1rem;
  border-radius: 3px;
  opacity: 0;
  overflow-y: auto;
  visibility: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
  -webkit-transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
}
.modal .close-modal {
  position: absolute;
  cursor: pointer;
  top: 5px;
  right: 15px;
  opacity: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.modal .close-modal svg {
  width: 1.75em;
  height: 1.75em;
}
.modal .modal-content {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.modal.active {
  visibility: visible;
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}
.modal.active .modal-content {
  opacity: 1;
}
.modal.active .close-modal {
  -webkit-transform: translateY(10px);
  transform: translateY(10px);
  opacity: 1;
}

/**
 * Mobile styling
 */
 @media only screen and (max-width: 39.9375em) {
  h1 {
    font-size: 1.5rem;
  }

  .modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-overflow-scrolling: touch;
    border-radius: 0;
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    padding: 0 !important;
  }

  .close-modal {
    right: 20px !important;
  }
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
            <li><a href="<?php echo base_url(); ?>index.php/rute/iuran"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Iuran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rute/sk"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> SK Masuk</a></li>
            <li><a class="is-active" href="<?php echo base_url(); ?>index.php/rute/tangguhan"><span class="icon is-small"><i class="fa fa-desktop"></i></span> Tangguhan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rute/kelebihan_bayar"><span class="icon is-small"><i class="fa fa-table"></i></span> Kelebihan Bayar</a></li>  
          </ul>
          <p class="menu-label">
            Filter Pada All Table
          </p>
          <ul class="menu-list">
          <form action="<?php echo base_url()."index.php/rute/filter_tangguhan"; ?>" method="POST">
            <nav class="panel">
              <a class="panel-block" style="">
                Jenis Tangguhan
                <div class="control" style="">
                  <div class="select is-fullwidth">
                    <select name="jenis_tangguhan">
                      <option value="janda/duda">Janda/Duda/Anak</option>
                      <option value="pensiunan ilang">Pensiunan Ilang</option>
                      <option value="dll">Dll</option>
                    </select>
                  </div>
                </div>
              </a>
              <a class="panel-block" style="">
                Maksimum Total Manfaat
                <div class="columns">
                  <div class="column is-12">
                    <div class="field has-addons">
                      <p class="control">
                        <span class="select">
                          <select>
                            <option>Rp.</option>
                          </select>
                        </span>
                      </p>
                      <p class="control">
                        <input class="input" type="number" placeholder="Jumlah Uang" name="total_maximum" value="<?php 

                  foreach($query3 as $row) {
                    echo $row->total_manfaat_ditangguhkan;
                  }

                  ?>">
                      </p>
                    </div>
                  </div>
                </div>
              </a>
              <div class="panel-block">
                <button class="button is-link is-outlined is-fullwidth">
                  Filter
                </button>
              </div>
            </nav>
            </form>
          </ul>
        </nav>
      </aside>

      <main class="column">
        <div class="column is-12" style="margin-bottom:-20px;">
          <nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Tangguhan</a></li>
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
                  if($row->jenis_tangguhan == "janda/duda") {
                    $jumlah = $jumlah + count($row->nik);
                  }
                } 
                echo $jumlah;
                ?>
              Jiwa</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">0 - 6 Bulan</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "janda/duda") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                        if($months <= 6 && $months > 0) {
                          $total_orang = $total_orang + count($row->nik);
                        }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">6 - 12 Bulan</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "janda/duda") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months > 6 && $months <= 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">12 Bulan++</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "janda/duda") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months > 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column" style="text-align:center">
            <div class="box notification is-warning">
              <div class="heading">Pensiunan Ilang</div>
              <div class="title">
                <?php
                $jumlah = 0;
                foreach($query as $row) {
                  if($row->jenis_tangguhan == "pensiunan ilang") {
                    $jumlah = $jumlah + count($row->nik);
                  }
                } 
                echo $jumlah;
                ?>
              Jiwa</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">0 - 6 Bulan</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "pensiunan ilang") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months <= 6 && $months > 0) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">6 - 12 Bulan</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "pensiunan ilang") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months > 6 && $months <= 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">12 Bulan++</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "pensiunan ilang") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months > 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column" style="text-align:center">
            <div class="box notification is-info">
              <div class="heading">Dan Lain-lain</div>
              <div class="title">
                <?php
                $jumlah = 0;
                foreach($query as $row) {
                  if($row->jenis_tangguhan == "dll") {
                    $jumlah = $jumlah + count($row->nik);
                  }
                } 
                echo $jumlah;
                ?>
              Jiwa</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">0 - 6 Bulan</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "dll") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months <= 6 && $months > 0) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">6 - 12 Bulan</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "dll") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months > 6 && $months <= 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
                      ?>
                    Jiwa</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">12 Bulan++</div>
                    <div class="title is-5">
                      <?php
                      $jumlah = 0;
                      $total_orang = 0;
                      foreach($query as $row) {
                        if($row->jenis_tangguhan == "dll") {
                          $date1 = strtotime($row->tgl_awal_tangguhan);
                          $date2 = strtotime(date('Y-m-d'));
                          $jumlah = $date2 - $date1;
                          $days = $jumlah / 86400;
                          $months = $days / 30;
                      if($months > 12) {
                        $total_orang = $total_orang + count($row->nik);
                      }
                        }
                      }
                      echo $total_orang;
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
              <label class="label">Data Tangguhan</label>
            </div>
            <div class="panel-block column is-12">
              <table id="fullfeatures" class="table is-striped is-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jenis Tangguhan</th>
                    <th style="width: 200px;">Total Manfaat yang ditangguhan</th>
                    <th>Awal Tangguhan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th colspan="2">Jumlah</th>
                    <?php
                              $total = 0;

                              foreach($query2 as $row) {
                                $total = $total + $row->total_manfaat_ditangguhkan;
                              }
                              ?>
                    <th><?php echo $total; ?></th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 

                  foreach($query2 as $row) {
                    ?>
                    <tr>
                      <td style="padding-top:15px;"><?php echo $row->nama_pensiun ?></td>
                      <td style="padding-top:15px;"><?php echo $row->jenis_tangguhan ?></td>
                      <td style="padding-top:15px;"><?php echo $row->total_manfaat_ditangguhkan ?></td>
                      <td style="padding-top:15px;"><?php echo $row->tgl_awal_tangguhan ?></td>
                      <td style="width:200px">
                        <a class="button is-success" href="<?php echo base_url()."index.php/rute/tangguhan_edit/".$row->nik;;?>">Edit</a>
                        <a class="button is-danger" href="<?php echo base_url()."index.php/rute/tangguhan_delete/".$row->nik;;?>">Delete</a>
                        <a href="<?php echo base_url()."index.php/rute/tangguhan_detail/".$row->nik;;?>" class="button is-link" >Detail</a>
                      </td>
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

      <!-- Pop up edit muncul -->
      <div class="modal-overlay">
        <div class="modal">
          <h1 class="title" style="position: absolute; top: 0; left: 0; right: 0; margin-top: 15px; margin-left: 40px;">Title</h1>
          <a class="close-modal">
            <svg viewBox="0 0 20 20">
              <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
            </svg>
          </a><!-- close modal -->

          <div class="modal-content">
            <div class="field is-horizontal" style="margin-top: 50px;">
              <div class="field-label is-normal">
                <label class="label">From</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="Name">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-check"></i>
                    </span>
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label"></div>
              <div class="field-body">
                <div class="field is-expanded">
                  <div class="field has-addons">
                    <p class="control">
                      <a class="button is-static">
                        +44
                      </a>
                    </p>
                    <p class="control is-expanded">
                      <input class="input" type="tel" placeholder="Your phone number">
                    </p>
                  </div>
                  <p class="help">Do not enter the first zero</p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Department</label>
              </div>
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select>
                        <option>Business development</option>
                        <option>Marketing</option>
                        <option>Sales</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Already a member?</label>
              </div>
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="control">
                    <label class="radio">
                      <input type="radio" name="member">
                      Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="member">
                      No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Subject</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
                  </div>
                  <p class="help is-danger">
                    This field is required
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Question</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <!-- Left empty for spacing -->
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <button class="button is-primary">
                      Send message
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- content -->
        </div><!-- modal -->
      </div><!-- overlay -->

      <!-- Pop up delete muncul -->
      <div class="cd-popup" role="alert">
        <div class="cd-popup-container">
          <p>Are you sure you want to delete this element?</p>
          <ul class="cd-buttons ul_1">
            <li class="li_1"><a id="a_1" href="#">Yes</a></li>
              <li class="li_1"><a id="a_1" href="#0">No</a></li>
            </ul>
            <a id="a_1" href="#0" class="cd-popup-close img-replace">Close</a>
          </div> <!-- cd-popup-container -->
        </div> <!-- cd-popup -->
      </main>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/dataTables.bulma.min.js"></script>

  <script>
    jQuery(document).ready(function($){
        //open popup
        $('.cd-popup-trigger').on('click', function(event){
          event.preventDefault();
          $('.cd-popup').addClass('is-visible');
        });
        
        //close popup
        $('.cd-popup').on('click', function(event){
          if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
            event.preventDefault();
            $(this).removeClass('is-visible');
          }
        });
        //close popup when clicking the esc keyboard button
        $(document).keyup(function(event){
          if(event.which=='27'){
            $('.cd-popup').removeClass('is-visible');
          }
        });
      });
    </script>

    <script>
      var elements = $('.modal-overlay, .modal');

      $('#formEdit').click(function(){
        elements.addClass('active');
      });

      $('#formDetail').click(function(){
        elements.addClass('active');
      });

      $('#formDetail2').click(function(){
        elements.addClass('active');
      });

      $('.close-modal').click(function(){
        elements.removeClass('active');
      });
    </script>

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
