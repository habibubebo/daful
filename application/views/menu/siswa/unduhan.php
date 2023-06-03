<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang/</span> Unduhan</h4>
              <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
              <!-- Basic Layout & Basic with Icons -->
                <div class="row">
                    <!-- Basic  -->
                    <a href="<?= base_url("aksi/unduh")?>" class="btn btn-sm btn-outline-primary">Unduh</a>
                    
            <script type="text/javascript"> document.title = "Unduhan data <?= $this->session->userdata('nama')?>";
            document.getElementById("menu1").classList.add("active","open");
            document.getElementById("m1-2").classList.add("active");</script>