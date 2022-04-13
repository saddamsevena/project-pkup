<?php

namespace App\Http\Controllers;

use App\Models\Records;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $records= Records::all();
        return view ('record.home',['records'=>$records]);
    }

    public function create()
    {
        return view('record.add');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('records')->insert([
            'user_id' => Auth::user()->id,
            'tanggal' => $request->tanggal,
            'isi_record' => $request->isi,
                    ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/record');
     
    }

    public function read($id)
    {
        $records = DB::table('records')->where('id',$id)->get();
        return view('record.read',['records'=>$records]);
    }
    public function edit($id)
    {
      
        $records = DB::table('records')->where('id',$id)->get();
        return view('record.edit',['records'=>$records]);
     
    }
    public function update(Request $request)
    {
	// update data pegawai
    Records::where('id',$request->id)->update([
		'tanggal' => $request->tanggal,
        'isi_record' => $request->isi,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect()->to('record/read/'.$request->id)->withErrors(['msg' => 'Artikel berhasil diedit']);;
    }

    public function delete($id)
{
	DB::table('records')->where('id',$id)->delete();
	return redirect('/record');
}
}
