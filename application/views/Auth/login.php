 
<!-- <?php $this->load->view('template/header');?> -->
<!-- <body background="assets/img/bg.jpg " style="background-size: cover;"> -->
  <body id="vanta-container">
    <!-- <?php $this->load->view('template/page_header'); ?> -->


    <div class="main-content">
      <!-- Header -->
      <div class="header">
        <div class="container">
          <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 px-5 mb-7">
                <h1 class="text-white">APLIKASI PENGELOLAAN BARANG</h1>
                <p class="text-lead text-white"></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="container mt--8 pb-5" >
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <!-- menghilangkan bg -->
          <div class="card bg-secondary border-0 mb-0 bg-transparent">
            <!-- <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>LOGIN</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="<?php echo base_url(); ?>assets/temp2/assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="<?php echo base_url(); ?>assets/temp2/assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div> -->
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h1 style="color: white">LOGIN</h1>
              </div>
              <?= $this->session->flashdata('message');?>
              <form action="<?= base_url('auth'); ?>" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" id="username" name="username" type="text">
                  </div>
                  <small class="text-danger"><?=form_error('username'); ?></small>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                  </div>
                  <small class="text-danger"><?=form_error('password'); ?></small>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <!-- <a href="#" class="text-light"><small>Forgot password?</small></a> -->
            </div>
            <div class="col-6 text-right">
              <a href="<?php echo base_url().'User' ?>" class="text-light"><small>Create new account</small></a>
            </div>
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
    // $this->load->view('template/footer');
  $this->load->view('template/js');?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
  <script>VANTA.BIRDS({
    el: "#vanta-container",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00
  })
  _strk.push(function() {
    setVanta()
    window.edit_page.Event.subscribe( "Page.beforeNewOneFadeIn", setVanta )
  })
</script>

</body>

</html>