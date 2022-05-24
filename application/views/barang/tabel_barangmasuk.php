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
            <h3 class="mb-0">Tabel Barang Masuk</h3>
            <!-- alert -->
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newBarangmasukModal"> Tambah Data Masuk</a>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>ID_Transaksi</th>
                  <th>Tanggal</th>
                  <th>Lokasi</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Jumlah</th>
                  <th>Update</th>
                  <th>Delete</th>
                  <th>Keluarkan</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                <?php if(is_array($list_data)){ ?>
                  <?php $no = 1;?>
                  <?php foreach($list_data as $dd): ?>
                    <td><?=$no?></td>
                    <td><?=$dd->id_transaksi?></td>
                    <td><?=$dd->tanggal?></td>
                    <td><?=$dd->lokasi?></td>
                    <td><?=$dd->kode_barang?></td>
                    <td><?=$dd->nama_barang?></td>
                    <td><?=$dd->satuan?></td>
                    <td><?=$dd->jumlah?></td>
                    <td><a type="button" class="btn btn-info"  href="<?=base_url('Barang/update_barang/'.$dd->id_transaksi)?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('Barang/delete_barang/'.$dd->id_transaksi)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    <td><a type="button" class="btn btn-success btn-barangkeluar"  href="<?=base_url('Barang/barang_keluar/'.$dd->id_transaksi)?>" name="btn_barangkeluar" style="margin:auto;"><i class="fa fa-sign-out" aria-hidden="true"></i></a></td>
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
<div class="modal fade" id="newBarangmasukModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add Barang Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  id="form_id" action="<?= base_url('Barang/proses_databarang_masuk'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">ID Transaksi</label>
            <input class="form-control" type="text" id="id_transaksi" readonly="readonly" name="id_transaksi" value="IB-<?=date("Y");?><?=random_string('numeric', 8);?>">
          </div>
          <div class="form-group">
            <label for="tanggal" class="form-control-label">Tanggal</label>
            <input class="form-control" type="date" id="tanggal" name="tanggal" placeholder="Klik disini">
          </div>
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Lokasi</label>
            <select name="lokasi" id="lokasi" class="form-control">
              <option value="">-- Pilih --</option>
              <option value="Aceh">Aceh</option>
              <option value="Bali">Bali</option>
              <option value="Bengkulu">Bengkulu</option>
              <option value="Jakarta">Jakarta Raya</option>
              <option value="Jambi">Jambi</option>
              <option value="Jawa Tengah">Jawa Tengah</option>
              <option value="Jawa Timur">Jawa Timur</option>
              <option value="Jawa Barat">Jawa Barat</option>
              <option value="Papua">Papua</option>
              <option value="Yogyakarta">Yogyakarta</option>
              <option value="Kalimantan Barat">Kalimantan Barat</option>
              <option value="Kalimantan Selatan">Kalimantan Selatan</option>
              <option value="Kalimantan Tengah">Kalimantan Tengah</option>
              <option value="Kalimantan Timur">Kalimantan Timur</option>
              <option value="Lampung">Lampung</option>
              <option value="NTB">Nusa Tenggara Barat</option>
              <option value="NTT">Nusa Tenggara Timur</option>
              <option value="Riau">Riau</option>
              <option value="Sulawesi Selatan">Sulawesi Selatan</option>
              <option value="Sulawesi Tengah">Sulawesi Tengah</option>
              <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
              <option value="Sumatera Barat">Sumatera Barat</option>
              <option value="Sumatera Utara">Sumatera Utara</option>
              <option value="Maluku">Maluku</option>
              <option value="Maluku Utara">Maluku Utara</option>
              <option value="Sulawesi Utara">Sulawesi Utara</option>
              <option value="Sulawesi Selatan">Sumatera Selatan</option>
              <option value="Banten">Banten</option>
              <option value="Gorontalo">Gorontalo</option>
              <option value="Bangka">Bangka Belitung</option>
            </select>
          </div>
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Kode Barang</label>
            <input class="form-control" type="text" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
          </div>
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Barang</label>
            <input class="form-control" type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <label for="satuan" class="form-control-label">Satuan</label>
            <select name="satuan" id="satuan" class="form-control">
              <option value="">-- Pilih --</option>
              <?php foreach($list_satuan as $s) : ?>
                <option value="<?= $s->kode_satuan; ?>"><?= $s->nama_satuan ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jumlah" class="form-control-label">Jumlah</label>
            <input class="form-control" type="number" id="jumlah" name="jumlah" placeholder="Jumlah">
          </div>
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