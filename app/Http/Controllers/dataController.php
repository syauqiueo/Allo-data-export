<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;

use Illuminate\Support\Facades\Session;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Data as ModelsData;

class DataController extends Controller
{
	public function index()
	{
		$data = ModelsData::all();
		return view('home',['data'=>$data]);
	}
	// public function export_excel()
	// {
	// 	return Excel::download(new SiswaExport, 'siswa.xlsx');
	// }

	public function import(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_data',$nama_file);

		// import data
		// Excel::import(new DataImport, public_path('/file_data/'.$nama_file));
        Excel::import(new DataImport, public_path('/file_data/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data Jira Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/');
	}

    public function delete(Request $request)
    {
        ModelsData::truncate();
		return redirect('/');
    }
}
