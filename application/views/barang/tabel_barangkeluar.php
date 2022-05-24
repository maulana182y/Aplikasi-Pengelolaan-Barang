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
            <h3 class="mb-0">Tabel Barang Keluar</h3>
            <!-- alert -->
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="<?=base_url('Barang')?>" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data Keluar</a>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>ID Transaksi</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Keluar</th>
                  <th>Lokasi</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Jumlah</th>
                  <!-- <th>Invoice</th> -->
                  <!-- <th></th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php if(is_array($list_data)){ ?>
                  <?php $no = 1;?>
                  <?php foreach($list_data as $dd): ?>
                    <td><?=$no?></td>
                    <td><?=$dd->id_transaksi?></td>
                    <td><?=$dd->tanggal_masuk?></td>
                    <td><?=$dd->tanggal_keluar?></td>
                    <td><?=$dd->lokasi?></td>
                    <td><?=$dd->kode_barang?></td>
                    <td><?=$dd->nama_barang?></td>
                    <td><?=$dd->satuan?></td>
                    <td><?=$dd->jumlah?></td>
                    <!-- <td><a type="button" class="btn btn-danger btn-report"  href="<?=base_url('report/barangKeluar/'.$dd->id_transaksi.'/'.$dd->tanggal_keluar)?>" name="btn_report" style="margin:auto;"><i class="fa fa-file-text" aria-hidden="true"></i></a></td> -->
                </tr>
                  <?php $no++; ?>
                <?php endforeach;?>
              <?php }else { ?>
                <td colspan="7" align="center"><strong>Data Kosong</strong></td>
              <?php } ?>
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