@extends('layouts.app')
@section('content')
                    <!-- Search form -->

<!-- <div class="active-cyan-3 active-cyan-4 mb-4 col-md-2">
<input class="form-control" type="text" placeholder="Search" aria-label="Search" name="cari">
<button type="submit"><i class="fa fa-search"></i></button>
</div> -->
<form method="GET" action="/post/cari" >
   <div class="input-group col-md-3">
  <input type="text" class="form-control" placeholder="Cari NIP" name="cari">
      <span class="input-group-btn">
        <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i>Cari</button>
      </span>
</div>
<br>
</form>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">IDENTIFIKASI KEBUTUHAN PROGRAM PENGEMBANGAN KOMPETENSI PEGAWAI</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <table border="1" class="table table-bordered">
  {{ method_field('PUT') }}
        {{ csrf_field() }}
  <tr>
   <th rowspan="2">No. Responden</th>
   <th rowspan="2">Nama</th>
   <th rowspan="2">Tahun</th>
   <th rowspan="2">Jabatan</th>
   <th rowspan="2">Kesenjangan Latar Pendidikan</th>
   <th rowspan="2">Rekomendasi Tubel/Ibel</th>
   <th rowspan="2">Jumlah Diskrepansi(Manusia)</th>
   <th rowspan="2">Rekomendasi Diklat Struktural</th>
   <th colspan="3">Rekomendasi Pelatihan</th>
   <th colspan="2" rowspan="2"></th>
  </tr>
  <tr>
   <th>Syarat</th>
   <th>Penunjang Tusi</th>
   <th>Peringkat Prioritas</th>
  </tr>
@foreach ($data as $dataa)
  <tr>
   <td>{{$dataa->id}}</td>
   <td>{{$dataa->nama_pegawai}}</td>
   <td></td>
   <td>{{$dataa->jabatan}}</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td>{{$dataa->syarat_jabatan}}</td>
   <td>{{$dataa->kesesuaian}}</td>
   <td>{{$dataa->total}}</td>
   <td><a href="/post/edit/{{$dataa->id}}" class="btn btn-primary">Edit</a></td>
    <!-- <td><a href="/post/destroy/{{$dataa->id}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a></td> -->
  </tr>
@endforeach

 </table>
    </div>
</div>
</div>
</div>
</div>
@endsection