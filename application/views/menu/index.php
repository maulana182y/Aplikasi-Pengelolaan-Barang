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
              <h3 class="mb-0">Menu Management</h3>
              <!-- alert -->
              <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
              
              <?= $this->session->flashdata('message'); ?>
              <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newMenuModal"> Add New Menu</a>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Menu</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach($menu as $m):?>
                  <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $m['menu']; ?></td>
                    <!-- <td>
                      <a href="<?php echo base_url().'menu/edit_menu/'.$m['id']; ?>" class="badge badge-success">edit</a>

                    </td> -->
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
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Menu Name</label>
            <input class="form-control" type="text" id="menu" name="menu" placeholder="Menu Name">
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