$(document).ready(function() {
    $('#edit-data').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget),
            nama   = btn.data('nama'),
            email  = btn.data('email'),
            alamat = btn.data('alamat');

        // console.log(nama);
        // console.log(email);
        // console.log(alamat);

        $('#edit-modal').find('#edit-nama').val(nama);
        $('#edit-modal').find('#edit-email').val(email);
        $('#edit-modal').find('#edit-alamat').val(alamat);
    })

    $('#delete-data').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget),
            nama   = btn.data('nama');

        $('#delete-modal').find('#delete-nama').text(nama);
    })
})