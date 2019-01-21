@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
              <form method="post" action="/post/store">
                  {{ csrf_field() }}


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
            <td><input type="text" name="unit_kerja"></td>
        </tr>
        <tr>
            <td>Nama Pegawai</td>
            <td>:</td>
            <td><input type="text" name="nama_pegawai"></td>
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
            <td><input type="text" name="nama_atasan"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><input type="text" name="jabatan_at"></td>
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
            <td>Latar Belakang Pendidikan :<br>S2 Hukum <input type="checkbox" name="pendidikan" value="pendidikan"/></td>
            <td rowspan="4"></td>
            <td rowspan="4"><p>1. Merumuskan program kerja di lingkungan Biro Hukum berdasarkan rencana strategis Sekretariat Jenderal Kementerian Komunikasi dan Informatika sebagai pedoman pelaksanaan tugas.</p></td>
            <td><p>1. Memahami Renstra Hukum dan PK Biro Hukum</p></td>
                <td><p><input type="checkbox" name="renstra" value="ybrenstra" /></p></td>
                <td><p><input type="checkbox" name="renstra" value="atrenstra"/></p></td>
                <td><p><input type="checkbox" name="renstra" value="rkrenstra"/></p></td>
                <td><p><input type="checkbox" name="renstra"/></p></td>


        </tr>
        <tr>
            <td>Pendidikan dan Pelatihan yang harus dimiliki: <br> 1. Diklat Pim II
                <input type="checkbox" name="pelatihan" value="diklatpim"/> <br>
                2. Pelatihan Manajerial <input type="checkbox" name="pelatihan" value="pelmanajerial"/> <br>
                3. Diklat Legal Drafting <input type="checkbox" name="pelatihan" value="legaldrafting"/> <br>
                4. Pelatihan Advokasi Hukum <input type="checkbox" name="pelatihan" value="advhukum"/> <br>
            </td>
            <td><p>2. Mampu menurunkan uraian program dari PK</p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td><p>3. Mampu membagi program kerja ke dalam kewenangan Bagian-Bagian di Biro Hukum</p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td><p>4. Mampu menetapkan program kerja Biro Hukum</p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td rowspan="2"><p>2. Merumuskan kebijakan dan pembinaan dalam penyusunan,  pengharmonisasian, dan pengundangan peraturan perundang-undangan bidang komunikasi dan informatika</p></td>
            <td>5. Memahami kebijakan pembentukan peraturan perundang-undangan</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>6. Mampu memberikan arahan terkait proses pembentukan peraturan perundang-undangan di lingkungan Kominfo</td>
             <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
         <tr>
            <td></td>
            <td></td>
            <td rowspan="5"><p>3. Melakukan penelaahan, pemantauan, dan evaluasi produk hukum bidang Kominfo</p></td>
            <td>7. Memahami produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>8. Memahami prosedur dan dasar penetapan produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>9. Mampu melakukan analisis dan telaah produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>10. Memahami prosedur pemantauan produk hukum</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>11. Mampu mengevaluasi produk hukum bidang Kominfo</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td rowspan="2">4. Mengkoordinasikan pelaksanaan pertimbangan advokasi, dan bantuan hukum</td>
            <td>12. Mampu memberikan pertimbangan hukum</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>13. Mampu melaksanakan advokasi dan bantuan hukum</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td rowspan="2">5. Mengkoordinasikan pengelolaan dokumentasi dan informasi hukum</td>
            <td>14. Mampu mengelola dokumentasi dan informasi hukum</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>15. Mampu menyajikan dokumentasi dan informasi dalam sistem JDIH</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>6. Melaporkan hasil pelaksanaan tugas</td>
            <td>16. Mampu menangkap inti dari suatu kegiatan dan menuangkan dalam laporan (lisan/ tulisan)</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>7. Tugas Manajerial pembinaan ke bawah (uraian tugas managerial digabungkan)</td>
            <td>17. Melaksanakan coaching dan mentoring terhadap bawahan</td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
            <td><p><input type="checkbox" name="renstra"/></p></td>
        </tr>
    </table>
    
    </center>
                </div>
            </div>
        </div>
    </form>

    </div>
    <center><a href="" class="btn btn-primary">Simpan</a></center>
                
</div>
@endsection
