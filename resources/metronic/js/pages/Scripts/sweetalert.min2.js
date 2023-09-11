var txt = document.getElementById("msgText").value;
var ico = document.getElementById("msgIcon").value;

if (txt == 'null' || txt == '') { }
else {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary btn-space',
            cancelButton: 'btn btn-danger btn-space'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        text: txt,
        icon: ico,
        confirmButtonText: 'OK',
        timer: 15000
    });
}

function DeleteThis(url) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary btn-space',
            cancelButton: 'btn btn-danger btn-space'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: 'Adakah anda pasti?',
        text: "Apabila butang 'Ya, hapuskan' ditekan, fail dan rekod tersebut akan dihapuskan. Anda tidak akan dapat kembali fail dan rekod tersebut.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapuskan',
        cancelButtonText: 'Tidak, batalkan'
    }).then((result) => {
        if (result.value == true) {
            window.location.href = url;
        }
    });
}