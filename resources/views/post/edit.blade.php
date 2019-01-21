@extends('layouts.app')
@section('content')
@foreach ($data as $dataa)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
              <form method="post" action="/post/update/{{$dataa->id}}">
                  {{ csrf_field() }}
                  {{method_field('PUT')}}

            <div class="card">
                <div class="card-header">IDENTIFIKASI KEBUTUHAN PENGEMBANGAN KOMPETENSI</div>

                <div class="card-body">
                    @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif
    <table>
        <tr>
            <td>No. Responden</td>
            <td> : </td>
            <td><input class="form-control" name="no" value="{{$dataa->id}}" readonly="true"></td>
        </tr>
        <tr>
            <td>Satuan Kerja </td>
            <td>:</td>
            <td><input class="form-control" name="satker" value="{{$dataa->satker}}"></td>
        </tr>
        <tr>
            <td>Unit Kerja</td>
            <td>:</td>
            <td><input class="form-control" name="unit_kerja" value="{{$dataa->unit_kerja}}"></td>
        </tr>
        <tr>
            <td>Nama Pegawai</td>
            <td>:</td>
            <td><input class="form-control" name="nama_pegawai" value="{{$dataa->nama_pegawai}}"></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><input class="form-control" name="nip" value="{{$dataa->nip}}" readonly="true"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><input class="form-control" name="jabatan" value="{{$dataa->jabatan}}"></td>
        </tr>
        <tr>
            <td>Atasan Langsung Pegawai</td>
        </tr>
        <tr>
            <td>Nama Atasan</td>
            <td>:</td>
            <td><input class="form-control" name="nama_atasan" value="{{$dataa->nama_atasan}}"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><input class="form-control" name="jabatan_at" value="{{$dataa->jabatan_at}}"></td>
        </tr>
    </table>
    <br><br>
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
            <td>Latar Belakang Pendidikan :<br>S2 Hukum <input type="checkbox" name="syarat_jabatan[]" value="S2 Hukum" /></td>
            <td><input type="text" style="border: none; outline-style: none;" name="kesesuaian[]" value="{{$dataa->kesesuaian}}"></td>
            <td rowspan="4"><p>1. Merumuskan program kerja di lingkungan Biro Hukum berdasarkan rencana strategis Sekretariat Jenderal Kementerian Komunikasi dan Informatika sebagai pedoman pelaksanaan tugas.</p></td>
            <td><p>1. Memahami Renstra Hukum dan PK Biro Hukum</p></td>
                <td><p><input type="checkbox" name="kkn[]" value="yb1"  /></p></td>
                <td><p><input type="checkbox" name="kkn[]" value="at1"   /></p></td>
                <td><p><input type="checkbox" name="kkn[]" value="rk1" /></p></td>
                <td><p><input type="checkbox" name="dkk[]" value="dkk1" /></p></td>


        </tr>
        <tr>
            <div class="checkbox">
                <td>Pendidikan dan Pelatihan yang harus dimiliki: <br> 1. Diklat Pim II
                <input type="checkbox" name="syarat_jabatan[]" value="Diklat Pim II" @if($dataa->syarat_jabatan == 'Diklat Pim II') checked @endif> <br>
                2. Pelatihan Manajerial <input type="checkbox" name="syarat_jabatan[]" value="Pelatihan Manajerial" @if($dataa->syarat_jabatan == 'Pelatihan Manajerial') checked @endif/> <br>
                3. Diklat Legal Drafting <input type="checkbox" name="syarat_jabatan[]" value="Diklat Legal Drafting" @if($dataa->syarat_jabatan == 'Diklat Legal Drafting') checked @endif/> <br>
                4. Pelatihan Advokasi Hukum <input type="checkbox" name="syarat_jabatan[]" value="Pelatihan Advokasi Hukum" @if($dataa->syarat_jabatan == 'Pelatihan Advokasi Hukum') checked @endif/> <br>
            </td>
            </div>
            
            <td><input type="text" style="border: none; outline-style: none;" name="kesesuaian[]"></td>
            <td><p>2. Mampu menurunkan uraian program dari PK</p></td>
            <td><p><input type="checkbox" name="kkn[]" value="yb2" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at2" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk2" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk2" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" style="border: none; outline-style: none;" name="kesesuaian[]"></td>
            <td><p>3. Mampu membagi program kerja ke dalam kewenangan Bagian-Bagian di Biro Hukum</p></td>
            <td><p><input type="checkbox" name="kkn[]" value="yb3" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at3" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk3" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk3" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td rowspan=""><input type="text" style="border: none; outline-style: none;" name="kesesuaian[]"></td>
            <td><p>4. Mampu menetapkan program kerja Biro Hukum</p></td>
            <td><p><input type="checkbox" name="kkn[]" value="yb4" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at4" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk4" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk4" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td rowspan="2"><p>2. Merumuskan kebijakan dan pembinaan dalam penyusunan,  pengharmonisasian, dan pengundangan peraturan perundang-undangan bidang komunikasi dan informatika</p></td>
            <td>5. Memahami kebijakan pembentukan peraturan perundang-undangan</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb5" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at5" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk5" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk5" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>6. Mampu memberikan arahan terkait proses pembentukan peraturan perundang-undangan di lingkungan Kominfo</td>
             <td><p><input type="checkbox" name="kkn[]" value="yb6" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at6" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk6" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk5" /></p></td>
        </tr>
         <tr>
            <td></td>
            <td></td>
            <td rowspan="5"><p>3. Melakukan penelaahan, pemantauan, dan evaluasi produk hukum bidang Kominfo</p></td>
            <td>7. Memahami produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb7" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at7" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk7" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk6" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>8. Memahami prosedur dan dasar penetapan produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb8" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at8" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk8" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk8" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>9. Mampu melakukan analisis dan telaah produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb9" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at9" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk9" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk9" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>10. Memahami prosedur pemantauan produk hukum</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb10" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at10" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk10" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk10" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>11. Mampu mengevaluasi produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb11" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at11" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk11" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk11" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td rowspan="2">4. Mengkoordinasikan pelaksanaan pertimbangan advokasi, dan bantuan hukum</td>
            <td>12. Mampu memberikan pertimbangan hukum</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb12" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at12" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk12" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="rk12" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>13. Mampu melaksanakan advokasi dan bantuan hukum</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb13" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at13" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk13" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk13" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td rowspan="2">5. Mengkoordinasikan pengelolaan dokumentasi dan informasi hukum</td>
            <td>14. Mampu mengelola dokumentasi dan informasi hukum</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb14" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at14" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk14" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk14" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>15. Mampu menyajikan dokumentasi dan informasi dalam sistem JDIH</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb15" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at15" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk15" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk15" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>6. Melaporkan hasil pelaksanaan tugas</td>
            <td>16. Mampu menangkap inti dari suatu kegiatan dan menuangkan dalam laporan (lisan/ tulisan)</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb16" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at16" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk16" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk16" /></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>7. Tugas Manajerial pembinaan ke bawah (uraian tugas managerial digabungkan)</td>
            <td>17. Melaksanakan coaching dan mentoring terhadap bawahan</td>
            <td><p><input type="checkbox" name="kkn[]" value="yb17" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="at17" /></p></td>
            <td><p><input type="checkbox" name="kkn[]" value="rk17" /></p></td>
            <td><p><input type="checkbox" name="dkk[]" value="dkk17" /></p></td>
        </tr>
    </table>
    
    </center>
                </div>
            </div>
            <center><div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div></center>
    </form>
        </div>
    </div>             
</div>
@endforeach
@endsection
