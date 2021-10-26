$(function () {
	$('.tambah').on('click', function () {
		$('#addNewArtikel').html('Tambah Artikel');
		$('.modal-footer button[type=submit]').html('Tambah Artikel');
		$('.modal-body form').attr('action', '/ppsa/dashboard/artikel');

		$('#id').val();
		$('#judul').val();
		$('#isi').val();
	});

	$('.edit').on('click', function () {
		$('#addNewArtikel').html('Edit Artikel');
		$('.modal-footer button[type=submit]').html('Edit Artikel');

		const id = $(this).data('id');
		$('.modal-body form').attr('action', '/ppsa/dashboard/edit');

		$.ajax({
			url: '/ppsa/dashboard/fetch',
			data: {
				id,
				id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#id').val(data.id);
				$('#judul').val(data.judul);
				$('#isi').html(data.isi);
				console.log(data);
			}
		});
	});
	$('.tambahp').on('click', function () {
		$('#addNewPengurus').html('Tambah Pengurus');
		$('.modal-footer button[type=submit]').html('Tambah Pengurus');
		$('.modal-body form').attr('action', '/ppsa/pondok/pengurus');

		$('#id').val();
		$('#nama').val();
		$('#jabatan').val();
	});

	$('.editp').on('click', function () {
		$('#addNewPengurus').html('Edit Pengurus');
		$('.modal-footer button[type=submit]').html('Edit Pengurus');

		const id = $(this).data('id');
		$('.modal-body form').attr('action', '/ppsa/pondok/edit');

		$.ajax({
			url: '/ppsa/pondok/fetch',
			data: {
				id,
				id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#id').val(data.id);
				$('#nama').val(data.nama);
				$('#jabatan').val(data.jabatan);
			}
		});
	});

	$('.custom-file-input').on('change', function () {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass('selected').html(fileName);
	});
});

const flashData = $('.flash-data').data('flashdata');
const flashData2 = $('.flashdata').data('flashdata');
const data = $('.flash-data').data('data');

if (flashData) {
	Swal.fire({
		title: data,
		text: 'Berhasil ' + flashData,
		type: 'success'
	})
}
if (flashData2) {
	Swal.fire({
		title: data,
		text: 'Belum ' + flashData2,
		type: 'warning'
	})
}

$('.hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: data + ' akan dihapus',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus',
		cancelButtonText: 'Batal',
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})
$('.logout').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Log Out',
		text: 'Apakah anda yakin ingin log out?',
		type: 'question',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin',
		cancelButtonText: 'Batal',
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})
