"use strict";
! function() {
    const form = document.getElementById('wizard-validation-form');
    var e = $(".select2"),
        a = $(".selectpicker"),
        i = document.querySelector("#wizard-validation");
    if (null !== i) {
        var t = i.querySelector("#wizard-validation-form");
        const s = t.querySelector("#data1");
        var o = t.querySelector("#data2"),
            n = t.querySelector("#data3"),
            p = t.querySelector("#data4"),
            r = [].slice.call(t.querySelectorAll(".btn-next")),
            t = [].slice.call(t.querySelectorAll(".btn-prev"));
        const l = new Stepper(i, {
                linear: !0
            }),
            d = FormValidation.formValidation(s, {
                fields: {
                    "nama-lengkap": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "nama-panggilan": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "nisn": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "nik": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "jk": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "tempat-lahir": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "prov-lahir": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "tanggal-lahir": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "agama": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "kw": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "anak-ke": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }, stringLength: {
                            min: 1,
                            max: 2,
                            message: "Maksimal 99"
                        }
                    }, "stat-anak": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "notelp": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "goldar": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "tinggal": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "tb": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }, stringLength: {
                            min: 1,
                            max: 3,
                            message: "Maksimal 999"
                        }
                    }, "jalan": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "rt": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "rw": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "desa": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "kec": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "kab": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "bb": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "hobi-kes": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "hobi-or": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "hobi-masy": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "hobi-lain": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "email": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6"
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus
                },
                init: e => {
                    e.on("plugins.message.placed", function(e) {
                        e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
                    })
                }
            }).on("core.form.valid", function() {
                l.next()
            }),
            m = FormValidation.formValidation(o, {
                fields: {
                    "nama-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "ttl-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "agama-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "kw-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "pdd-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "pk-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "ph-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "notelp-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "stat-ayah": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "nama-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "ttl-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "agama-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "kw-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "pdd-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "pk-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "ph-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "notelp-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "stat-ibu": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6"
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus
                }
            }).on("core.form.valid", function() {
                l.next()
            }),
            u = (a.length && a.each(function() {
                $(this).selectpicker().on("change", function() {
                    m.revalidateField("formValidationLanguage")
                })
            }), e.length && e.each(function() {
                var e = $(this);
                e.wrap('<div class="position-relative"></div>'), e.select2({
                    placeholder: "Pilih Bahasa",
                    dropdownParent: e.parent()
                }).on("change.select2", function() {
                    m.revalidateField("bahasa")
                })
            }), FormValidation.formValidation(n, {
                fields: {
                    "no-pend": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "asal": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "smp-npsn": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "smp-no": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "smp-tgl": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "sd-asal": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "sd-npsn": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "sd-no": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "sd-tgl": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "no-akta": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "no-kk": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "masuk-kelas": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "masuk-tgl": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6"
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus,
                }
            }).on("core.form.valid", function() {
                l.next()
            })),  
            q = (a.length && a.each(function() {
                $(this).selectpicker().on("change", function() {
                    m.revalidateField("formValidationLanguage")
                })
            }), FormValidation.formValidation(p, {
                fields: {
                    "jml-kd": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "jml-tr": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "jml-ak": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "jarak": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "transport": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "penyakit": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "kelainan": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    }, "bahasa": {
                        validators: {
                            notEmpty: {
                                message: "Data isian tidak boleh kosong"
                            }
                        }
                    },
                    sudah: {
                        validators: {
                            notEmpty: {
                                message: "Wajib cek kembali data isian sebelum submit"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6"
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus,
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                }
            }).on("core.form.valid", function() {
                form.submit();
            }));
        r.forEach(e => {
            e.addEventListener("click", e => {
                switch (l._currentIndex) {
                    case 0:
                        d.validate();
                        break;
                    case 1:
                        m.validate();
                        break;
                    case 2:
                        u.validate();
                        break;
                    case 3:
                        q.validate()
                }
            })
        }), t.forEach(e => {
            e.addEventListener("click", e => {
                switch (l._currentIndex) {
                    case 3:
                    case 2:
                    case 1:
                        l.previous()
                }
            })
        })
    }
}();
function alamat() {
    var checkBox = document.getElementById("alamatcheck");
    var text = document.getElementById("alamat-ortu");
    if (checkBox.checked == true){
      text.style.display = "none";
      document.getElementById("chk").classList.remove("form-check-inline");
    } else {
      text.style.display = "block";
      document.getElementById("chk").classList.add("form-check-inline");
    }
   };
