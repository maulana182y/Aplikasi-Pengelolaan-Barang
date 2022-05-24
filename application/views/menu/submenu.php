<?php $this->load->view('template/header');?>
<body class="bg-default">
  <?php $this->load->view('template/sidebar_menu'); ?>
  <?php $this->load->view('template/navbar_header'); ?>
  <?php $this->load->view('template/page_header'); ?>
  <!-- Topnav -->

  <!-- Page content -->
  <div class="container-fluid mt--6">

    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Submenu Management</h3>
            <!-- alert -->
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newSubMenuModal"> Add New Submenu</a>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Menu</th>
                  <th>Url</th>
                  <th>Icon</th>
                  <th>Active</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php $n=1;
               foreach ($subMenu as $d) { 
                if ($d->is_active=='1')$status='Active'; 
                else if ($d->is_active=='0')$status='Inactive'; 
                ?> 
                <tr>
                  <td width="5%"><?php echo $n; ?></td>
                  <td width="20%"><?php echo $d->title; ?></td>
                  <td width="20%"><?php echo $d->menu; ?></td>
                  <td width="20%"><?php echo $d->url; ?></td>
                  <td width="20%"><?php echo $d->icon; ?></td>
                  <td width="10%"><?php echo $status; ?></td>

                  <td>


                    <?php if ($d->is_active=='0') { ?>
                      <form role="form" action="<?php echo base_url(). 'menu/activateSmenu'; ?>" method="post">
                        <a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'menu/edit_Submenu/'.$d->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
                        <input type="hidden" name="id" value="<?php echo $d->id; ?>">
                        <input type="hidden" name="value" value="1">
                        <button class="btn btn-sm btn-danger" type="submit" name="submit"><i class="fa fa-eye"></i> Active</a></button>
                      </form>
                    <?php }else if ($d->is_active=='1') { ?>
                      <form role="form" action="<?php echo base_url(). 'menu/activateSmenu'; ?>" method="post">
                        <a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'menu/edit_Submenu/'.$d->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
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






  <!-- Modal -->
  <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newSubMenuModalLabel">Add New Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('menu/submenu'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Submenu Name</label>
              <input class="form-control" type="text" id="title" name="title" placeholder="Submenu Name">
            </div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Submenu Url</label>
              <input class="form-control" type="text" id="url" name="url" placeholder="Submenu Url">
            </div>
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Submenu Icon</label>
              <input class="form-control" type="text" id="icon" name="icon" placeholder="Submenu Icon">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" checked>
                <label class="form-check-lable" for="is_active">
                  Active?
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
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