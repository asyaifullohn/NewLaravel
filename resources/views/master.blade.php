<!DOCTYPE html>
<html>
<head>
	<title>Belajar FOOTER Laravel</title>
</head>
<body>
 
	<header>
 
		<h2>Blog Tester</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.youtube.com">www.youtube.com</a>. 2019 - 2020</p>
	</footer>
 
</body>
</html>