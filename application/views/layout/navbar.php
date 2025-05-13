 <!-- Layout container -->
 <div class="layout-page">
   <!-- Navbar -->

   <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
     <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
       <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
         <i class="bx bx-menu bx-sm"></i>
       </a>
     </div>

     <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
       <ul class="navbar-nav flex-row align-items-center ms-auto">
         
         <!-- Place this tag where you want the button to render. -->
         <li class="nav-item lh-1 me-3">
           <a><?php echo $this->session->userdata('nama') ?></a>
         </li>

         <!-- User -->
         <li class="nav-item navbar-dropdown dropdown-user dropdown">
           <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
             <div class="avatar avatar-online">
               <script>
                 var n = "<?php echo base_url("assets/img/avatars/1.png") ?>",
                   l = "<?php echo $this->session->userdata('nama') ?>";
                 document.write('<span class="avatar-initial rounded-circle bg-label-' + ["success", "danger", "warning", "info", "dark", "primary", "secondary"][Math.floor(6 * Math.random())] + '">' + (n = (((n = (l).match(/\b\w/g) || []).shift() || "") + (n.pop() || "")).toUpperCase())) + '</span>';
               </script>
             </div>
           </a>
           <ul class="dropdown-menu dropdown-menu-end">
             <li>
               <a class="dropdown-item" href="#">
                 <div class="d-flex">
                   <div class="flex-shrink-0 me-3">
                     <div class="avatar avatar-online">
                       <script>
                         var n = "<?php echo base_url("assets/img/avatars/1.png") ?>",
                           l = "<?php echo $this->session->userdata('nama') ?>";
                         document.write('<span class="avatar-initial rounded-circle bg-label-' + ["success", "danger", "warning", "info", "dark", "primary", "secondary"][Math.floor(6 * Math.random())] + '">' + (n = (((n = (l).match(/\b\w/g) || []).shift() || "") + (n.pop() || "")).toUpperCase())) + '</span>';
                       </script>
                     </div>
                   </div>
                   <div class="flex-grow-1">
                     <span class="fw-semibold d-block"><?php echo $this->session->userdata('nama') ?></span>
                     <small class="text-muted">
                       <?php if ($this->session->userdata('role') > 0) {
                          echo 'Admin';
                        } else echo 'Siswa' ?>
                     </small>
                   </div>
                 </div>
               </a>
             </li>
             <li>
               <div class="dropdown-divider"></div>
             </li>
             <li>
               <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                 <i class="bx bx-power-off me-2"></i>
                 <span class="align-middle">Log Out</span>
               </a>
             </li>
           </ul>
         </li>
         <!--/ User -->
       </ul>
     </div>
   </nav>

   <!-- / Navbar -->