<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Search Result</title>
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>
<body>
<h1>JADWAL<br><span class="yellow">PENGAMBILAN JAKET ALMAMATER</pan></h1>

<table class="container">
	<thead>
		<tr>
			<th><h1></h1></th>
			<th><h1></h1></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>NIM</td>
			<td>{{ $mahasiswa->ID }}</td>
		</tr>
    <tr>
      <td>NAMA</td>
			<td>{{ $mahasiswa->NAMA }}</td>
    </tr>
    <tr>
      <td>FAKULTAS</td>
			<td>{{ $mahasiswa->FAKULTAS }}</td>
    </tr>
    <tr>
      <td>PRODI</td>
			<td>{{ $mahasiswa->JENJANG }} - {{ $mahasiswa->PRODI }}</td>
    </tr>
    <tr>
      <td>TANGGAL PENGAMBILAN</td>
			<td>{{ $mahasiswa->JADWAL_PENGAMBILAN }}</td>
    </tr>
	</tbody>
</table>
  <script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>
