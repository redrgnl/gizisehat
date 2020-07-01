<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tb_penyakit;

class GuestController extends Controller
{
    public function index() {
        return view ('guest/index');
    }
    
    public function getPenyakit(Request $request){

      $search = $request->search;

      if($search == ''){
         $penyakits = DB::table('tb_penyakit')
             ->orderby('nama_penyakit','asc')
             ->select('nama_penyakit','deskripsi_penyakit','jenis_diet','anjuran_makanan','deskripsi_penyakit')
             ->limit(5)->get();
      }else{
         $penyakits = DB::table('tb_penyakit')
             ->orderby('nama_penyakit','asc')
             ->select('nama_penyakit','deskripsi_penyakit','jenis_diet','anjuran_makanan','larangan_makanan')
             ->where('nama_penyakit', 'like', '%' .$search . '%')
             ->limit(5)->get();
      }

      $response = array();
      $total_row = $penyakits->count();
        
      if($total_row > 0) {
         foreach($penyakits as $penyakit){
           $response[] = array(
             "value"=>$penyakit->nama_penyakit,
             "label"=>$penyakit->nama_penyakit,
             "deskp"=>$penyakit->deskripsi_penyakit,
             "jenisp"=>$penyakit->jenis_diet,
             "anjp"=>$penyakit->anjuran_makanan,
             "larp"=>$penyakit->larangan_makanan
           );
         }
      } else {
         $response[] = array(
             "value"=>"Penyakit Tidak Ditemukan",
             "label"=>"Penyakit Tidak Ditemukan",
             "deskp"=>"",
             "jenisp"=>"",
             "anjp"=>"",
             "larp"=>""
         );
      }

      echo json_encode($response);
      exit;
    }
    
    public function searchpenyakit(Request $request) {
        $search = $request->namapp;
        
        $query = DB::table('tb_penyakit')->where('nama_penyakit', $search)->get();
        $count = $query->count();
        
        
        if($count == 0){
            return redirect('/')->with('alert', '- Detail Penyakit Tidak Ditemukan !');
        } else {
            return redirect('/');
        }
    }
}
