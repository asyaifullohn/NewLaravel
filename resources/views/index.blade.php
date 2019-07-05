	<!DOCTYPE html>
	<html>
	<head>
		<title>Belajar CRUD Pada Laravel</title></p>
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>
	<body>
		<style type="text/css">
			.pagination li{
				float: left;
				list-style-type: none;
				margin:5px;
			}
		</style>
		<div class="container">
		<div align="center"><h3>DATA PEGAWAI</h3></div>
		<a href="/tambah"> + Tambah Pegawai Baru</a>

		<br/>
		<br/>
		
		<div align="right">
		<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai . . ." value="{{ old('cari') }}">
		<input type="submit" value="SEARCH" class="btn btn-primary">
		</form></div>

		<table class="table table-bordered table-striped" border="1" class="table table-bordered">
		
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td>
					<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
					|
					<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
		
			</body>
	<footer>
	<div align="right">&copy;2019 <a href="https://www.youtube.com">Newbie Belajar Laravel</a></div>
	<br/>
		Halaman : {{ $pegawai->currentPage() }} <br/>
		Jumlah Data : {{ $pegawai->total() }} <br/>
		Data Per Halaman : {{ $pegawai->perPage() }} <br/>


		{{ $pegawai->links() }}
	</footer>
	</html>