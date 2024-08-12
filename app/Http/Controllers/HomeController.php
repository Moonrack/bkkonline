<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\User;
use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $total_user=user::all()->count();
        $total_job=job::all()->count();
        $total_lowongan=lowongan::all()->count();
        $job=job::all();
        return view('admin.userpage', compact('total_user', 'total_job', 'total_lowongan', 'job'));
    }
    public function home()
    {
        $lowongan = Lowongan::all();
        return view('home.index', compact('lowongan'));
    }
    public function login_home()
    {
        $lowongan = Lowongan::all();
        return view('home.index', compact('lowongan'));
    }

    public function job_details($id)
    {
        $data = Lowongan::find($id);
        return view('home.job_details', compact('data'));
    }

    public function update_profile(Request $request): View
    {
        return view('home.profile', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request)
    {
        

        $data = User::find(Auth::user()->id);
        $data->name=$request->name;
        $data->nik=$request->nik;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->tl=$request->tl;
        $data->lahir=$request->lahir;
        $data->tb=$request->tb;
        $data->bb=$request->bb;
        $data->lulus=$request->lulus;
        $data->jurusan=$request->jurusan;
        $data->phone=$request->phone;
        $data->jk=$request->jk;

        $data->save();

        return redirect('/');
    }

    public function add_job(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $lowongan=lowongan::find($id);
            $job=new Job;
            $job->name=$user->name;
            $job->email=$user->email;
            $job->phone=$user->phone;
            $job->lulus=$user->lulus;
            $job->jurusan=$user->jurusan;
            $job->sekolah=$user->sekolah;
            $job->user_id=$user->id;
            $job->job_id=$lowongan->id;
            $job->pt=$lowongan->pt;
            $job->save();
            sweetalert()->success('Terimakasih Sudah Mendaftar');
            return redirect()->back();
        }
        else 
        {
            return redirect()->back();
        }
    }

}
