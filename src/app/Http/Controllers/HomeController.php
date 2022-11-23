<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Account;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function signUp(Request $request)
    {
        if (md5($request['psw']) === md5($request['psw-repeat'])) {
            $acount = Account::create([
                'username' => $request->username,
                'password' => md5($request->psw)
            ]);
        } else {
            return 'Vui lòng nhập lại mật khẩu';
        }

        $showall = Account::all();

        return view('showUser', compact('showall'));
    }

    public function showUser()
    {
        $showall = Account::all();
        return view('showUser', compact('showall'));
    }

    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        // $users = DB::table('account')
        //     ->select('username', 'password')
        //     ->where(
        //         ['username', '=', $request->username],
        //         ['password', '=', md5($request->pws)],
        //     )
        //     ->get();

        // if ($users != null) {
        //     $showall = Account::all();
        //     return view('showUser', compact('showall'));
        // } else {
        //     return ('Đăng nhập lại đi b eii');
        // }

        $checkPass = DB::table('account')->where('username', $request->username)->get();
        if ($checkPass[0]->password === md5($request->psw)) {
            $showall = Account::all();
            return view('showUser', compact('showall'));
        } else {
            return 'Sai pass r b ơiii';
        }
    }
}
