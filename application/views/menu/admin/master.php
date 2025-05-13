<style>
    /* Modal styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 4000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 700px;
        border-radius: 5px;
    }

    #editor-container {
        height: 300px;
        margin-bottom: 15px;
    }

    /* Styling tambahan untuk notifikasi */
    .notification {
        position: fixed;
        text-align: center;
        bottom: 20px;
        padding: 10px;
        border-radius: 4px;
        color: white;
        font-weight: bold;
        z-index: 7000;
        display: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }
</style>
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet" />
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Daftar Ulang /</span> Data Master</h4>
        <div class="row">
            <small class="mb-2">Klik di teks untuk edit, dan klik ditempat lain untuk menyimpan</small>
            <div class="col-xl-5 mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Pengumuman</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/pn" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/pn/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit pn form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->ket ?></span>
                                            <input type='text' class='txtedit pn form-control' data-id='<?= $tp->id ?>' data-field='ket' id='kettxt_<?= $tp->id ?>' value='<?= $tp->ket ?>'>
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
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/jm" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/jm/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit jm form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit jm form-control' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
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
                        <h5 class="my-auto">Agama</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/ag" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/ag/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit ag form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit ag form-control' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
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
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/ph" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/ph/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit ph form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit ph form-control' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
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
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/pd" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/pd/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit pd form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit pd form-control' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
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
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/pk" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/pk/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit pk form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit pk form-control' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="my-auto">Halaman Utama</h5>
                        <a class="btn rounded-pill btn-icon btn-outline-primary" href="<?= base_url() ?>admin/tambahmaster/info" title="tambah">
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
                                        <td><a class="text-danger" href="<?= base_url('admin/deletemaster/info/' . $tp->id) ?>" title="hapus"><i class='bx bx-trash'></i></a></td>
                                        <td><strong>
                                                <span class='edit'><?= $tp->id ?></span>
                                                <input type='text' class='txtedit info form-control' data-id='<?= $tp->id ?>' data-field='id' id='idtxt_<?= $tp->id ?>' value='<?= $tp->id ?>'></strong>
                                        </td>
                                        <td>
                                            <span class='edit'><?= $tp->nama ?></span>
                                            <input type='text' class='txtedit info form-control' data-id='<?= $tp->id ?>' data-field='nama' id='namatxt_<?= $tp->id ?>' value='<?= $tp->nama ?>'>
                                        </td>
                                        <td>
                                            <span class='edit-utama'><?= $tp->ket ?></span>
                                            <textarea type='text' class='txtedit info form-control' data-id='<?= $tp->id ?>' data-field='ket' id='kettxt_<?= $tp->id ?>' value='<?= $tp->ket ?>'><?= $tp->ket ?></textarea>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- 2. Tambahkan HTML untuk modal dan notifikasi -->
            <div id="editorModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between p-0">
                        <h2>Edit Konten</h2>
                        <span class="close">&times;</span>
                    </div>
                    <div id="editor-container"></div>
                    <input type="hidden" id="current-field">
                    <input type="hidden" id="current-id">
                    <div class="modal-footer">
                        <button class="btn btn-secondary" id="cancelEdit">Batal</button>
                        <button class="btn btn-primary" id="saveEdit">Simpan</button>
                    </div>
                </div>
            </div>

            <!-- Notifikasi -->
            <div id="successNotification" class="notification bg-success">Perubahan berhasil disimpan</div>
            <div id="errorNotification" class="notification bg-danger">Gagal menyimpan perubahan</div>

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Variable untuk menyimpan elemen span yang sedang diedit
                var currentEditSpan = null;

                // Inisialisasi Quill editor
                var quill = new Quill('#editor-container', {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{
                                'header': [1, 2, 3, 4, 5, 6, false]
                            }],
                            ['bold', 'italic', 'underline', 'strike'],
                            [{
                                'color': []
                            }, {
                                'background': []
                            }],
                            [{
                                'list': 'ordered'
                            }, {
                                'list': 'bullet'
                            }],
                            [{
                                'align': []
                            }],
                            ['link'],
                            ['clean']
                        ]
                    }
                });

                // Referensi ke elemen modal
                var modal = document.getElementById('editorModal');
                var closeBtn = modal.querySelector('.close');
                var cancelBtn = document.getElementById('cancelEdit');
                var saveBtn = document.getElementById('saveEdit');
                var currentField = document.getElementById('current-field');
                var currentId = document.getElementById('current-id');

                // Fungsi untuk menampilkan modal
                function showModal(content, fieldName, id) {
                    quill.root.innerHTML = content;
                    currentField.value = fieldName;
                    currentId.value = id;
                    modal.style.display = 'block';
                }

                // Fungsi untuk menutup modal
                function closeModal() {
                    modal.style.display = 'none';
                    currentEditSpan = null; // Reset referensi ke elemen yang sedang diedit
                }

                // Event listener untuk setiap elemen .edit
                document.querySelectorAll('.edit-utama').forEach(function(element) {
                    element.addEventListener('click', function() {
                        var content = this.innerHTML;
                        var inputElement = this.nextElementSibling;
                        var fieldName = inputElement.dataset.field;
                        var id = inputElement.dataset.id;

                        // Simpan referensi ke elemen span yang sedang diedit
                        currentEditSpan = $(this);

                        showModal(content, fieldName, id);
                    });
                });

                // Event listener untuk tombol close
                closeBtn.addEventListener('click', closeModal);
                cancelBtn.addEventListener('click', closeModal);

                // Event listener untuk tombol save
                saveBtn.addEventListener('click', function() {
                    var content = quill.root.innerHTML;
                    var field = currentField.value;
                    var id = currentId.value;

                    // Update tampilan span
                    var spanElement = document.querySelector('.edit-utama[data-field="' + field + '"][data-id="' + id + '"]');
                    if (!spanElement) {
                        // Jika span tidak memiliki atribut data, cari dengan cara lain
                        var inputElement = document.getElementById(field + 'txt_' + id);
                        if (inputElement) {
                            spanElement = inputElement.previousElementSibling;
                        }
                    }

                    if (spanElement) {
                        spanElement.innerHTML = content;
                    }

                    // Update nilai input/textarea tersembunyi
                    var inputElement = document.getElementById(field + 'txt_' + id);
                    if (inputElement) {
                        if (inputElement.tagName.toLowerCase() === 'textarea') {
                            // Untuk textarea, update dengan konten HTML
                            inputElement.value = content;
                        } else {
                            // Untuk input text, update dengan teks saja
                            inputElement.value = quill.getText().trim();
                        }
                    }

                    // AJAX update ke server
                    if (inputElement) {
                        $.ajax({
                            url: '<?= base_url() ?>admin/updatemaster/info',
                            type: 'POST',
                            data: {
                                id: id,
                                field: field,
                                value: content
                            },
                            success: function(response) {
                                console.log('Update success:', response);
                                // Tampilkan notifikasi sukses
                                $('#successNotification').fadeIn().delay(3000).fadeOut();
                            },
                            error: function(xhr, status, err) {
                                console.error('Update error:', err);
                                // Tampilkan notifikasi error
                                $('#errorNotification').fadeIn().delay(3000).fadeOut();
                            }
                        });
                    }

                    // Tutup modal
                    closeModal();
                });

                // Menutup modal jika user mengklik di luar modal
                window.addEventListener('click', function(event) {
                    if (event.target == modal) {
                        closeModal();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {



                $('.edit').click(function() {
                    $(this).next('.txtedit').show().focus();
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
                $('.txtedit.jm').focusout(function() {
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
                        url: '<?= base_url() ?>admin/updatemaster/jm',
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
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>