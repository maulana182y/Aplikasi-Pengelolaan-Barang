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
              <h3 class="mb-0">Role Management</h3>
              <!-- alert -->
              <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
              
              <?= $this->session->flashdata('message'); ?>
              <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newRoleModal"> Add New Role</a>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach($role as $r):?>
                  <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $r['role']; ?></td>
                    <td>
                      <!-- mengambil id ketika tombol edit delete dan access di klik -->
                      <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-info">access</a>
                      <!-- <a href="" class="badge badge-success">edit</a>
                      <a href="" class="badge badge-danger">delete</a> -->

                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
      </div>






<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/add_role'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Role Name</label>
            <input class="form-control" type="text" id="role" name="role" placeholder="Role Name">
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