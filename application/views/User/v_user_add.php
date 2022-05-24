 
<!-- <?php $this->load->view('template/header');?> -->
<!-- <body background="assets/img/bg.jpg " style="background-size: cover;"> -->
  <body id="vanta-container">
    <!-- <?php $this->load->view('template/page_header'); ?> -->


    <!-- Main content -->
    <div class="main-content">
      <!-- Header -->
      <div class="header  py-7 py-lg-8 pt-lg-9">


      </div>
      <!-- Page content -->
      <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0 bg-transparent">

              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <h1 style="color: white">REGISTER</h1>
                </div>
                <form action="<?php echo base_url().'user' ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control" placeholder="Username" id="username" name="username" type="text" value="<?= set_value('username'); ?>">
                    </div>
                    <small class="text-danger"><?=form_error('username'); ?></small>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input class="form-control" placeholder="Nama" id="nama" name="nama" type="text" value="<?= set_value('nama'); ?>">
                    </div>
                    <small class="text-danger"><?=form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" id="email" name="email" type="email" value="<?= set_value('email'); ?>">
                    </div>
                    <small class="text-danger"><?=form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" id="password1" name="password1" type="password">
                    </div>
                    <small class="text-danger"><?=form_error('password1'); ?></small>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Repeat Password" id="password2" name="password2" type="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                      </div>
                      <input class="form-control" placeholder="Alamat" id="alamat" name="alamat" type="text" value="<?= set_value('alamat'); ?>">
                    </div>
                    <small class="text-danger"><?=form_error('alamat'); ?></small>
                  </div>

                  <div class="row my-4">
                    <div class="col-12">

                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                    <button type="button" class="btn btn-primary mt-4" onClick="javascript:history.back()">Back</button>
                  </div>
                </form>
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