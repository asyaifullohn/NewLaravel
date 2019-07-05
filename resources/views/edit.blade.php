<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD EDIT</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>

    <div class="container">
	<p>&copy; 2019 <a href="https://www.youtube.com">Youtube.com</a></p>
	<h2>FORM EDIT PEGAWAI</h2>

	<a href="/pegawai"> Kembali</a>
	
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<div class="form-group">
        Nama : <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
        </div>
        <div class="form-group">
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
        </div>
        <div class="form-group">
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
        
		Alamat <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea><br/>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
		
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>