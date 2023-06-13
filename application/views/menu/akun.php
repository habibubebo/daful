<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengaturan /</span> Akun</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url("admin/profil")?>"><i class="bx bx-buildings me-1"></i> Profil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  active" href="#"
                        ><i class="bx bx-user me-1"></i> Akun</a
                      >
                    </li>
                  </ul>
                  <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between">
                    <h5 class="my-auto">Daftar akun admin</h5>
                    <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/ad">
                        <span class="tf-icons bx bx-plus"></span>
                    </a>
                </div>
                    <!-- Account -->
                    <div class="card-body">
                    <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th></th>
                        <th width='10%'>Urutan</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php foreach ($akuns as $tp) { ?>
                        <tr>
                        <td><a  class="text-danger" href="<?= base_url('admin/deletemaster/ad/'.$tp->Id) ?>"><i class='bx bx-trash'></i></a></td>
                        <td><strong>
                            <span class='edit' ><?= $tp->Id ?></span>
                            <input type='text' class='txtedit ad' data-id='<?= $tp->Id ?>' data-field='Id' id='idtxt_<?= $tp->Id ?>' value='<?= $tp->Id ?>'></strong>
                        </td>
                        <td>
                            <span class='edit' ><?= $tp->username ?></span>
                            <input type='text' class='txtedit ad' data-id='<?= $tp->Id ?>' data-field='username' id='usernametxt_<?= $tp->Id ?>' value='<?= $tp->username ?>'>
                        </td>
                        <td>
                            <span class='edit' ><?= $tp->password ?></span>
                            <input type='text' class='txtedit ad' data-id='<?= $tp->Id ?>' data-field='password' id='passwordtxt_<?= $tp->Id ?>' value='<?= $tp->password ?>'>
                        </td>
                        <td>
                            <span class='edit' ><?= $tp->nama ?></span>
                            <input type='text' class='txtedit ad' data-id='<?= $tp->Id ?>' data-field='nama' id='namatxt_<?= $tp->Id ?>' value='<?= $tp->nama ?>'>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
                    
                    </div>
                    <hr class="my-0" />
                   
                  </div>
                  <div class="card" hidden>
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            <script type="text/javascript"> document.title = "Pengaturan Akun";
            document.getElementById("pengaturan").classList.add("active","open");
            document.getElementById("p-akun").classList.add("active");</script>
            <script type="text/javascript">
            $(document).ready(function(){

                // On text click
                $('.edit').click(function(){

                // Hide input element
                $('.txtedit').hide();

                // Show next input element
                $(this).next('.txtedit').show().focus();

                // Hide clicked element
                $(this).hide();
                });

                // Focus out from a textbox
                $('.txtedit.ad').focusout(function(){
                    // Get edit id, field name and value
                    var edit_id = $(this).data('id');
                    var fieldname = $(this).data('field');
                    var value = $(this).val();

                    // Hide Input element
                    $(this).hide();

                    // Update viewing value and display it
                    $(this).prev('.edit').show();
                    $(this).prev('.edit').text(value);

                    // Send AJAX request
                    $.ajax({
                    url: '<?= base_url() ?>admin/updatemaster/ad',
                    type: 'post',
                    data: { field:fieldname, value:value, id:edit_id },
                    success:function(response){
                        console.log(response);
                        
                    }
                    });
                });
              });
                </script>