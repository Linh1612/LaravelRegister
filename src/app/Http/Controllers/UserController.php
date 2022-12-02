<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function showProfile(Request $request, $id)
    {
        $value = $request->session()->get('key', 'default');

        $value = $request->session()->get('key', function () {
            return 'default';
        });
        if ($request->session()->has('users')) {
            //
            $data = $request->session()->all();
        }
    }

    public function getSession()
    {
        //$data = Session::get('username');
        $data = Session::all();
        dd($data);
        // if (Session::has('username')) {
        //     $data = Session::get('username');
        //     dd($data);
        // }
    }

    public function setSession()
    {
        Session::put('username', 'linh');
        Session::put('password', '123456');
        Session::flash('status', 'Task was successful!');
        // Session::pull('user.teams', 'Linhphan');
        // Session::pull('key', 'default');
    }

    public function unsetSession()
    {
        //Xóa tất cả session hiện tại
        Session::flush();

        //Xóa session chỉ định
        // Session::forget('username');
    }

    public function yeuHai()
    {
        # code...
        return 'Sang yeu Hai vai o`';
    }
}
