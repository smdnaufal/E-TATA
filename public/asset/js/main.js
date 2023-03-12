const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire(
        'SUCCESS!',
        'Data berhasil ditambahkan!',
        'success'
      )
}