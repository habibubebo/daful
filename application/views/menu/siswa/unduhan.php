<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang/</span> Unduhan</h4>
              <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
              
                <div class="row">
                  <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                    <div class="card overflow-hidden mb-4" style="height: 1080px;">
                      <div class="card-body" id="both-scrollbars">
                        <?php 
                        // var_dump($siswa);
                        $this->load->view('cetak/1',$siswa); 
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                    <div class="card">
                      <div class="card-body d-flex flex-column">
                        <?php if ($tombol == 0){
                          echo '<a class="btn btn-primary d-grid w-100 mb-3" href="'.base_url().'aksi/unduh/'.$this->session->userdata('no_pendaftaran').'/ayah">Unduh</a>';
                        } else if ($tombol == 1){
                          echo '<a class="btn btn-primary d-grid w-100 mb-3" href="'.base_url().'aksi/unduh/'.$this->session->userdata('no_pendaftaran').'/ibu">Unduh</a>';
                        } else echo '<a class="btn btn-primary d-grid w-100 mb-3" href="'.base_url().'aksi/unduh/'.$this->session->userdata('no_pendaftaran').'/wali">Unduh</a>'; ?>
                      <div class="p-1">
                        <h6 class="text-center">Siapa yang akan tanda tangan?</h6>
                        <a href="../unduhan/ayah" class="btn btn-label-secondary d-grid w-100 mb-3">Ayah</a>
                        <a href="../unduhan/ibu" class="btn btn-label-secondary d-grid w-100 mb-3">Ibu</a>
                        <a href="../unduhan/wali" class="btn btn-label-secondary d-grid w-100 mb-3">Wali</a>
                      </div>
                      </div>
                    </div>
                  </div>
            <script type="text/javascript"> document.title = "Unduhan data <?= $this->session->userdata('nama')?>";
            document.getElementById("menu1").classList.add("active","open");
            document.getElementById("m1-2").classList.add("active");
            document.addEventListener("DOMContentLoaded", function() {
              var l;
                  l = document.getElementById("both-scrollbars"), l && new PerfectScrollbar(l, {
                wheelPropagation: !1
              })
            });
            </script>