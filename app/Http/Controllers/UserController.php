<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Datapegawai;
use Input;
use DB;

   class UserController extends Controller
   {
   	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    public function prioritas()
    {
        return view('post.prioritas');
    }

    public function rekap()
    {
        return view('post.rekap');
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

    	$post = new Datapegawai;
    	$post->nama_pegawai = $nama_pegawai;
    	$post->nip = $nip;
    	$post->satker = $satker;
    	$post->unit_kerja = $unit_kerja;
    	$post->jabatan = $jabatan;
    	$post->nama_atasan = $nama_atasan;
    	$post->jabatan_at = $jabatan_at;
    	$post->save();

    	$request
    	->session()
    	->flash('success_message', 'Success create new post!');
    	return redirect('/');
    }

   }