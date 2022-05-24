<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
          <img src="<?= base_url('assets'); ?>/img/logo.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <hr class="my-0 pb-1">
          <ul class="navbar-nav mb-md-0">
          
          <!-- Query menu --> 
          <?php
          $role_id = $this->session->userdata('role'); 
          $queryMenu ="SELECT `user_menu`.`id`, `menu` 
                          FROM `user_menu` JOIN `user_access_menu`
                          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                          WHERE `user_access_menu`.`role_id` = $role_id
                          ORDER BY `user_access_menu`.`menu_id` ASC";
          $menu = $this->db->query($queryMenu)->result_array();


          ?>

          <!-- looping menu -->
          <?php foreach ($menu as $m) : ?>

             <h6 class="navbar-heading pt-0 pb-0 text-muted"><?= $m['menu']; ?></h6>

             <!-- siapkan sub menu sesuai menu -->
             <?php
             $menuId = $m['id'];
              $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu`
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1";
              $subMenu = $this->db->query($querySubMenu)->result_array();
             ?>
                <?php foreach ($subMenu as $sm): ?>
                <?php if ($title == $sm['title']): ?>
                  <li class="nav-item">
                        <a class="nav-link pb-0 active" href="<?= base_url($sm['url']); ?>" role="button">
                      <i class="<?= $sm['icon']; ?>"></i>
                      <span class="nav-link-text"><?= $sm['title']; ?></span>
                      </a>
                  </li>
                    <?php else : ?>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($sm['url']); ?>" role="button">
                      <i class="<?= $sm['icon']; ?>"></i>
                      <span class="nav-link-text"><?= $sm['title']; ?></span>
                      </a>
                  </li>
                  <?php endif; ?>
                   

                <?php endforeach; ?>


          <?php endforeach; ?>
           </ul>
          <hr class="my-3 pt-0">

        
        </div>
      </div>
    </div>
  </nav>