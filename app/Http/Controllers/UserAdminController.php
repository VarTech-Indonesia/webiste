<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Storage;

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
    public function update(Request $request, $id)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email',
        ];
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
        ];

        $validator  = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user       = User::find($id);
        if (($request->email) != ($user->email)) {
            if (User::where('email', $request->email)->exists()) {
                return redirect()->back()->with('error', 'Email sudah terdaftar');
            } else {
                $newEmail   = $request->email;
            }
        } else {
            $newEmail       = $request->email;
        }

        if (($request->password) != "") {
            if (($request->password) != ($request->password_confirmation)) {
                return redirect()->back()->with('error', 'Password tidak sama dengan Re-Type Password');
            } else {
                $newPassword    = Hash::make($request->password);
            }
        }

        if ((($request->password) && ($request->password_confirmation)) != "") {
            if (($request->password) != ($request->password_confirmation)) {
                return redirect()->back()->with('error', 'Password tidak sama dengan Re-Type Password');
            } else {
                $newPassword    = Hash::make($request->password);
            }
        } else {
            $newPassword    = $request->image_hidden;
        }

        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = $request->image_hidden;
        } else {
            // Ganti Nama Image
            $title          = strtolower(str_replace(' ', '-', $request->name));
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $title  . '-' . '.' . $getFileExt;
            // Delete Image
            Storage::delete('public/' . $request->image_hidden);
            // Upload Image
            $image->storeAs('public/images-user', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-user/' . $uploadedFile;
        }


        $query  = User::where('id', $id)->update([
            'id_role'           => $request->id_role,
            'name'              => $request->name,
            'email'             => $newEmail,
            'password'          => $newPassword,
            'status'            => $request->status,
            'image'             => $uploadedFile
        ]);
        if ($query) {
            return redirect()->route('user-admin.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
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