function wali() {
  var checkBox = document.getElementById("walicheck");
  var text = document.getElementById("wali");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
    document.getElementById("nama-wali").value = '-';
    document.getElementById("ttl-wali").value = '-';
    $('#agama-wali').selectpicker('val', '-');
    document.getElementById("kw-wali").value = '-';
    $('#pdd-wali').selectpicker('val', '-');
    $('#pk-wali').selectpicker('val', '-');
    $('#ph-wali').selectpicker('val', '-');
    document.getElementById("notelp-wali").value = '-';
    document.getElementById("jalan-wali").value = '-';
    document.getElementById("rt-wali").value = '-';
    document.getElementById("rw-wali").value = '-';
    document.getElementById("desa-wali").value = '-';
    document.getElementById("kec-wali").value = '-';
    document.getElementById("kab-wali").value = '-';
    document.getElementById("hub-wali").value = '-';
  }
  };
!function(){var a=`<div class="dz-preview dz-file-preview m-0">
  <div class="dz-details">
    <div class="dz-thumbnail">
      <img data-dz-thumbnail>
      <span class="dz-nopreview">No preview</span>
      <div class="dz-success-mark"></div>
      <div class="dz-error-mark"></div>
      <div class="dz-error-message"><span data-dz-errormessage></span></div>
      <div class="progress">
        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
      </div>
    </div>
    <div class="dz-filename" data-dz-name></div>
    <div class="dz-size" data-dz-size></div>
  </div>
  </div>`;
  Dropzone.options.uKk = {
    url: appPath+"/aksi/unggah/kk",
    method:"post",
    paramName:"ukk",
    acceptedFiles:".jpeg,.jpg,.png",
    previewTemplate:a,
    maxFilesize:2,
    addRemoveLinks:!0,
    maxFiles:1
};Dropzone.options.uAkta = {
    url: appPath+"/aksi/unggah/akta",
    method:"post",
    paramName:"akta",
    acceptedFiles:".jpeg,.jpg,.png",
    previewTemplate:a,
    maxFilesize:2,
    addRemoveLinks:!0,
    maxFiles:1
};Dropzone.options.uIjazah = {
    url: appPath+"/aksi/unggah/ijazah",
    method:"post",
    paramName:"ijazah",
    acceptedFiles:".jpeg,.jpg,.png",
    previewTemplate:a,
    maxFilesize:2,
    addRemoveLinks:!0,
    maxFiles:1
};Dropzone.options.uBukti = {
    url: appPath+"/aksi/unggah/bukti",
    method:"post",
    paramName:"bukti",
    acceptedFiles:".jpeg,.jpg,.png",
    previewTemplate:a,
    maxFilesize:2,
    addRemoveLinks:!0,
    maxFiles:1
};
}();

