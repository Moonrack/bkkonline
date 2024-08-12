<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Job;

class AdminController extends Controller
{
    
    public function tambah_loker()
    {
        return view('admin.tambah_loker');
    }

    public function upload_loker(Request $request)
    {
        $data = new Lowongan;
        $data->pt=$request->pt;
        $data->posisi=$request->posisi;
        $data->syarat=$request->syarat;
        $gambar = $request->gambar;
        if ($gambar) {
            $gambarname = time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('loker', $gambarname);
            $data->gambar = $gambarname;
        }
        $data->save();
        return redirect()->back();
    }

    public function view_loker()
    {
        $lowongan = Lowongan::all();
        return view('admin.loker', compact('lowongan'));
    }

    public function delete_job($id)
    {
        $data = Lowongan::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_job($id)
    {
        $data = Lowongan::find($id);
        return view('admin.edit_loker', compact('data'));
    }

    public function update_job(Request $request, $id)
    {
        $data = Lowongan::find($id);
        $data->pt=$request->pt;
        $data->posisi=$request->posisi;
        $data->syarat=$request->syarat;
        $gambar = $request->gambar;
        if ($gambar) {
            $gambarname = time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('loker', $gambarname);
            $data->gambar = $gambarname;
        }
        $data->save();
        return redirect('/view_loker');
    }

    public function pelamar()
    {
        $job=job::all();
        return view('admin.pelamar', compact('job'));
    }
}
