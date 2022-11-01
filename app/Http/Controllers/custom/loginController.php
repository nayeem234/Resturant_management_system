<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{


    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {


        $data = $request->only(['email', 'password']);
        if (($data)) {
            return redirect()->intended('/backend');
        }
        return redirect()->to('/login');
    }
    public function logout()
    {
        return  'logout successfully';
    }
}
