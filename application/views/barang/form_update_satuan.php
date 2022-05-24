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
      <h3 class="mb-0">Form Update Satuan</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <form role="form" action="<?php echo base_url('Barang/proses_satuan_update'); ?>" method="post">
        <div class="form-group">
          <?php foreach($data_satuan as $d){ ?>
             <input type="hidden" name="id_satuan" value="<?=$d->id_satuan?>">
            <label for="kode_satuan" class="form-control-label">Kode Satuan</label>
            <input class="form-control" type="text" id="kode_satuan" name="kode_satuan" value="<?=$d->kode_satuan ?>">
          </div>
          <div class="form-group">
            <label for="nama_satuan" class="form-control-label">Nama Satuan</label>
            <input class="form-control" type="text" id="nama_satuan" name="nama_satuan"  value="<?=$d->nama_satuan ?>">
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