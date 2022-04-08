<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function index (){

        return view ('admin/admin');
    }

    public function santri(){

        return view ('admin/santri');
    }

    public function login(){

        return view ('admin/login');
    }

    public function store(Request $request) {
        $password = $request->input('password');
        $encryptPwd = Hash::make($password);
        print($encryptPwd);die;
    }

    public function auth(Request $request)
    {
      $response = array(
          'status' => 500,
          'status_desc'=> 'error',
          'message' => '',
          'is_valid' => false,

      );

      try {
        $email      = $request->input('email');
        $password   = $request->input('password');
        /*
        $user = User::where('email','=',$email)->first();
        */
        if(Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            $response['status'] = 200;
            $response['status_desc'] = 'success';
            $response['is_valid'] = true;
            unset($response['message']);
        }else{
          $response['status'] = 401;
          $response['status_desc'] = 'Bad request';
          $response['is_valid'] = false;
          unset($response['message']);            
        }    

      } catch (\Exception $e) {
        $response['status'] = 500;
        $response['message'] = $e->getMessage();
      }

        return response()->json($response);               
    }
}
