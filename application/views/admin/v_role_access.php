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
              <h3 class="mb-2">Role Management</h3>
              <h4>Role : <?= $role['role']; ?></h4>
              <!-- alert -->
              
              <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Menu</th>
                    <th>Access</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach($menu as $m):?>
                  <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $m['menu']; ?></td>
                    <td>
                      <div class="form-check">
                        <!-- mendafatkan data dari table melalui helper -->
                        <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                      </div>
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









    
    
        <?php if ($this->session->flashdata('sukses')) { ?>        
        <script type="text/javascript">
            alert("<?php echo $this->session->flashdata('sukses'); ?>");
        </script>
<?php }
    //$this->load->view('template/footer');
    $this->load->view('template/js');?>
</body>

</html>