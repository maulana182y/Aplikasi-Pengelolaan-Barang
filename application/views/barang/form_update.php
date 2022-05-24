<?php $this->load->view('template/header');?>
<body class="bg-default">
  <?php $this->load->view('template/sidebar_menu'); ?>
  <?php $this->load->view('template/navbar_header'); ?>
  <?php $this->load->view('template/page_header'); ?>
  <!-- Topnav -->

  <!-- <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(assets/temp2/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;"> -->
    <!-- Mask -->
    <!-- <span class="mask bg-gradient-default opacity-8"></span>
    Header container
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">Hello <?= $user['nama']; ?></h1>
          <p class="text-white mt-0 mb-5"></p>
        </div>
      </div>
    </div>
  </div>
-->
<div class="container-fluid mt--6">
  <!-- Form controls -->
  <div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Form Update</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <form role="form" action="<?php echo base_url('Barang/proses_databarang_masuk_update'); ?>" method="post">
        <div class="form-group">
          <?php foreach($data_barang_update as $d){ ?>
            <label for="example-text-input" class="form-control-label">ID Transaksi</label>
            <input class="form-control" type="text" id="id_transaksi" readonly="readonly" name="id_transaksi" value="<?=$d->id_transaksi ?>">
          </div>
          <div class="form-group">
            <label for="tanggal" class="form-control-label">Tanggal</label>
            <input class="form-control" type="date" id="tanggal" name="tanggal" readonly="readonly" value="<?=$d->tanggal ?>">
          </div>
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Lokasi</label>
            <select name="lokasi" id="lokasi" class="form-control">
              <option value="<?=$d->lokasi?>"><?=$d->lokasi?></option>
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
            <input class="form-control" type="text" id="kode_barang" name="kode_barang" value="<?=$d->kode_barang ?>">
          </div>
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Barang</label>
            <input class="form-control" type="text" id="nama_barang" name="nama_barang" value="<?=$d->nama_barang ?>">
          </div>
          <div class="form-group">
            <label for="satuan" class="form-control-label">Satuan</label>
            <select name="satuan" id="satuan" class="form-control">
             <?php foreach($list_satuan as $s){?>
              <?php if($d->satuan == $s->nama_satuan){?>
                <option value="<?=$d->satuan?>" selected=""><?=$d->satuan?></option>
              <?php }else{?>
                <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
              <?php } ?>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="jumlah" class="form-control-label">Jumlah</label>
          <input class="form-control" type="number" id="jumlah" name="jumlah" value="<?=$d->jumlah ?>">
        </div>
      <?php } ?>
    </div>
    <div class="form-group row justify-content-end">
      <div class="col-sm-8">
        <button type="submit" id="submit" name="submit" value="submit-isi-apa-aja-boleh" class="btn btn-primary">EDIT</button>
        <button type="button" class="btn btn-primary" onClick="javascript:history.back()">Back</button>
      </div>
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