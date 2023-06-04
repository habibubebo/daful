"use strict";
$(function() {
    var e = $(".verifikasi");
    e.length && (e.DataTable({
        ajax: {
            url: '/daful/aksi/details',
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
            data: "status_verifikasi"
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
            className: "noExport",
            targets: 1,
            orderable: !1,
            searchable: !1,
            render: function(data, type, row, meta) {
                return meta.row+1;
            }
        }, {
            targets: 2,
            responsivePriority: 3,
            render: function(e, a, t, r) {
                t = t.nama_lengkap;
                return t
            }
        }, {
            targets: -2,
            render: function(e, a, t, r) {
                if (t.status_verifikasi == '0') { t = '<span class="badge rounded-pill  bg-label-info">belum</span>'} else if (t.status_verifikasi == '1') { t = '<span class="badge rounded-pill  bg-label-warning">proses</span>' } else { t = '<span class="badge rounded-pill  bg-label-success">sudah</span>' };
                return t
            }
        }, {
            className: "noExport",
            targets: -1,
            searchable: !1,
            title: "Aksi",
            orderable: !1,
            render: function(e, a, t, r) {
                return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a class="dropdown-item"  href="././verifikasi/verif/'+t.id_siswa+'">Verifikasi</a><div class="dropdown-divider"></div><a href="././verifikasi/undo/'+t.id_siswa+'" class="dropdown-item text-danger delete-record">Batalkan</a><a href="././verifikasi/reset/'+t.id_siswa+'" class="dropdown-item text-danger">Reset</a></div></div>'
            }
        }],
        order: [
            [5, "desc"]
        ],
        dom: '<"card-header p-1 m-0 d-flex justify-content-between"<"p-2"B><"head-label text-center"><"d-flex justify-content-md-end p-1"lf>>t<"d-flex justify-content-between"<"col-sm-4 col-md-4"i><"col-sm-5 col-md-5"p>>',
        language: {
            searchPlaceholder: "Pencarian",
            search: "",
            "lengthMenu": '<span class="d-sm-inline-block d-none">Tampilkan</span> <select class="form-select form-select-sm">'+
                            '<option value="10">10</option>'+
                            '<option value="25">25</option>'+
                            '<option value="30">30</option>'+
                            '<option value="40">40</option>'+
                            '<option value="50">50</option>'+
                            '<option value="-1">All</option>'+
                            '</select>'
          },
        displayLength: 25,
        lengthMenu: [10, 25, 30, 45, 50, -1],
        buttons: [{
            extend: "collection",
            className: "btn btn-label-primary dropdown-toggle me-2",
            text: '<i class="bx bx-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
            buttons: [{
                extend: "print",
                text: '<i class="bx bx-printer me-1" ></i>Print',
                className: "dropdown-item",
                exportOptions: {
                    columns: ':visible:not(.noExport)',
                    format: {
                        body: function(e, t, a) {
                            var s;
                            return e.length <= 0 ? e : (e = $.parseHTML(e), s = "", $.each(e, function(e, t) {
                                void 0 !== t.classList && t.classList.contains("user-name") ? s += t.lastChild.firstChild.textContent : void 0 === t.innerText ? s += t.textContent : s += t.innerText
                            }), s)
                        }
                    }
                },
                customize: function(e) {
                    $(e.document.body).css("color", config.colors.headingColor).css("border-color", config.colors.borderColor).css("background-color", config.colors.bodyBg), $(e.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit")
                }
            }, {
                extend: "csv",
                text: '<i class="bx bx-file me-1" ></i>Csv',
                className: "dropdown-item",
                exportOptions: {
                    columns: ':visible:not(.noExport)',
                    format: {
                        body: function(e, t, a) {
                            var s;
                            return e.length <= 0 ? e : (e = $.parseHTML(e), s = "", $.each(e, function(e, t) {
                                void 0 !== t.classList && t.classList.contains("user-name") ? s += t.lastChild.firstChild.textContent : void 0 === t.innerText ? s += t.textContent : s += t.innerText
                            }), s)
                        }
                    }
                }
            }, {
                extend: "excel",
                text: '<i class="bx bxs-file-export me-1"></i>Excel',
                className: "dropdown-item",
                exportOptions: {
                    columns: ':visible:not(.noExport)',
                    format: {
                        body: function(e, t, a) {
                            var s;
                            return e.length <= 0 ? e : (e = $.parseHTML(e), s = "", $.each(e, function(e, t) {
                                void 0 !== t.classList && t.classList.contains("user-name") ? s += t.lastChild.firstChild.textContent : void 0 === t.innerText ? s += t.textContent : s += t.innerText
                            }), s)
                        }
                    }
                }
            }, {
                extend: "pdf",
                text: '<i class="bx bxs-file-pdf me-1"></i>Pdf',
                className: "dropdown-item",
                exportOptions: {
                    columns: ':visible:not(.noExport)',
                    format: {
                        body: function(e, t, a) {
                            var s;
                            return e.length <= 0 ? e : (e = $.parseHTML(e), s = "", $.each(e, function(e, t) {
                                void 0 !== t.classList && t.classList.contains("user-name") ? s += t.lastChild.firstChild.textContent : void 0 === t.innerText ? s += t.textContent : s += t.innerText
                            }), s)
                        }
                    }
                }
            }, {
                extend: "copy",
                text: '<i class="bx bx-copy me-1" ></i>Copy',
                className: "dropdown-item",
                exportOptions: {
                    columns: ':visible:not(.noExport)',
                    format: {
                        body: function(e, t, a) {
                            var s;
                            return e.length <= 0 ? e : (e = $.parseHTML(e), s = "", $.each(e, function(e, t) {
                                void 0 !== t.classList && t.classList.contains("user-name") ? s += t.lastChild.firstChild.textContent : void 0 === t.innerText ? s += t.textContent : s += t.innerText
                            }), s)
                        }
                    }
                }
            }, {
                extend: "colvis",
                text: '<i class="bx bx-columns me-1" ></i>Kolom',
                className: "dropdown-item"
            }]
        }],
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
    }), 
    $("div.head-label").html('')), setTimeout(() => {
    $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm")
    }, 300)
});