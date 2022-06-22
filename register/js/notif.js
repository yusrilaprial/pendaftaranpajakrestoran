function block_page(msg) {
    $.blockUI({
        message:
            '<i class="fas fa-spin fa-sync text-white"></i><br><span class="text-semibold text-white">' +
            msg +
            "</span>",
        overlayCSS: {
            backgroundColor: "#000",
            opacity: 0.5,
            cursor: "wait",
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: "transparent",
            zIndex: 999999,
        },
        baseZ: 999999,
    });
}

function block_element(element, msg) {
    var block_ele = $(element);
    $(block_ele).block({
        message:
            '<i class="fas fa-spin fa-sync text-white"></i><br><span class="text-semibold text-white">' +
            msg +
            "</span>",
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: "#000",
            opacity: 0.5,
            cursor: "wait",
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: "transparent",
            zIndex: 999999,
        },
        baseZ: 999999,
    });
}

function notif(tipe, head, msg) {
    if (!$().jGrowl) {
        console.warn('Warning - jgrowl.min.js is not loaded.');
        return;
    }
    $.jGrowl.defaults.closer = false;
    switch (tipe) {
        case "info":
            $.jGrowl(msg, {
                header: head,
                life: 5000,
                theme: 'bg-info alert-styled-left'
            });
            break;
        case "success":
            $.jGrowl(msg, {
                header: head,
                life: 5000,
                theme: 'bg-success alert-styled-left'
            });
            break;
        case "warning":
            $.jGrowl(msg, {
                header: head,
                life: 5000,
                theme: 'bg-warning alert-styled-left'
            });
            break;
        case "error":
            $.jGrowl(msg, {
                header: head,
                life: 5000,
                theme: 'bg-danger alert-styled-left'
            });
            break;
        default:
            $.jGrowl(msg, {
                header: head,
                life: 5000,
                theme: 'bg-primary alert-styled-left'
            });
            break;
    }
}

function pops_timer(tipe, judul, pesan, aksi) {
    swal({
        title: judul,
        text: pesan,
        type: tipe,
        timer: 3000,
        showConfirmButton: false,
    }).then((result) => {
        if (result.dismiss === swal.DismissReason.timer) {
            // swal(
            //   'Deleted!',
            //   'Your file has been deleted.',
            //   'success'
            // )
            console.log("euy");
            if (aksi != null) {
                eval(aksi);
            }
        }
    });
}

function pops_question(judul, pesan, aksi) {
    swal({
        title: judul,
        text: pesan,
        type: "question",
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonClass: "btn btn-sm btn-info",
        cancelButtonClass: "btn btn-sm btn-danger mg-l-20",
        buttonsStyling: false,
    }).then((result) => {
        if (result.value) {
            console.log("euy");
            eval(aksi);
        }
    });
}

function konfirm(judul, pesan, aksi, val) {
    swal({
        title: judul,
        text: pesan,
        type: "question",
        showCancelButton: true,
        confirmButtonText: judul,
        cancelButtonText: "Tutup",
        confirmButtonClass: "btn btn-sm btn-info",
        cancelButtonClass: "btn btn-sm btn-danger m-l-20",
        buttonsStyling: false,
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: aksi,
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: { id: val },
                dataType: "JSON",
                beforeSend: function () {
                    block_page('Data sedang di proses . . ');
                },
                success: function (data) {
                    $.unblockUI();
                    if (data.response.code == 200) {
                        swal({
                            title: "Berhasil",
                            text: data.response.message,
                            confirmButtonClass: "btn btn-info btn-sm",
                            type: "success",
                            buttonsStyling: false,
                        }).then((result_berhasil) => {
                            if (result_berhasil.value) {
                                if (data.response.redirect != null) {
                                    window.location.href=data.response.redirect;
                                } else {
                                    setTimeout("location.reload(true);", 1000);
                                }
                            }
                        });
                    } else {
                        swal({
                            title: "Peringatan",
                            text: data.response.message,
                            confirmButtonClass: "btn btn-danger btn-sm",
                            type: "error",
                            buttonsStyling: false,
                        }).then((result_gagal) => {
                            if (result_gagal.value) {
                                if (data.response.redirect != null) {
                                    window.location.href=data.response.redirect;
                                } else {
                                    setTimeout("location.reload(true);", 1000);
                                }
                            }
                        });
                    }
                },
                error: function (data) {
                    console.log(data);
                    //   swal({
                    //       title: "Gagal !",
                    //       text: "Proses gagal !",
                    //       confirmButtonClass: 'btn btn-danger btn-sm',
                    //       type: "error",
                    //       buttonsStyling: false
                    //   });
                    //   setTimeout("location.reload(true);",1000);
                    $.unblockUI();
                },
                complete: function () {
                    // $.unblockUI();
                },
            });
        } else if (result.dismiss === swal.DismissReason.cancel) {
            swal({
                title: "Tutup !",
                text: "Proses dibatalkan !",
                confirmButtonClass: "btn btn-danger btn-sm",
                type: "error",
                buttonsStyling: false,
            });
        }
    });
}
