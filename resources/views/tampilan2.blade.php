<html>
	<head>
		<meta charset="UTF-8">
		<title>Halo Eloquent</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			@foreach ($wali as $temp)
				<h5>Nama Wiswa : {{$temp->nama}}</h5>
				<h5>Nama Siswa : {{$temp->mahasiswa->nama}}</h5>
			@endforeach
		</div>
	</body>
</html>