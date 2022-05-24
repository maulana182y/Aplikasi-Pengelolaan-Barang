<?php $this->load->view('template/header');?>
<body class="bg-default">
  <?php $this->load->view('template/sidebar_menu'); ?>
  <?php $this->load->view('template/navbar_header'); ?>
  <?php $this->load->view('template/page_header'); ?>
  <!-- Topnav -->

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

  <div class="container-fluid mt--6">
    <!-- Form controls -->
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Form controls</h3>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <form role="form" action="<?php echo base_url('Menu/edit_Submenu/'. $s_menu[0]->id); ?>" method="post">
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $s_menu[0]->id; ?>">
            <label class="form-control-label" for="title">Submenu Name</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="" value="<?php echo $s_menu[0]->title; ?>">
          </div>
          <div class="form-group">
            <label>Menu</label>
            <select type="menu" class="form-control" name="menu_id" id="menu_id">
              <!-- menggunakan if ternary  -->
              <option value="1" <?=($s_menu[0]->menu == "admin")?"selected":""?>>admin</option>
              <option value="2" <?=($s_menu[0]->menu == "profile")?"selected":""?>>profile</option>
              <option value="3" <?=($s_menu[0]->menu == "Menu")?"selected":""?>>Menu</option>
              <option value="4" <?=($s_menu[0]->menu == "Barang")?"selected":""?>>Barang</option>
              <option value="5" <?=($s_menu[0]->menu == "test")?"selected":""?>>test</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="url">Submenu Url</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="" value="<?php echo $s_menu[0]->url; ?>">
          </div>
          <div class="form-group">
            <label class="form-control-label" for="icon">Submenu Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="" value="<?php echo $s_menu[0]->icon; ?>">
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