<?php $this->load->view('template/header');?>
<body class="bg-default">
  <?php $this->load->view('template/sidebar_menu'); ?>
  <?php $this->load->view('template/navbar_header'); ?>

  
  <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(assets/temp2/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">Hello <?= $user['nama']; ?></h1>
          <p class="text-white mt-0 mb-5"></p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Page content -->
  <div class="container-fluid mt--6">

    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">All User</h3>
            <!-- alert -->
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <!-- <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newSubMenuModal"> Add New User</a> -->
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php $n=1;
               foreach ($data as $d) { 
                if ($d->active=='1')$status='Active'; 
                else if ($d->active=='0')$status='Inactive'; 
                ?> 
                <tr>
                  <td width="5%"><?php echo $n; ?></td>
                  <td width="20%"><?php echo $d->nama; ?></td>
                  <td width="20%"><?php echo $d->role; ?></td>
                  <td width="20%"><?php echo $d->email; ?></td>
                  <td width="20%"><?php echo $d->alamat; ?></td>
                  <td width="10%"><?php echo $status; ?></td>
                  <td>


                    <?php if ($d->active=='0') { ?>
                      <form role="form" action="<?php echo base_url(). 'admin/activateUsers'; ?>" method="post">
                        <a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'admin/edit_user/'.$d->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
                        <input type="hidden" name="id" value="<?php echo $d->id; ?>">
                        <input type="hidden" name="value" value="1">
                        <button class="btn btn-sm btn-danger" type="submit" name="submit"><i class="fa fa-eye"></i> Active</a></button>
                      </form>
                    <?php }else if ($d->active=='1') { ?>
                      <form role="form" action="<?php echo base_url(). 'admin/activateUsers'; ?>" method="post">
                        <a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'admin/edit_user/'.$d->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
                        <input type="hidden" name="id" value="<?php echo $d->id; ?>">
                        <input type="hidden" name="value" value="0">
                        <button class="btn btn-sm btn-danger" type="submit" name="submit" style="background-color:#bd0011; border-color:#bd0011";><i class="fa fa-eye-slash"></i> Inactive</a></button>
                      </form>
                    <?php }?>
                  </td>
                </tr>
                <?php $n++;}?>
              </tbody>
            </table>
          </div>
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