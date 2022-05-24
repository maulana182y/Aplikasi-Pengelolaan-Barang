<?php $this->load->view('template/header');?>
  <body class="bg-default">
  <?php $this->load->view('template/sidebar_menu'); ?>
  <?php $this->load->view('template/navbar_header'); ?>
    <!-- Topnav -->

    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(assets/temp2/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?= $user['nama']; ?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see and edit your profile</p>
            <a href="<?= base_url('profile/edit_profile');?>" class="btn btn-neutral">Edit profile</a>
            <div class="row">
              <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="<?= base_url('assets/temp2') ?>/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?= base_url('assets/profile/') . $user['profile_picture']; ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  <?= $user['nama'] ?><span class="font-weight-light"></span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?= $user['alamat'] ?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Email: <?= $user['email'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="row">
            <div class="col-lg-6">
              <div class="card bg-gradient-info border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total traffic</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap text-light">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bg-gradient-danger border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">Performance</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-spaceship"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap text-light">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Profile </h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <!-- <?= form_open_multipart('Profile'); ?> -->
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control" value="<?= $user['username']; ?>" readonly >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Full name</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $user['nama']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email </label>
                        <input type="text" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="form-control-label">Picture</div>
                        <div class="col-sm-10">
                          <div class="row">
                            <div class="col-auto mb-2 mt-1">
                              <img src="<?= base_url('assets/profile/') . $user['profile_picture']; ?>" class="img-thumbnail" >
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="alamat" name="alamat" class="form-control" type="text" value="<?= $user['alamat']; ?>" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                
              </form>
            </div>
          </div>
        </div>
      </div>
    
        <?php if ($this->session->flashdata('sukses')) { ?>        
        <script type="text/javascript">
            alert("<?php echo $this->session->flashdata('sukses'); ?>");
        </script>
<?php }
    //$this->load->view('template/footer');
    $this->load->view('template/js');?>
</body>

</html>