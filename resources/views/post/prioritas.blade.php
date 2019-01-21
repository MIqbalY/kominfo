@extends('layouts.app')
@section('content')
@foreach ($posts as $post)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
              <form method="post" action="/post/simpan/{{$post->nip}}">
                  {{ csrf_field() }}


            <div class="card">
                <div class="card-header">ANALISIS PRIORITAS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
	<table>
                  {{ method_field('POST') }}

		<tr>
			<td>No. Responden</td>
			<td> : </td>
			<td><input class="form-control" name="no" value="{{$post->id}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Satuan Kerja </td>
			<td>:</td>
			<td><input class="form-control" name="satker" value="{{$post->satker}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Unit Kerja</td>
			<td>:</td>
			<td><input class="form-control" name="unit_kerja" value="{{$post->unit_kerja}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
			<td><input class="form-control" name="nama_pegawai" value="{{$post->nama_pegawai}}" readonly="true"></td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td><input class="form-control" name="nip" value="{{$post->nip}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input class="form-control" name="jabatan" value="{{$post->jabatan}}" readonly="true"></td>
		</tr>
		<tr>
			<td><b>Atasan Langsung Pegawai</b></td>
		</tr>
		<tr>
			<td>Nama Atasan</td>
			<td>:</td>
			<td><input class="form-control" name="nama_atasan" value="{{$post->nama_atasan}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input class="form-control" name="jabatan_at" value="{{$post->jabatan_at}}" readonly="true"></td>
		</tr>
	</table>

<br><br>
	<center>
	<table border="1">
		<tr>
			<th style="text-align: center;">No.</th>
			<th style="text-align: center;">Diskrepansi Kompetensi dan Syarat Jabatan</th>
			<th style="text-align: center;">Waktu</th>
			<th style="text-align: center;">Tingkat Kesulitan</th>
			<th style="text-align: center;">Kualitas Hasil</th>
			<th style="text-align: center;">Pengaruh</th>
			<th style="text-align: center;">Keseringan Dihadapi</th>
			<th style="text-align: center;">Total/Ranking</th>
		</tr>
		<tr>
			<td></td>
			<td>{{$post->kesesuaian}}</td>
@endforeach
			<td><input type="form-control" name="waktu" style="border: none; outline-style: none;"></td>
			<td><input type="form-control" name="tkesulitan" style="border: none; outline-style: none;"></td>
			<td><input type="form-control" name="kualitas" style="border: none; outline-style: none;"></td>
			<td><input type="form-control" name="pengaruh" style="border: none; outline-style: none;"></td>
			<td><input type="form-control" name="keseringan" style="border: none; outline-style: none;"></td>
			<td><input type="form-control" name="total" style="border: none; outline-style: none;"></td>
		</tr>
	</table>

	</center>
</div>
</div>
	<center><div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div></center>
</form>
</div>
</div>
</div>
@endsection
