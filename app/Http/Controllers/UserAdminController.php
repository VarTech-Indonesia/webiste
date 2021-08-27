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
        $data['role']       = Role::orderBy('title')->get();
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
        // dd($request->file('image'));
        $rules = [
            'id_role'               => 'required',
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'image'                 => 'image|mimes:png,jpg,jpeg|max:1024',
            'password'              => 'required|confirmed',
        ];
        $messages = [
            'id_role.required'      => 'Role Name is Required',
            'name.required'         => 'Name is Required',
            'name.min'              => 'Name Min 3 charaters',
            'name.max'              => 'Name Max 35 charaters',
            'email.required'        => 'Email is Required',
            'email.email'           => 'Email not Valid',
            'email.unique'          => 'Email have been Registered',
            'image.image'           => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 1 Mb',
            'image.mimes'           => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 1 Mb',
            'image.max'             => 'Gambar Max. 1 Mb',
            'password.required'     => 'Password is Required',
            'password.confirmed'    => 'Password and Re-Type Password doesnt match'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = "";
        } else {
            // Ganti Nama Image
            $title          = strtolower(str_replace(' ', '-', $request->name));
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $title  . '-' . '.' . $getFileExt;
            // Upload Image
            $image->storeAs('public/images-user', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-user/' . $uploadedFile;
        }
        $query  = User::create([
            'id_role'       => $request->id_role,
            'name'          => $request->name,
            'email'         => $request->email,
            'image'         => $uploadedFile,
            'password'      => Hash::make($request->password),
            'status'        => $request->status
        ]);
        if ($query) {
            return redirect()->route('user-admin.index')->with('success', 'Data Successfully saved');
        } else {
            return redirect()->back()->with('error', 'Data Failed to Save, Pleast Contact Administrator');
        }
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
        $data = [
            'title'         => 'Edit User Admin | VarTech Indonesia',
            'title_table'   => 'Edit Data User Admin'
        ];
        $data['role']   = Role::orderBy('title')->get();
        $data['data']   = User::find($id);
        return view('admin.user.edit', $data);
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
            'email'                 => 'required|email|unique:users,email',
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
        $password   = Hash::make($request->password);
        $query      = User::whereId($request->id)->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $password
        ]);
        if ($query) {
            return response()->json(['success' => 'Data Berhasi Diubah']);
        } else {
            return response()->json(['errorssystem' => 'Data Gagal Diubah, Hubungi Admin']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query  = User::findOrFail($id)->delete();
        if ($query) {
            return redirect()->route('user-admin.index')->with('success', 'Data Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'Data Failed to Delete, Pleast Contact Administrator');
        }
    }
}
