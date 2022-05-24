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
            <h3 class="mb-0">Tabel Satuan</h3>
            <!-- alert -->
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newSatuanModal"> Tambah Data </a>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Kode Satuan</th>
                  <th>Nama Satuan</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php if(is_array($list_data)){ ?>
                    <?php $no = 1;?>
                    <?php foreach($list_data as $dd): ?>
                      <td><?=$no?></td>
                      <td><?=$dd->kode_satuan?></td>
                      <td><?=$dd->nama_satuan?></td>
                      <td><a type="button" class="btn btn-info"  href="<?=base_url('barang/update_satuan/'.$dd->id_satuan)?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                      <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('barang/delete_satuan/'.$dd->id_satuan)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
  <div class="modal fade" id="newSatuanModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newSubMenuModalLabel">Add Satuan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  id="form_id" action="<?= base_url('Barang/proses_satuan_insert'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="kode_satuan" class="form-control-label">Kode Satuan</label>
              <input class="form-control" type="text" id="kode_satuan" name="kode_satuan" placeholder=" Kode Satuan">
            </div>
            <div class="form-group">
              <label for="nama_satuan" class="form-control-label">Nama Satuan</label>
              <input class="form-control" type="text" id="nama_satuan" name="nama_satuan" placeholder="Nama Satuan">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="submit" name="submit" value="submit-isi-apa-aja-boleh" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>



<!-- <script >
     // JS on submit
     $("#form_id").submit(function(){
      alert("Telah disubmit");
      $("#newBarangMasukModal").modal("hide");
    });
  </script> -->

  <!-- menampilkan notifikasi yakin -->
  <!-- <script >
  jQuery(document).ready(function($){
      $('.btn-delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Delete Data',
                  text: 'Yakin Ingin Menghapus Data ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });
  });
</script> -->

<?php if ($this->session->flashdata('sukses')) { ?>        
  <script type="text/javascript">
    alert("<?php echo $this->session->flashdata('sukses'); ?>");
  </script>
<?php }
    //$this->load->view('template/footer');
$this->load->view('template/js');?>
</body>

</html>