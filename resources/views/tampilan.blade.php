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
			@foreach ($dosen as $temp)
				<h3> <small>Nama Guru : {{$temp->nama}}</small></h3>
				<h5>Nama Siswa : 
					@foreach($temp->mahasiswa as $tampung) 
						<li><strong>{{$tampung->nama}}</strong></li> 
					@endforeach
				</h5>
			@endforeach
		</div>
	</body>
</html>