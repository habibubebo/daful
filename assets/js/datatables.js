"use strict";
$(function() {
    var e = $(".datatables-projects");
    e.length && (e.DataTable({
        ajax: {
            url: 'http://localhost/daful/aksi/all',
        },
        columns: [{
            data: ""
        }, {
            data: "id_siswa"
        }, {
            data: "nama_lengkap"
        }, {
            data: "no_pendaftaran"
        }, {
            data: ""
        }, {
            data: "tgl_siswa"
        }, {
            data: ""
        }],
        columnDefs: [{
            className: "control",
            searchable: !1,
            orderable: !1,
            responsivePriority: 2,
            targets: 0,
            render: function(e, a, t, r) {
                return ""
            }
        }, {
            targets: 1,
            orderable: !1,
            searchable: !1,
            render: function(data, type, row, meta) {
                return meta.row+meta.settings._iDisplayStart+1;
            }
        }, {
            targets: 2,
            responsivePriority: 3,
            render: function(e, a, t, r) {
                t = t.nama_lengkap;
                return t
            }
        }, {
            targets: 4,
            orderable: !1,
            searchable: !1,
            responsivePriority: 4,
            render: function(e, a, t, r) {
                t = t.nisn;
                return t
            }
        }, {
            targets: -2,
            render: function(e, a, t, r) {
                t = t.tgl_siswa;
                return t
            }
        }, {
            targets: -1,
            searchable: !1,
            title: "Aksi",
            orderable: !1,
            render: function(e, a, t, r) {
                return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a class="dropdown-item"  onclick="get('+t.id_siswa+')" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</a><div class="dropdown-divider"></div><a href="'+appPath+'aksi/hapusakun/'+t.id_siswa+'" class="dropdown-item text-danger delete-record">Hapus</a></div></div>'
            }
        }],
        order: [
            [5, "desc"]
        ],
        dom: '<"card-header p-1 m-0 d-flex justify-content-between"<"head-label text-center p-2"><"d-flex justify-content-md-end"f>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        language: {
            searchPlaceholder: "Pencarian",
            search: "",
          },
        displayLength: 7,
        lengthMenu: [7, 10, 25, 50, 75, 100],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(e) {
                        return 'Detail data ' + e.data().nama_lengkap 
                    }
                }),
                type: "column",
                renderer: function(e, a, t) {
                    t = $.map(t, function(e, a) {
                        return "" !== e.title ? '<tr data-dt-row="' + e.rowIndex + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : ""
                    }).join("");
                    return !!t && $('<table class="table"/><tbody />').append(t)
                }
            }
        }
    }), $("div.head-label").html('<button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah</button>')), setTimeout(() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm")
    }, 300)
});