<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use App\Models\Account;
use App\Models\Info_Account;

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
        if (Session::has('username')) {
            $showall = Account::all();
            return view('showUser', compact('showall'));
        } else if (Cookie::has('username')) {
            $showall = Account::all();
            return view('showUser', compact('showall'));
        } else {
            return view('login');
        }
    }

    public function handleLogin(Request $request)
    {
        $checkPass = DB::table('account')->where('username', $request->username)->get();
        if ($checkPass[0]->password === md5($request->psw)) {
            $showall = Account::all();
            Session::put('username', $request->username);
            Cookie::queue('username', $request->username);
            return view('showUser', compact('showall'));
        } else {
            return 'Sai pass r b ơiii';
        }
    }

    public function logout()
    {
        Session::flush();
        Cookie::expire('username');
        return redirect(route('login'));
        // $data = Session::all();
        // $data1 = Cookie::get('username');
        // // //dd($data);
        // dd($data);
    }

    public function changePassword($id)
    {
        $id = $id;
        return view('account.changePassword', compact('id'));
    }

    public function handleChangePsw(Request $request)
    {
        # code...
        $item = Account::find($request->id);
        if ($item->password === md5($request['psw']) && $request['new-psw'] === $request['new-psw-repeat']) {
            $item->password = md5($request['new-psw']);
            $item->save();
            return redirect(route('showUser'));
        } else {
            return 'Sai pass r b ơiii';
        }
    }

    public function edit($id)
    {
        $id = $id;
        // if (($item = Info_Account::find($id)) != null) {
        //     $name = $item->name;
        //     $age = $item->age;
        //     $address = $item->address;
        // }
        if (($item = Info_Account::find($id)) != null) {
            return view('account.edit', compact('item'));
        } else {
            $account = Info_Account::create([
                'id' => $id,
                'name' => null,
                'age' => null,
                'address' => null
            ]);
            $item = Info_Account::find($id);
            return view('account.edit', compact('item'));
        }
    }

    public function handleEdit(Request $request)
    {
        # code...
        if (($item = Info_Account::find($request->id)) != null) {
            $item->name = $request->name;
            $item->age = $request->age;
            $item->address = $request->address;
            $item->save();
        } else {
            $account = Info_Account::create([
                'id' => $request->id,
                'name' => $request->name,
                'age' => $request->age,
                'address' => $request->address
            ]);
        }
        return redirect(route('showUser'));
    }

    public function delete($id)
    {
        $result1 = Info_Account::where('id', $id)->delete();
        $result2 = Account::where('id', $id)->delete();
        return redirect()->back();
    }
}
