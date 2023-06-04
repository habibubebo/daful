<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang/</span> Unduhan</h4>
              <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
              
                <div class="row invoice-preview">
  <!-- Invoice -->
  <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
    <div class="card invoice-preview-card">
      <div class="card-body">
        <?php $data['siswa'] = $this->Model_APS->edit_data('siswa',array('id_siswa' => $this->session->userdata('id')))->result();
        $this->load->view('cetak/hal1',$data); ?>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <?php $this->load->view('cetak/hal2',$data); ?>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <?php $this->load->view('cetak/hal3',$data); ?>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <?php $this->load->view('cetak/hal4',$data); ?>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <?php $this->load->view('cetak/hal5',$data); ?>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <?php $this->load->view('cetak/hal6',$data); ?>
      </div>
      
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <!-- /Invoice -->

  <!-- Invoice Actions -->
  <div class="col-xl-3 col-md-4 col-12 invoice-actions">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <a class="btn btn-primary d-grid w-100 mb-3" href="<?= base_url("aksi/unduh")?>">
        
          Unduh
        </a>
        <a class="btn btn-label-secondary d-grid w-100 mb-3" href="<?= base_url("aksi/unduha")?>">
          Unduh A
        </a>
        <a class="btn btn-label-secondary d-grid w-100 mb-3" href="<?= base_url("aksi/unduhb")?>">
          Unduh B
        </a>
        <a href="#" class="btn btn-label-secondary d-grid w-100 mb-3">
          Edit
        </a>
      </div>
    </div>
  </div>
  <!-- /Invoice Actions -->
            <script type="text/javascript"> document.title = "Unduhan data <?= $this->session->userdata('nama')?>";
            document.getElementById("menu1").classList.add("active","open");
            document.getElementById("m1-2").classList.add("active");</script>