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
            <p class="text-white mt-0 mb-5">This page You can edit your profile</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <!-- <form action="<?= base_url('profile'); ?>" method="post" enctype="multipart/form-data"> -->
                <?= form_open_multipart('Profile/edit_profile'); ?>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" value="<?= $user['username']; ?>" readonly >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Full name</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $user['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email </label>
                        <input type="text" id="email" name="email" class="form-control" value="<?= $user['email']; ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
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
                              <img src="<?= base_url('assets/profile/') . $user['profile_picture']; ?>" class="avatar rounded-circle" >
                            </div>
                            <div class="col-auto">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="profile_picture" name="profile_picture" lang="en">
                                <label class="custom-file-label" for="profile_picture">Select file</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="alamat" name="alamat" class="form-control" type="text" value="<?= $user['alamat']; ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row justify-content-end">
                  <div class="col-sm-8">
                    <button type="submit" id="" class="btn btn-primary">EDIT</button>
                    <button type="button" class="btn btn-primary" onClick="javascript:history.back()">Back</button>
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