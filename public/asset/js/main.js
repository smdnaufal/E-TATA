const flashData = $('.flash-data').data('flashdata');
const flashSalah = $('.flash-salah').data('flashdata');
const flashHapus = $('.flash-hapus').data('flashdata');

if(flashData){
    Swal.fire(
        'SUKSES!',
        'Data berhasil ditambahkan!',
        'success'
      )
}

if (flashSalah) {
  Swal.fire({
    icon: 'error',
    title: 'Ada Kesalahan',
    text: 'Data telah tersedia sebelumnya!',
    footer: ''
  })
}

if(flashHapus){
  Swal.fire(
      'SUKSES!',
      'Data berhasil dihapus!',
      'success'
    )
}