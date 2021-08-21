<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Home Admin | VarTech Indonesia'
        ];
        return view('admin.layout.index', $data);
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin-home');
        }
        $data = [
            'title' => 'Login Admin | VarTech Indonesia'
        ];
        return view('admin.login.index', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $remember   = $request->has('remember') ? true : false;

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'status' => 'Active'], $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/home');
        } else {
            Session::flash('error', 'Gagal Login, Hubungi Admin');
            return redirect()->route('admin-login');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.login.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];

        $messages = [
            'name.required'         => 'Nama Lengkap Wajib Diisi',
            'name.min'              => 'Nama Lengkap Minimal 3 karakter',
            'name.max'              => 'Nama Lengkap Maksimal 35 karakter',
            'email.required'        => 'Email Wajib Diisi',
            'email.email'           => 'Email Tidak valid',
            'email.unique'          => 'Email Sudah terdaftar',
            'password.required'     => 'Password Wajib Diisi',
            'password.confirmed'    => 'Password Tidak Sama'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user               = new User;
        $user->name         = ucwords(strtolower($request->name));
        $user->email        = strtolower($request->email);
        $user->password     = Hash::make($request->password);
        $user->email_verified_at    = Carbon::now();
        $simpan = $user->save();

        if ($simpan) {
            Session::flash('success', 'Register Berhasil, Silahkan Login');
            return redirect()->route('admin-login');
        } else {
            Session::flash('error', 'Register Gagal, Hubungi Admin');
            return redirect()->route('admin-register-create');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin-login');
    }
}
