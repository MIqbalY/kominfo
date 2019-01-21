<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
	<title></title>
</head>
<body>
	<center>IDENTIFIKASI KEBUTUHAN PENGEMBANGAN KOMPETENSI</center>
	<table>
		<tr>
			<td>No. Responden</td>
			<td> : </td>
			<td><input type="text" name="no"></td>
		</tr>
		<tr>
			<td>Satuan Kerja </td>
			<td>:</td>
			<td><input type="text" name="satker"></td>
		</tr>
		<tr>
			<td>Unit Kerja</td>
			<td>:</td>
			<td><input type="text" name="uker"></td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
			<td><input type="text" name="nama_peg"></td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td><input type="text" name="nip"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input type="text" name="jabatan"></td>
		</tr>
		<tr>
			<td>Atasan Langsung Pegawai</td>
		</tr>
		<tr>
			<td>Nama Atasan</td>
			<td>:</td>
			<td><input type="text" name="nama_at"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input type="text" name="jabatan_at"></td>
		</tr>
		<tr>
			
		</tr>
	</table>
	<center>
	<table border="1">
		<tr>
			<th rowspan="2">Syarat Jabatan</th>
			<th rowspan="2">Kesesuaian Syarat</th>
			<th rowspan="2">Uraian Tugas Jabatan</th>
			<th rowspan="2">Kompetensi</th>
			<th colspan="3">Kompetensi Kerja Nyata</th>
			<th rowspan="2">Diskrepansi Kompetensi Kerja</th>
		</tr>
		<tr>
			<th>YB</th>
			<th>AT</th>
			<th>RK</th>
		</tr>
		<tr>
			
		</tr>
	</table>
	<input type="submit" name="submit" value="simpan">
	</center>
</body>
</html>