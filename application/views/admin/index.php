<?php $this->load->view('template/header');?>
<body class="bg-default">
  <?php $this->load->view('template/sidebar_menu'); ?>
  <?php $this->load->view('template/navbar_header'); ?>
  <!-- Topnav -->

  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Stock Barang</h5>
                      <?php if(!empty($stokbarangmasuk)){ ?>
                        <?php foreach($stokbarangmasuk as $d){ ?>
                          <h3><?=$d->jumlah?></h3>
                        <?php } ?>
                      <?php }else{ ?>
                        <h3>0</h3>
                      <?php } ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-box-2"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <!-- <a href="#!" class="text-nowrap text-orange font-weight-600">See details</a> -->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Barang Keluar</h5>
                      <?php if(!empty($stokbarangkeluar)){ ?>
                        <?php foreach($stokbarangkeluar as $d){ ?>
                          <h3><?=$d->jumlah?></h3>
                        <?php } ?>
                      <?php }else{ ?>
                        <h3>0</h3>
                      <?php } ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-box-2"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   <!-- <a href="#!" class="text-nowrap text-orange font-weight-600">See details</a> -->
                 </p>
               </div>
             </div>
           </div>
           <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pengguna</h5>
                    <?php if(!empty($datauser)){ ?>
                      <?php foreach($datauser as $d){ ?>
                        <h3><?=$d->jumlah?></h3>
                      <?php } ?>
                    <?php }else{ ?>
                      <h3>0</h3>
                    <?php } ?>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-badge"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                 <a href="<?= base_url('admin/user'); ?>" class="text-nowrap text-orange font-weight-600">See details</a>
               </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-6">
      <!--* Card header *-->
      <!--* Card body *-->
      <!--* Card init *-->
      <div class="card">
        <!-- Card body -->

        <div class="card-body">
          <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="myChart" class="chart-canvas"></canvas>
            <!-- add by maulana 16-4-22 -->
            <?php
    //Inisialisasi nilai variabel awal
            $tanggal= "";
            $jumlah=null;
            foreach ($jumlahmasuk as $item)
            {
              $tgl=$item->tanggal;
              $tanggal .= "'$tgl'". ", ";
              $jum=$item->jumlah;
              $jumlah .= "$jum". ", ";
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6">
      <!--* Card header *-->
      <!--* Card body *-->
      <!--* Card init *-->
      <div class="card">
        <!-- Card body -->
        <div class="card-body">
          <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="myChart2" class="chart-canvas"></canvas>
            <!-- add by maulana 16-4-22 -->
            <?php
    //Inisialisasi nilai variabel awal
            $tanggal_keluar= "";
            $jumlah_keluar=null;
            foreach ($jumlahkeluar as $item)
            {
              $tgl=$item->tanggal_keluar;
              $tanggal_keluar .= "'$tgl'". ", ";
              $jum=$item->jumlah_keluar;
              $jumlah_keluar .= "$jum". ", ";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
          labels: [<?php echo $tanggal; ?>],
          datasets: [{
            label:'Data Barang masuk',
            backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
            borderColor: ['rgb(255, 99, 132)'],
            data: [<?php echo $jumlah; ?>]
          }]
        },
        // Configuration options go here
        // options: {
        //   scales: {
        //     yAxes: [{
        //       ticks: {
        //         beginAtZero:true
        //       }
        //     }]
        //   }
        // }
      });
    </script>

    <script>
      var ctx = document.getElementById('myChart2').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
          labels: [<?php echo $tanggal_keluar; ?>],
          datasets: [{
            label:'Data Barang keluar',
            backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
            borderColor: ['rgb(255, 99, 132)'],
            data: [<?php echo $jumlah_keluar; ?>]
          }]
        },
        // Configuration options go here
        // options: {
        //   scales: {
        //     yAxes: [{
        //       ticks: {
        //         beginAtZero:true
        //       }
        //     }]
        //   }
        // }
      });
    </script>

    <?php if ($this->session->flashdata('sukses')) { ?>        
      <script type="text/javascript">
        alert("<?php echo $this->session->flashdata('sukses'); ?>");
      </script>
    <?php }
    //$this->load->view('template/footer');
    $this->load->view('template/js');?>
  </body>

  </html>