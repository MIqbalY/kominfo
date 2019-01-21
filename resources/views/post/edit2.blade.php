@extends('layouts.app')
@section('content')
@foreach ($data as $datas)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
              <form method="post" action="/post/update2/{{$datas->id}}">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}


            <div class="card">
                <div class="card-header">ANALISIS PRIORITAS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
	<table>
		<tr>
			<td>No. Responden</td>
			<td> : </td>
			<td><input class="form-control" name="no" value="{{$datas->id}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Satuan Kerja </td>
			<td>:</td>
			<td><input class="form-control" name="satker" value="{{$datas->satker}}" readonly="true" ></td>
		</tr>
		<tr>
			<td>Unit Kerja</td>
			<td>:</td>
			<td><input class="form-control" name="unit_kerja" value="{{$datas->unit_kerja}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
			<td><input class="form-control" name="nama_pegawai" value="{{$datas->nama_pegawai}}" readonly="true"></td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td><input class="form-control" name="nip" value="{{$datas->nip}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input class="form-control" name="jabatan" value="{{$datas->jabatan}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Atasan Langsung Pegawai</td>
		</tr>
		<tr>
			<td>Nama Atasan</td>
			<td>:</td>
			<td><input class="form-control" name="nama_atasan" value="{{$datas->nama_atasan}}" readonly="true"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input class="form-control" name="jabatan_at" value="{{$datas->jabatan_at}}" readonly="true"></td>
		</tr>
		<tr>
		</tr>

	</table>

	<center>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Diskrepansi Kompetensi dan Syarat Jabatan</th>
			<th>Waktu</th>
			<th>Tingkat Kesulitan</th>
			<th>Kualitas Hasil</th>
			<th>Pengaruh</th>
			<th>Keseringan Dihadapi</th>
			<th>Total/Ranking</th>
		</tr>
		<tr>
			<td></td>
			<td>{{$datas->kesesuaian}}</td>
			<td><input type="form-control" name="waktu" style="border: none; outline-style: none;" value="{{$datas->waktu}}"></td>
			<td><input type="form-control" name="tkesulitan" style="border: none; outline-style: none;" value="{{$datas->tkesulitan}}"></td>
			<td><input type="form-control" name="kualitas" style="border: none; outline-style: none;" value="{{$datas->kualitas}}"></td>
			<td><input type="form-control" name="pengaruh" style="border: none; outline-style: none;" value="{{$datas->pengaruh}}"></td>
			<td><input type="form-control" name="keseringan" style="border: none; outline-style: none;" value="{{$datas->keseringan}}"></td>
			<td><input type="form-control" name="total" style="border: none; outline-style: none;" value="{{$datas->total}}"></td>
		</tr>
	</table>

	</center>
</div>
</div>
	<center><div class="form-group">
                      <button type="submit" class="btn btn-primary">Rekap</button>
                  </div></center>
</form>
</div>
</div>
</div>
@endforeach
@endsection
