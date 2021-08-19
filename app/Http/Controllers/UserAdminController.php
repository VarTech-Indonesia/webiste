<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'         => 'Data User Admin | VarTech Indonesia',
            'title_table'   => 'Data User Admin'
        ];
        $data['data']   = User::with('role')->orderByDesc('updated_at')->get();
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'         => 'Add User Admin | VarTech Indonesia',
            'title_table'   => 'Add Data User Admin'
        ];
        $data['role']   = Role::orderByDesc('title')->get();
        return view('admin.user.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        #dd($id);
        $data = User::where('id', $id)->first();
        #return view('admin.user.edit', compact($data));
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email',
            'password'              => 'required|confirmed'
        ];

        $messages = [
            'name.required'         => 'Nama Lengkap Wajib Diisi',
            'name.min'              => 'Nama Lengkap Minimal 3 karakter',
            'name.max'              => 'Nama Lengkap Maksimal 35 karakter',

            'email.required'        => 'Email Wajib Diisi',
            'email.email'           => 'Email Tidak valid',

            'password.required'     => 'Password Wajib Diisi',
            'password.confirmed'    => 'Password Tidak Sama'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // 
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        // $user               = new User;
        // $user->name         = ucwords(strtolower($request->name));
        // $user->email        = strtolower($request->email);
        // $user->password     = Hash::make($request->password);
        // $user->email_verified_at    = \Carbon\Carbon::now();
        // $simpan = $user->save();

        // if ($simpan) {
        //     Session::flash('success', 'Register Berhasil, Silahkan Login');
        //     return redirect()->route('admin-login');
        // } else {
        //     Session::flash('errors', ['' => 'Register Gagal, Hubungi Admin']);
        //     return redirect()->route('admin-register-create');
        // }

        // $request->validate([
        //     'nama'                  => 'required|max:255',
        //     'email'                 => 'required|email',
        //     'password'              => 'required|confirmed',
        // ]);
        $password = Hash::make($request->password);
        $user = User::whereId($request->id)->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $password
        ]);
        if ($user) {
            return response()->json(['success' => 'Data Berhasi Diubah']);
        } else {
            return response()->json(['errorssystem' => 'Data Gagal Diubah, Hubungi Admin']);
        }
        // return response()->json(
        //     [
        //         'success' => true,
        //         'message' => 'Data inserted successfully',
        //         200
        //     ]
        // );
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
}
