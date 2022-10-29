<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaliSantri;
use App\Models\Santri;

class WaliSantriController extends Controller
{
	function ajax_list()
  {
    $list = WaliSantri::select(
            "wali_santri.*", 
            "santri.nama as nama_santri")
    				->leftJoin("santri", "santri.id", "=", "wali_santri.santri_id")
          	->get();
    $data = array();
    $no = $_POST['start'];
    // $no = 1;
    foreach ($list as $item) {
        $no++;
        $row = array();
        $row[] = $item->id;
        $row[] = $item->nama_santri;
        $row[] = $item->nama_wali;
        $row[] = $item->handphone;
        $row[] = $item->email;
        $row[] = $item->alamat;
        
        $row[] = '<a class="btn btn-outline-primary btn-sm" href="javascript:void(0)" title="Edit" onclick="edit('."'".$item->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>        
          <a class="btn btn-outline-danger btn-sm" href="javascript:void(0)" title="Hapus" onclick="delete_by_id('."'".$item->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete
          </a>';
        $data[] = $row;
    }

    $output = array(
      "draw" => intval($_POST['draw']),
      "recordsTotal" => intval($this->count_all()),
      "recordsFiltered" => intval($this->count_filtered()),
      "data" => $data,
    );
    //output to json format
    // echo json_encode($output);
    return response()->json($output);
  }

  function count_all()
  {
      $countAll = WaliSantri::select(
            "wali_santri.*", 
            "santri.nama as nama_santri")
    				->leftJoin("santri", "santri.id", "=", "wali_santri.santri_id")
          	->count();
      return $countAll;      
  }

  function count_filtered()
  {
      $countFiltered = WaliSantri::all()->count();
      return $countFiltered;
  }

  function santri_select(Request $request)
  {
    if ($request->has('term')) {
      $key = $request->term;
      $data = Santri::select('id', 'nama')->where('nama', 'LIKE', '%'.$key.'%')
				->orWhere('id', 'LIKE', '%'.$key.'%')
      	->get();

      $response = array();
      foreach($data as $d){
         $response[] = array("value"=>$d->id,"label"=>$d->id." - ".$d->nama);
      }

      return response()->json($response);
    }
  }

}
