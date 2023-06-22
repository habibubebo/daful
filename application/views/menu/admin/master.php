<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Daftar Ulang /</span> Data Master</h4>
        <div class="row">
            <small class="mb-2">Klik di teks untuk edit, dan klik ditempat lain untuk menyimpan</small>
            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Agama</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/ag">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th width='90%'>Data</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($agamas as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/ag/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit ag' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit ag' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Penghasilan</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/ph">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th width='90%'>Data</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($phs as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/ph/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit ph' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit ph' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Pendidikan</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/pd">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th width='90%'>Data</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($pdds as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/pd/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit pd' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit pd' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Pekerjaan</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/pk">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th width='90%'>Data</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($pks as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/pk/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit pk' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit pk' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Pengumuman</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/pn">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th width='90%'>Data</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($pengumumans as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/pn/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit pn' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->ket ?></span>
                                            <input type='text' class='txtedit pn' data-id='<?= $tp->id ?>' data-field='ket' id='kettxt_<?= $tp->id ?>' value='<?= $tp->ket ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Jalur Masuk</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/jm">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th width='90%'>Data</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($jms as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/jm/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit jm' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit jm' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Halaman Utama</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-secondary" href="<?= base_url() ?>admin/tambahmaster/info">
                            <span class="tf-icons bx bx-plus"></span>
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width='10%'>Urutan</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($infos as $tp) { ?>
                                    <tr>
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/info/' . $tp->id) ?>"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit info' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit info' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->ket ?></span>
                                            <textarea type='text' class='txtedit info' data-id='<?= $tp->id ?>' data-field='ket' id='kettxt_<?= $tp->id ?>' value='<?= $tp->ket ?>'><?= $tp->ket ?></textarea>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {

                // On text click
                $('.edit').click(function() {

                    // Hide input element
                    $('.txtedit').hide();

                    // Show next input element
                    $(this).next('.txtedit').show().focus();

                    // Hide clicked element
                    $(this).hide();
                });

                // Focus out from a textbox
                $('.txtedit.ph').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/ph',
                        type: 'post',
                        data: {
                            field: fieldname,
                            value: value,
                            id: edit_id
                        },
                        success: function(response) {
                            console.log(response);

                        }
                    });
                });
                $('.txtedit.ag').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/ag',
                        type: 'post',
                        data: {
                            field: fieldname,
                            value: value,
                            id: edit_id
                        },
                        success: function(response) {
                            console.log(response);

                        }
                    });
                });
                $('.txtedit.pk').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/pk',
                        type: 'post',
                        data: {
                            field: fieldname,
                            value: value,
                            id: edit_id
                        },
                        success: function(response) {
                            console.log(response);

                        }
                    });
                });
                $('.txtedit.pn').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/pn',
                        type: 'post',
                        data: {
                            field: fieldname,
                            value: value,
                            id: edit_id
                        },
                        success: function(response) {
                            console.log(response);

                        }
                    });
                });
                $('.txtedit.pd').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/pd',
                        type: 'post',
                        data: {
                            field: fieldname,
                            value: value,
                            id: edit_id
                        },
                        success: function(response) {
                            console.log(response);

                        }
                    });
                });
                $('.txtedit.info').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/info',
                        type: 'post',
                        data: {
                            field: fieldname,
                            value: value,
                            id: edit_id
                        },
                        success: function(response) {
                            console.log(response);

                        }
                    });
                });
            });
            document.title = "Data Master <?= $this->session->userdata('nama') ?>";
            document.getElementById("menu1").classList.add("active", "open");
            document.getElementById("m1-2").classList.add("active");
        </script>