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
            <li><a class="is-active" href="#"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Iuran</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> SK Masuk</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-desktop"></i></span> Tangguhan</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-table"></i></span> Kelebihan Bayar</a></li>  
          </ul>
          <p class="menu-label">
            Administration
          </p>
          <ul class="menu-list">
            <li><a href="#"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Forms</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-desktop"></i></span> UI Elements</a></li>
            <li><a href="#"><span class="icon is-small"><i class="fa fa-table"></i></span> Tables</a></li>            
            <li><a href="#"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Presentations</a></li>

            <li>
              <a class=""><i class="fa fa-cog"></i> Settings</a>
              <ul>
                <li><a>Members</a></li>
                <li><a>Plugins</a></li>
                <li><a>Add a member</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </aside>

      <main class="column">
        <div class="level">
          <div class="level-left">
            <nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs" style="margin-left: 10px;">
              <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Kelebihan Bayar</a></li>
              </ul>
            </nav>
          </div>
          <div class="level-right">
            <div class="level-item">
              <button type="button" class="button is-medium" style="margin-right: 10px;">
                <?php 
                $date = strtotime(date('Y-m-d'));
                $month = date("m", $date);

                if($month > 6 && $month <= 12) {
                  echo "Semester 2";
                }else if($month > 0 && $month <= 6) {
                  echo "Semester 1";
                } ?>
              </button>
            </div>
          </div>
        </div>
        <div class="column is-12">
          <h2 style="margin-bottom:10px;">Filter</h2>
          <div class="field has-addons">
            <div class="control" style="width:40%">
              <input class="input is-danger" type="text" placeholder="Cari Instansi" id="isiInstansi">
              <p class="help is-danger">Instansi Tidak Terdapat di Database</p>
            </div>
            <div class="control">
              <a class="button is-info" id="butInstansi">
                Tambah Filtering
              </a>
            </div>
            <div class="control" style="width:40%; margin-left:10%;">
              <input class="input" type="text" placeholder="Cari NIK">
            </div>
            <div class="control">
              <a class="button is-info">
                Tambah Filtering
              </a>
            </div>
          </div>
          <div class="field has-addons">
            <div class="control is-expanded">
              <div class="select is-fullwidth">
                <select name="country">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
            <div class="control">
              <button type="submit" class="button is-info">Tambah Ahli Waris</button>
            </div>
          </div>

          <div class="columns">
            <div class="column is-4">
              <label class="label">Instansi</label>
              <div class="field is-grouped is-grouped-multiline" id="instansi">
                <div class="control" id="coba">
                  <div class="tags has-addons">
                    <a class="tag is-link" id="ubah">Papua</a>
                    <a class="tag is-delete"></a>
                  </div>
                </div>

                <div class="control">
                  <div class="tags has-addons">
                    <a class="tag is-link">Jawa Barat</a>
                    <a class="tag is-delete"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-4">
              <label class="label">NIK</label>
              <div class="field is-grouped is-grouped-multiline">
                <div class="control">
                  <div class="tags has-addons">
                    <a class="tag is-link">Papua</a>
                    <a class="tag is-delete"></a>
                  </div>
                </div>

                <div class="control">
                  <div class="tags has-addons">
                    <a class="tag is-link">Jawa Barat</a>
                    <a class="tag is-delete"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-4">
              <label class="label">Ahli Waris</label>
              <div class="field is-grouped is-grouped-multiline">
                <div class="control">
                  <div class="tags has-addons">
                    <a class="tag is-link">Papua</a>
                    <a class="tag is-delete"></a>
                  </div>
                </div>

                <div class="control">
                  <div class="tags has-addons">
                    <a class="tag is-link">Jawa Barat</a>
                    <a class="tag is-delete"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel column is-12">
          <div class="panel-heading">
            <label class="label">All Table</label>
          </div>
          <div class="panel-block column is-12">
            <table id="fullfeatures" class="table is-striped is-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama Pensiun</th>
                  <th>Instansi</th>
                  <th>Ahli Waris</th>
                  <th>Tanggal Lahir</th>
                  <th>Status Kunjungan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $date = strtotime(date('Y-m-d'));
                $month = date("m", $date);
                foreach($query as $row) {
                  ?>
                  <tr>
                    <td style="padding-top:15px;"><?php echo $row->nik ?></td>
                    <td style="padding-top:15px;"><?php echo $row->nama_pensiun ?></td>
                    <td style="padding-top:15px;"><?php echo $row->instansi ?></td>
                    <td style="padding-top:15px;"><?php echo $row->ahli_waris ?></td>
                    <td style="padding-top:15px;"><?php echo $row->tgl_lahir ?></td>
                    <td style="padding-top:15px;"><?php 
                    if($month > 6 && $month <= 12) {
                      echo $row->status_kunjungan_sem2;
                    }else if($month > 0 && $month <= 6) {
                      echo $row->status_kunjungan_sem1;
                    } ?></td>
                    <td style="width:200px">
                      <a class="button is-link" id="formDetail">Detail</a>
                    </td>
                  </tr>
                  <?php
                }

                ?>
                <?php 
                $date = strtotime(date('Y-m-d'));
                $month = date("m", $date);

                foreach($query2 as $row) {
                  ?>
                  <tr>
                    <td style="padding-top:15px;"><?php echo $row->nik ?></td>
                    <td style="padding-top:15px;"><?php echo $row->nama_pensiun ?></td>
                    <td style="padding-top:15px;"><?php echo $row->instansi ?></td>
                    <td style="padding-top:15px;"><?php echo $row->ahli_waris ?></td>
                    <td style="padding-top:15px;"><?php echo $row->tgl_lahir ?></td>
                    <td style="padding-top:15px;"><?php 
                    if($month > 6 && $month <= 12) {
                      echo $row->status_kunjungan_sem2;
                    }else if($month > 0 && $month <= 6) {
                      echo $row->status_kunjungan_sem1;
                    } ?></td>
                    <td style="width:200px">
                      <a class="button is-link" id="formDetail">Detail</a>
                    </td>
                  </tr>
                  <?php
                }

                ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="columns">
          <div class="panel column is-6">
            <div class="panel-heading">
              Home Visit Per-Cabang
            </div>
            <div class="panel-block" style="width:100%;">
              <table id="Home" class="table is-striped is-bordered" cellspacing="0" width="100%" style="margin-left:0px; margin-bottom:-10px;">
                <thead>
                  <tr>
                    <th>Cabang</th>
                    <th>Total Semester 1</th>
                    <th>Total Semester 2</th>
                    <th>Target</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $total_target = 0;
                  foreach($query3 as $row) {
                    ?>
                    <tr>
                      <td style="padding-top:15px;"><?php echo $row->cabang ?></td>
                      <td style="padding-top:15px;"><?php echo $row->total_visit_sem1 ?> Jiwa</td>
                      <td style="padding-top:15px;"><?php echo $row->total_visit_sem2 ?> Jiwa</td>
                      <td style="padding-top:15px;"><?php echo $row->target ?> Jiwa</td>
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
              Ahli Waris 0
            </div>
            <div class="panel-block" style="width:100%;">
              <table id="Waris" class="table is-striped is-bordered" cellspacing="0" width="100%" style="margin-left:0px; margin-bottom:-10px;">
                <thead>
                  <tr>
                    <th>NIK</th>
                    <th>Nama Pensiun</th>
                    <th>Tanggal Lahir</th>
                    <th>Status Kunjungan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                $date = strtotime(date('Y-m-d'));
                $month = date("m", $date);

                  foreach($query as $row) {
                    if($row->ahli_waris == 0) {
                      ?>
                      <tr>
                        <td style="padding-top:15px;"><?php echo $row->nik ?></td>
                        <td style="padding-top:15px;"><?php echo $row->nama_pensiun ?></td>
                        <td style="padding-top:15px;"><?php echo $row->tgl_lahir ?></td>
                        <td style="padding-top:15px;"><?php 
                    if($month > 6 && $month <= 12) {
                      echo $row->status_kunjungan_sem2;
                    }else if($month > 0 && $month <= 6) {
                      echo $row->status_kunjungan_sem1;
                    } ?></td>
                        <td style="width:200px">
                          <a class="button is-link" id="formDetail">Detail</a>
                        </td>
                      </tr>
                      <?php 
                    }
                  }

                  ?>
                  <?php 
                $date = strtotime(date('Y-m-d'));
                $month = date("m", $date);

                  foreach($query2 as $row) {
                    if($row->ahli_waris == 0) {
                      ?>
                      <tr>
                        <td style="padding-top:15px;"><?php echo $row->nik ?></td>
                        <td style="padding-top:15px;"><?php echo $row->nama_pensiun ?></td>
                        <td style="padding-top:15px;"><?php echo $row->tgl_lahir ?></td>
                        <td style="padding-top:15px;"><?php 
                    if($month > 6 && $month <= 12) {
                      echo $row->status_kunjungan_sem2;
                    }else if($month > 0 && $month <= 6) {
                      echo $row->status_kunjungan_sem1;
                    } ?></td>
                        <td style="width:200px">
                          <a class="button is-link" id="formDetail">Detail</a>
                        </td>
                      </tr>
                      <?php
                    }
                  }

                  ?>
                </tbody>
              </table>
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
              <li class="li_1"><a id="a_1" href="#0">Yes</a></li>
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
    <!-- <div class="control">
        <div class="tags has-addons">
          <a class="tag is-link">Jawa Barat</a>
          <a class="tag is-delete"></a>
        </div>
      </div> -->
      <script>
        $(document).ready(function() {
          $('#butInstansi').click(function() {
            $("#instansi").append(" " + $("#isiInstansi").val())
          })
        })
      </script>

      <script src="<?php echo base_url();?>js/bar_sk.js"></script>
      <script src="<?php echo base_url();?>js/chart_pensiun.js"></script>
      <script src="<?php echo base_url();?>js/chart_atas.js"></script>

    </body>

    </html>
