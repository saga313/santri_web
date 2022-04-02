<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
  function ajax_list()
  {
    $list = Santri::all();
    $data = array();
    $no = $_POST['start'];
    // $no = 1;
    foreach ($list as $item) {
        $no++;
        $row = array();
        $row[] = $item->id;
        $row[] = $item->nama;
        $row[] = $item->jk;
        $row[] = $item->tempat.','.$item->tgllahir;
        $row[] = $item->handphone;
        $row[] = $item->email;
        $row[] = $item->alamat;
        /*
        $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_purchase('."'".$item->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
              <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_purchase('."'".$item->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';*/
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
      $countAll = Santri::count();
      return $countAll;        
  }

  function count_filtered()
  {
      $countFiltered = Santri::all()->count();
      return $countFiltered;      
  }
}
