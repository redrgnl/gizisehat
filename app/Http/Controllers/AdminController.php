<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    public function index() {
        $data = [
            'title' => "Dashboard Admin | Gizi Sehat",
            'breadcrumb' => "Dashboard Admin",
            'jumlahpenyakit' => DB::table('tb_penyakit')->count()
        ];
        
        return view ('admin/content/dashboard', $data);
    }
    
    // ============== Manajemen Penyakit ================= //
    
    public function penyakit() {
        $data = [
            'title' => "Manajemen Penyakit | Gizi Sehat",
            'breadcrumb' => "Daftar Data Penyakit",
            'penyakit' => DB::table('tb_penyakit')->get()
        ];
        
        return view ('admin/content/penyakit', $data);
    }
    
    public function tambahpenyakit() {
        $data = [
            'title' => "Tambah Data Penyakit | Gizi Sehat",
            'breadcrumb' => "Tambah Data"
        ];
        
        return view ('admin/content/addpenyakit', $data);
    }
    
    public function addpenyakit(Request $insert) {
        $messages = [
            'required' => 'Kolom Harus Diisi *',
            'max' => 'Karakter Maksimal Yang Boleh Di Masukkan *'
        ];
        $this->validate($insert, [
            'namapenyakit' => 'required|max:100',
            'deskripsipenyakit' => 'required',
            'jenisdiet' => 'required',
            'anjuran' => 'required',
            'larangan' => 'required'
        ], $messages);
        
        DB::table('tb_penyakit')->insert([
            'nama_penyakit' => $insert->namapenyakit,
            'deskripsi_penyakit' => $insert->deskripsipenyakit,
            'jenis_diet' => $insert->jenisdiet,
            'anjuran_makanan' => $insert->anjuran,
            'larangan_makanan' => $insert->larangan
        ]);
        
        return redirect ('/admin/halaman-manajemen-penyakit');
    }
    
    public function editpenyakit($id) {
        $data = [
            'title' => "Update Data Penyakit | Gizi Sehat",
            'breadcrumb' => "Update Data",
            'penyakit' => DB::table('tb_penyakit')->where('id_penyakit', $id)->get()
        ];
        
        return view ('admin/content/editpenyakit', $data);
    }
    
    public function updatepenyakit(Request $update) {
        $messages = [
            'required' => 'Kolom Harus Diisi *',
            'max' => 'Karakter Maksimal Yang Boleh Di Masukkan *'
        ];
        $this->validate($update, [
            'namapenyakit' => 'required|max:100',
            'deskripsipenyakit' => 'required',
            'jenisdiet' => 'required',
            'anjuran' => 'required',
            'larangan' => 'required'
        ], $messages);
        
        DB::table('tb_penyakit')->where('id_penyakit', $update->idpenyakit)->update([
            'nama_penyakit' => $update->namapenyakit,
            'deskripsi_penyakit' => $update->deskripsipenyakit,
            'jenis_diet' => $update->jenisdiet,
            'anjuran_makanan' => $update->anjuran,
            'larangan_makanan' => $update->larangan
        ]);
        
        return redirect ('/admin/halaman-manajemen-penyakit');
    }
    
    public function deletepenyakit($id) {
        DB::table('tb_penyakit')->where('id_penyakit', $id)->delete();
        
        return redirect ('/admin/halaman-manajemen-penyakit');
    }
    
    //============== LOGIN ================//
    
    public function login(Request $request) {
        if ($request->session()->exists('login')) {
            // user value cannot be found in session
            return redirect('/admin/halaman-dashboard');
        }
        
        return view('admin/login');
    }
    
    public function postLogin(Request $request) {
        $messages = [
            'required' => 'Kolom Harus Diisi *',
            'max' => 'Karakter Maksimal Yang Boleh Di Masukkan *'
        ];
        $this->validate($request, [
            'inpusername' => 'required|max:100',
            'inppassword' => 'required|max:100'
        ], $messages);
        
        $user = DB::table('tb_admin')->where('username', $request->inpusername)
            ->where('password', $request->inppassword)
            ->first();
        if (!empty($user)) {
            Session::put('iduser', $user->id_admin);
            Session::put('username', $user->username);
            Session::put('login', TRUE);
            return redirect('admin/halaman-dashboard');
        } else {
            return redirect('login-backoffice');
        }
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
