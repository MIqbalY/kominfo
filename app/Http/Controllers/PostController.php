<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Datapegawai;
use App\Daftarnilai;

class PostController extends Controller
{
    	public function __construct()
    {
        $this->middleware('auth');
    }

    public function prioritas($id)
    {
        $posts = [
            'posts' => Datapegawai::findOrFail($id)
        ];
        return view('post.prioritas', ['posts'=>$posts]);
    }

    public function rekap()
    {
         // $data = \App\Datapegawai::all(); 
        $data = DB::table('datapegawais')
            ->join('daftarnilais', 'datapegawais.nip', '=', 'daftarnilais.nip')
            ->select('datapegawais.*', 'daftarnilais.*')
            ->get();
        return view('post.rekap', ['data'=>$data]);
    }

    public function create()

    {
        return view('post.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'nama_pegawai' => 'required',
    		'nip' => 'required',
    		'satker' => 'required',
    		'unit_kerja' => 'required',
    		'jabatan' => 'required',
    		'nama_atasan' => 'required',
    		'jabatan_at' => 'required',
    	]);
     
    	$nama_pegawai = $request->input('nama_pegawai');
    	$nip = $request->input('nip');
    	$satker = $request->input('satker');
    	$unit_kerja = $request->input('unit_kerja');
    	$jabatan = $request->input('jabatan');
    	$nama_atasan = $request->input('nama_atasan');
    	$jabatan_at = $request->input('jabatan_at');
        $kesesuaian = $request->input('kesesuaian');


        $post = new Datapegawai;
        $post->nama_pegawai = $nama_pegawai;
        $post->nip = $nip;
        $post->satker = $satker;
        $post->unit_kerja = $unit_kerja;
        $post->jabatan = $jabatan;
        $post->nama_atasan = $nama_atasan;
        $post->jabatan_at = $jabatan_at;

        $post->syarat_jabatan = implode(",", $request->syarat_jabatan);
        $post->kesesuaian = implode(",", $request->kesesuaian);
        $post->kkn = implode(",", $request->kkn);
        $post->dkk = implode(",", $request->dkk);
        $post->save();
        $request
        ->session()
        ->flash('success_message', 'Success create new post!');
        return redirect('/post/prioritas/' . $post->id);

    }

    public function simpan(Request $request,$nip)
    {
            $request->validate([
        'nip' => 'required',
         'waktu' => 'required',
         'tkesulitan' => 'required',
         'kualitas' => 'required',
         'pengaruh' => 'required',
         'keseringan' => 'required',
         'total' => 'required',
     ]);
        $nip = $request->input('nip');
        $waktu = $request->input('waktu');
        $tkesulitan = $request->input('tkesulitan');
        $kualitas = $request->input('kualitas');
        $pengaruh = $request->input('pengaruh');
        $keseringan = $request->input('keseringan');
        $total = $request->input('total');

        $post = new Daftarnilai;
        $post->nip = $nip;
        $post->waktu = $waktu;
        $post->tkesulitan = $tkesulitan;
        $post->kualitas = $kualitas;
        $post->pengaruh = $pengaruh;
        $post->keseringan = $keseringan;
        $post->total = $total;
        $post->save();

        $request
        ->session()
        ->flash('success_message', 'Success create new post!');

        return redirect('/post/rekap');

    }
    public function edit($id)
    {
        $data = ['data' => Datapegawai::findOrFail($id)];
        return view('post.edit', ['data'=>$data]);
    }

    public function edit2($id)
    {
        // $id = $request->input('id');
        $data = DB::table('datapegawais')
        ->join('daftarnilais', function ($join) use ($id){
            $join->on('daftarnilais.id', '=', 'datapegawais.id')
                 ->where('daftarnilais.id', '=', $id);
        })
        ->get();

        // $data = DB::table('datapegawais')
        //      ->join('daftarnilais', function($join) use ($id){
        //             $join->on('datapegawais.id', '=', 'daftarnilais.id');
        //             $join->on(function($query) use ($id) {
        //             $query->on('daftarnilais.id', '=', $id);
        //     });
        // })
        
        // $data = ['data' => Datapegawai::findOrFail($id)];
        return view('post.edit2', ['data'=>$data]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'nip' => 'required',
            'satker' => 'required',
            'unit_kerja' => 'required',
            'jabatan' => 'required',
            'nama_atasan' => 'required',
            'jabatan_at' => 'required',
        ]);
        $data = Datapegawai::findOrFail($id);
        $data->nama_pegawai = $request->input('nama_pegawai');
        $data->nip = $request->input('nip');
        $data->satker =$request->input('satker');
        $data->unit_kerja = $request->input('unit_kerja');
        $data->jabatan = $request->input('jabatan');
        $data->nama_atasan = $request->input('nama_atasan');
        $data->jabatan_at = $request->input('jabatan_at');
        //  $post->syarat_jabatan = implode(",", $request->syarat_jabatan);
        // $post->kesesuaian = implode(",", $request->kesesuaian);
        // $post->kkn = implode(",", $request->kkn);
        // $post->dkk = implode(",", $request->dkk);
        $data->save();
        $request
            ->session()
            ->flash('success_message', 'Data updated!');
        return redirect('/post/edit2/'. $data->id);
    }

    public function update2(Request $request, $id)
    {
        $request->validate([
        'nip' => 'required',
         'waktu' => 'required',
         'tkesulitan' => 'required',
         'kualitas' => 'required',
         'pengaruh' => 'required',
         'keseringan' => 'required',
         'total' => 'required',
     ]);

        $data = Daftarnilai::findOrFail($id);
        $data->nip = $request->input('nip');
        $data->waktu = $request->input('waktu');
        $data->tkesulitan = $request->input('tkesulitan');
        $data->kualitas = $request->input('kualitas');
        $data->pengaruh = $request->input('pengaruh');
        $data->keseringan = $request->input('keseringan');
        $data->total = $request->input('total');
        $data->save();
        $request
            ->session()
            ->flash('success_message', 'Data updated!');
        return redirect('/post/rekap');

    
    }

    public function destroy($id)
    {
        Datapegawai::destroy($id);
        Daftarnilai::destroy($id);
        $request
            ->session()
            ->flash('success_message', 'Data deleted!');

            return redirect('/post/rekap');
    }

    public function search(Request $request)
    {
        $query = $request->get('cari');
        $data = Datapegawai::where('nip', 'LIKE', '%' . $query . '%')->paginate(10);
        $x = DB::table('datapegawais')
        ->join('daftarnilais', function ($join) use ($query){
            $join->on('daftarnilais.nip', '=', 'datapegawais.nip')
                 ->where('daftarnilais.nip', '=', $query);
        })
        ->get();
        return view('post.cari', compact('x', 'query'));
    }

}
