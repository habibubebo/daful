"use strict";
$(function() {
    var e = $(".data");
    e.length && (e.DataTable({
        ajax: {
            url: '/daful/aksi/details',
        },
        columns: [{
            data: ""
        }, {
            data: "id_siswa"
        }, {
            data: "no_pendaftaran"
        }, {
            data: "nisn"
        }, {
            data: "nik"
        }, {
            data: "nama_lengkap"
        }, {
            data: "nama_panggilan"
        }, {
            data: "jk"
        }, {
            data: "tempat_lahir"
        }, {
            data: "prov_lahir"
        }, {
            data: "tgl_lahir"
        }, {
            data: "agama"
        }, {
            data: "kw"
        }, {
            data: "anak_ke"
        }, {
            data: "jml_saudara_kd"
        }, {
            data: "jml_saudara_tr"
        }, {
            data: "jml_saudara_ak"
        }, {
            data: "status_anak"
        }, {
            data: "bahasa"
        }, {
            data: "" //hobi 19
        }, {
            data: "tinggal"
        }, {
            data: "" //alamat 21
        }, {
            data: "jarak"
        }, {
            data: "notelp"
        }, {
            data: "goldar"
        }, {
            data: "penyakit"
        }, {
            data: "kelainan"
        }, {
            data: "tinggi_badan"
        }, {
            data: "berat_badan"
        }, {
            data: "alamat_ortu"
        }, {
            data: "nama_ayah"
        }, {
            data: "nik_ayah"
        }, {
            data: "ttl_ayah"
        }, {
            data: "agama_ayah"
        }, {
            data: "kw_ayah"
        }, {
            data: "pdd_ayah"
        }, {
            data: "pk_ayah"
        }, {
            data: "ph_ayah"
        }, {
            data: "notelp_ayah"
        }, {
            data: "status_ayah"
        }, {
            data: "nama_ibu"
        }, {
            data: "nik_ibu"
        }, {
            data: "ttl_ibu"
        }, {
            data: "agama_ibu"
        }, {
            data: "kw_ibu"
        }, {
            data: "pdd_ibu"
        }, {
            data: "pk_ibu"
        }, {
            data: "ph_ibu"
        }, {
            data: "notelp_ibu"
        }, {
            data: "status_ibu"
        }, {
            data: "nama_wali"
        }, {
            data: "nik_wali"
        }, {
            data: "ttl_wali"
        }, {
            data: "agama_wali"
        }, {
            data: "kw_wali"
        }, {
            data: "pdd_wali"
        }, {
            data: "pk_wali"
        }, {
            data: "ph_wali"
        }, {
            data: "notelp_wali"
        }, {
            data: "hub_wali"
        },{
            data: "" //alamat wali
        }, {
            data: "asal"
        }, {
            data: "no_urut"
        }, {
            data: "tgl_no_ijazah"
        }, {
            data: "tgl_no_skl"
        }, {
            data: "lama_belajar"
        }, {
            data: "nopeserta_un"
        }, {
            data: "no_skhu"
        }, {
            data: "pindahan_asal"
        }, {
            data: "pindahan_alasan"
        }, {
            data: "masuk_kelas"
        }, {
            data: "masuk_jalur"
        }, {
            data: "masuk_tgl"
        }, {
            data: "no_kks"
        }, {
            data: "no_pkh"
        }, {
            data: "no_kip"
        }, {
            data: "" //kk
        }, {
            data: "" //akta
        }, {
            data: "" //ijazah
        }, {
            data: "" //bukti
        }, {
            data: "" //status
        }, {
            data: "" //aksi
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
                t = t.no_pendaftaran;
                return t
            }
        }, {
            targets: 19,
            searchable: !1,
            render: function(e, a, t, r) {
                t = 'Kesenian: '+t.hobi_kes+', Olahraga: '+t.hobi_or+', Kemasyarakatan: '+t.hobi_masy+', Lain: '+t.hobi_lain;
                return t
            }
        }, {
            targets: 21,
            searchable: !1,
            render: function(e, a, t, r) {
                t = 'Jalan '+t.jalan+' RT '+t.rt+' RW '+t.rw+' Desa '+t.desa+' Kec. '+t.kec+' Kab./Kota '+t.kab+' Provinsi '+t.provinsi;
                return t
            }
        }, {
            targets: -22,
            searchable: !1,
            render: function(e, a, t, r) {
                t = 'Jalan '+t.jalan_wali+' RT '+t.rt_wali+' RW '+t.rw_wali+' Desa '+t.desa_wali+' Kec. '+t.kec_wali+' Kab./Kota '+t.kab_wali+' Provinsi '+t.provinsi_wali;
                return t
            }
        }, {
            targets: -6,
            searchable: !1,
            render: function(e, a, t, r) {
                let base64String = "";
                let reader = new FileReader();
                var y = t.no_urut+t.kk;
                var str = t.masuk_jalur;
                var m = str.split(' ').join('-');   
                var request = new XMLHttpRequest();
                request.open('GET', appPath+'file/uploads/'+m+t.no_urut+'/'+t.kk, true);
                request.responseType = 'blob';
                request.send();
                request.onload = function() {
                    reader.readAsDataURL(request.response);
                    reader.onload =  function(e){
                        base64String = reader.result;
                            document.getElementById(y).src = base64String;
                        };
                    };
                    t = '<img id="'+y+'" src="" width="80px">';
                    return t
            }
        }, {
            targets: -5,
            searchable: !1,
            render: function(e, a, t, r) {
                let base64String = "";
                let reader = new FileReader();
                var y= t.no_urut+t.akta;
                var str = t.masuk_jalur;
                var m = str.split(' ').join('-');   
                var request = new XMLHttpRequest();
                request.open('GET', appPath+'file/uploads/'+m+t.no_urut+'/'+t.akta, true);
                request.responseType = 'blob';
                request.send();
                request.onload = function() {
                    reader.readAsDataURL(request.response);
                    reader.onload =  function(e){
                        base64String = reader.result;
                            document.getElementById(y).src = base64String;
                        };
                    };
                    t = '<img id="'+y+'" src="" width="80px">';
                    return t
            }
        }, {
            targets: -4,
            searchable: !1,
            render: function(e, a, t, r) {
                let base64String = "";
                let reader = new FileReader();
                var y = t.no_urut+t.ijazah;
                var str = t.masuk_jalur;
                var m = str.split(' ').join('-');   
                var request = new XMLHttpRequest();
                request.open('GET', appPath+'file/uploads/'+m+t.no_urut+'/'+t.ijazah, true);
                request.responseType = 'blob';
                request.send();
                request.onload = function() {
                    reader.readAsDataURL(request.response);
                    reader.onload =  function(e){
                        base64String = reader.result;
                            document.getElementById(y).src = base64String;
                        };
                    };
                    t = '<img id="'+y+'" src="" width="80px">';
                    return t
            }
        }, {
            targets: -3,
            searchable: !1,
            render: function(e, a, t, r) {
                let base64String = "";
                let reader = new FileReader();
                var y = t.no_urut+t.bukti;
                var str = t.masuk_jalur;
                var m = str.split(' ').join('-');        
                var request = new XMLHttpRequest();
                request.open('GET', appPath+'file/uploads/'+m+t.no_urut+'/'+t.bukti, true);
                request.responseType = 'blob';
                request.send();
                request.onload = function() {
                    reader.readAsDataURL(request.response);
                    reader.onload =  function(e){
                        base64String = reader.result;
                            document.getElementById(y).src = base64String;
                        };
                    };
                    t = '<img id="'+y+'" src="" width="80px">';
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
                return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a class="dropdown-item"  href="../aksi/unduh/'+t.id_siswa+'">Unduh Bukti</a><div class="dropdown-divider"></div><a href="././verifikasi/undo/'+t.id_siswa+'" class="dropdown-item text-danger delete-record">Batalkan</a></div></div>'
            }
        }],
        order: [
            [0, "asc"]
        ],
        dom: '<"card-header p-1 m-0 d-flex justify-content-between"<"p-2"B><"head-label text-center"><"d-flex justify-content-md-end p-1"lf>>t<"d-flex justify-content-between"<"col-sm-4 col-md-4"i><"col-sm-5 col-md-5"p>>',
        language: {
            searchPlaceholder: "Pencarian",
            search: "",
            "lengthMenu": '<span class="d-sm-inline-block d-none">Tampilkan</span> <select class="form-select form-select-sm">'+
                            '<option value="10">10</option>'+
                            '<option value="25">25</option>'+
                            '<option value="30">30</option>'+
                            '<option value="45">45</option>'+
                            '<option value="50">50</option>'+
                            '<option value="-1">All</option>'+
                            '</select>'
          },
        displayLength: 45,
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
            }]
        }, {
            extend: "colvis",
            text: '<i class="bx bx-columns m-1" ></i>Tampilan Kolom',
            className: "dropdown-item"
        }]
    }), 
    $("div.head-label").html('')), setTimeout(() => {
    $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm")
    }, 300)
});