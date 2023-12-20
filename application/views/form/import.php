        <div class="modal modal-lg modal-top fade" id="modalI" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalTopTitle">Contoh tabel import</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="import">
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Jalur Masuk</th>
                        <th>Nomor Urut</th>
                        <th>Nama Siswa</th>
                        <th>NISN</th>
                        <th>Password</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $data['jms'] = $this->Model_APS->tampil_data('tbl_jalur', 'nama', 'ASC')->result();
                      $no = 1;
                      foreach ($jms as $tp) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $tp->nama ?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <small>*.csv ; delimiter => Nomor ; Jalur Masuk ; Nomor urut ; Nama Siswa ; NISN ; password</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
        <script>
          $(document).ready(function() {
            $('#import').DataTable({
              dom: 'Brt',
              ordering: false,
              "pagingType": "simple",
              buttons: [{
                extend: "csv",
                text: '<i class="bx bx-file me-1" ></i> Export csv',
                className: "btn btn-label-primary mb-2",
                exportOptions: {
                  columns: ':visible:not(.noExport)'
                },
                fieldBoundary: '',
                fieldSeparator: ';'
              }]
            });
          });
        </script>