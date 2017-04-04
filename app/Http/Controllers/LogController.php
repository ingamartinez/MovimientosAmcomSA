<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Redirect;

class LogController extends Controller
{
    function __construct()
    {
        $this->middleware('guest',['except' => array('Logout')]);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']])) {
            return redirect()->intended('reportes');
        }



        return redirect()->back();
    }

    public function Logout()
    {

        if (Auth::check()) {
            Auth::logout();
        }

        return Redirect::to('login');
    }

}