!function(){
    setTimeout(()=> {
    var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 &&
                    this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    $.each(myObj, function(i) {
                        document.getElementById("nama-lengkap").value = myObj.data[0].nama_lengkap;
                        document.getElementById("no-urut").value = myObj.data[0].no_urut;
                        document.getElementById("masuk-jalur").value = myObj.data[0].masuk_jalur;
                        document.getElementById("nisn").value = myObj.data[0].nisn;
                        document.getElementById("nama-wali").value = '-';
                        document.getElementById("ttl-wali").value = '-';
                        $('#agama-wali').selectpicker('val', '-');
                        document.getElementById("kw-wali").value = '-';
                        $('#pdd-wali').selectpicker('val', '-');
                        $('#pk-wali').selectpicker('val', '-');
                        $('#ph-wali').selectpicker('val', '-');
                        document.getElementById("notelp-wali").value = '-';
                        document.getElementById("jalan-wali").value = '-';
                        document.getElementById("rt-wali").value = '-';
                        document.getElementById("rw-wali").value = '-';
                        document.getElementById("desa-wali").value = '-';
                        document.getElementById("kec-wali").value = '-';
                        document.getElementById("kab-wali").value = '-';
                        document.getElementById("hub-wali").value = '-';
                        if (myObj.data[0].bahasa == 0) {}
                        else {
                        document.getElementById("nama-panggilan").value = myObj.data[0].nama_panggilan;
                        document.getElementById("nik").value = myObj.data[0].nik;
                        $('#jk').selectpicker('val', myObj.data[0].jk);
                        document.getElementById("tempat-lahir").value = myObj.data[0].tempat_lahir;
                        $('#prov-lahir').selectpicker('val', myObj.data[0].prov_lahir);
                        document.getElementById("tanggal-lahir").value = myObj.data[0].tgl_lahir;
                        $('#agama').selectpicker('val', myObj.data[0].agama);
                        document.getElementById("kw").value = myObj.data[0].kw;
                        document.getElementById("anak-ke").value = myObj.data[0].anak_ke;
                        $('#stat-anak').selectpicker('val', myObj.data[0].status_anak);
                        document.getElementById("jalan").value = myObj.data[0].jalan;
                        document.getElementById("rt").value = myObj.data[0].rt;
                        document.getElementById("rw").value = myObj.data[0].rw;
                        document.getElementById("desa").value = myObj.data[0].desa;
                        document.getElementById("kec").value = myObj.data[0].kec;
                        document.getElementById("kab").value = myObj.data[0].kab;
                        document.getElementById("notelp").value = myObj.data[0].notelp;
                        $('#goldar').selectpicker('val', myObj.data[0].goldar);
                        document.getElementById("tb").value = myObj.data[0].tinggi_badan;
                        document.getElementById("bb").value = myObj.data[0].berat_badan;
                        document.getElementById("hobi-kes").value = myObj.data[0].hobi_kes;
                        document.getElementById("hobi-or").value = myObj.data[0].hobi_or;
                        document.getElementById("hobi-masy").value = myObj.data[0].hobi_masy;
                        document.getElementById("hobi-lain").value = myObj.data[0].hobi_lain;
                        $('#tinggal').selectpicker('val', myObj.data[0].tinggal);
                        document.getElementById("nama-ayah").value = myObj.data[0].nama_ayah;
                        document.getElementById("ttl-ayah").value = myObj.data[0].ttl_ayah;
                        $('#agama-ayah').selectpicker('val', myObj.data[0].agama_ayah);
                        document.getElementById("kw-ayah").value = myObj.data[0].kw_ayah;
                        $('#pdd-ayah').selectpicker('val', myObj.data[0].pdd_ayah);
                        $('#pk-ayah').selectpicker('val', myObj.data[0].pk_ayah);
                        $('#ph-ayah').selectpicker('val', myObj.data[0].ph_ayah);
                        document.getElementById("notelp-ayah").value = myObj.data[0].notelp_ayah;
                        document.getElementById("stat-ayah").value = myObj.data[0].status_ayah;
                        document.getElementById("alamat-ortu").value = myObj.data[0].alamat_ortu;
                        document.getElementById("nama-ibu").value = myObj.data[0].nama_ibu;
                        document.getElementById("ttl-ibu").value = myObj.data[0].ttl_ibu;
                        $('#agama-ibu').selectpicker('val', myObj.data[0].agama_ibu);
                        document.getElementById("kw-ibu").value = myObj.data[0].kw_ibu;
                        $('#pdd-ibu').selectpicker('val', myObj.data[0].pdd_ibu);
                        $('#pk-ibu').selectpicker('val', myObj.data[0].pk_ibu);
                        $('#ph-ibu').selectpicker('val', myObj.data[0].ph_ibu);
                        document.getElementById("notelp-ibu").value = myObj.data[0].notelp_ibu;
                        document.getElementById("stat-ibu").value = myObj.data[0].status_ibu;
                        
                        if (myObj.data[0].nama_wali=='-') {}
                        else {
                        setTimeout(()=> {document.getElementById("walicheck").checked = true;wali();},3e3);
                        document.getElementById("nama-wali").value = myObj.data[0].nama_wali;
                        document.getElementById("ttl-wali").value = myObj.data[0].ttl_wali;
                        $('#agama-wali').selectpicker('val', myObj.data[0].agama_wali);
                        document.getElementById("kw-wali").value = myObj.data[0].kw_wali;
                        $('#pdd-wali').selectpicker('val', myObj.data[0].pdd_wali);
                        $('#pk-wali').selectpicker('val', myObj.data[0].pk_wali);
                        $('#ph-wali').selectpicker('val', myObj.data[0].ph_wali);
                        document.getElementById("notelp-wali").value = myObj.data[0].notelp_wali;
                        document.getElementById("jalan-wali").value = myObj.data[0].jalan_wali;
                        document.getElementById("rt-wali").value = myObj.data[0].rt_wali;
                        document.getElementById("rw-wali").value = myObj.data[0].rw_wali;
                        document.getElementById("desa-wali").value = myObj.data[0].desa_wali;
                        document.getElementById("kec-wali").value = myObj.data[0].kec_wali;
                        document.getElementById("kab-wali").value = myObj.data[0].kab_wali;
                        document.getElementById("hub-wali").value = myObj.data[0].hub_wali;
                        };
                        document.getElementById("no-pend").value = myObj.data[0].no_pendaftaran;
                        document.getElementById("asal").value = myObj.data[0].asal;
                        $('#masuk-kelas').selectpicker('val', myObj.data[0].masuk_kelas);
                        document.getElementById("masuk-tgl").value = myObj.data[0].masuk_tgl;
                        document.getElementById("pindahan-asal").value = myObj.data[0].pindahan_asal;
                        document.getElementById("pindahan-alasan").value = myObj.data[0].pindahan_alasan;
                        document.getElementById("jml-kd").value = myObj.data[0].jml_saudara_kd;
                        document.getElementById("jml-tr").value = myObj.data[0].jml_saudara_tr;
                        document.getElementById("jml-ak").value = myObj.data[0].jml_saudara_ak;
                        document.getElementById("jarak").value = myObj.data[0].jarak;
                        document.getElementById("penyakit").value = myObj.data[0].penyakit;
                        document.getElementById("kelainan").value = myObj.data[0].kelainan;
                        document.getElementById("no-kks").value = myObj.data[0].no_kks;
                        document.getElementById("no-pkh").value = myObj.data[0].no_pkh;
                        document.getElementById("no-kip").value = myObj.data[0].no_kip;
                        document.getElementById("no-kis").value = myObj.data[0].no_kis;
                        document.getElementById("no-akta").value = myObj.data[0].no_akta;
                        document.getElementById("no-kk").value = myObj.data[0].no_kk;
                        document.getElementById("transport").value = myObj.data[0].transport;
                        document.getElementById("email").value = myObj.data[0].email;
                        document.getElementById("smp-npsn").value = myObj.data[0].smp_npsn;
                        document.getElementById("smp-no").value = myObj.data[0].smp_no;
                        document.getElementById("smp-tgl").value = myObj.data[0].smp_tgl;
                        document.getElementById("sd-asal").value = myObj.data[0].sd_asal;
                        document.getElementById("sd-npsn").value = myObj.data[0].sd_npsn;
                        document.getElementById("sd-no").value = myObj.data[0].sd_no;
                        document.getElementById("sd-tgl").value = myObj.data[0].sd_tgl;
                        };
                        if (myObj.data[0].bahasa == 0) {}
                        else { let bahasa = myObj.data[0].bahasa;
                        const bhsArray = bahasa.split(", ");
                        $('#bahasa').selectpicker('val', bhsArray); };
                    });

                }
            };

            xmlhttp.open("GET", appPath+"aksi/data/sendiri", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
        },1000);
        $('#simple-date2 .input-group.date').datepicker({
            startView: 2,
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayBtn: 'linked',
          });
}();