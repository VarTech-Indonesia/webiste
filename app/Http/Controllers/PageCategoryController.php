<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\hash;

class PageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'         => 'Data Page Categories | VarTech Indonesia',
            'title_table'   => 'Data Page Categories'
        ];
        $data['data']   = PageCategory::orderByDesc('updated_at')->get();
        return view('admin.page_category.index', $data);
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
        $data['role']       = PageCategory::orderBy('title')->get();
        return view('admin.page_category.add', $data);
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
            'title'             => 'required|min:3|max:35'
        ];

        $messages = [
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 3 karakter',
            'title.max'         => 'Title Max. 35 karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $query = PageCategory::updateOrCreate([
            'title'     => $request->title,
            'status'    => $request->status,
        ]);
        if ($query) {
            return response()->json(['success'  => 'Page Category Saved Successfully']);
        } else {
            return response()->json(['error'    => 'Page Category Failed to Save']);
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
            'title'         => 'Add User Admin | VarTech Indonesia',
            'title_table'   => 'Add Data User Admin'
        ];
        $data['data']   = PageCategory::findOrFail($id)->first();
        return view('admin.page_category.edit');
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
        $password   = Hash::make($request->password);
        $query      = PageCategory::whereId($request->id)->update([
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
        $query  = PageCategory::findOrFail($id)->delete();
        if ($query) {
            return redirect()->route('user-page-category.index')->with('success', 'Data Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'Data Failed to Delete, Pleast Contact Administrator');
        }
    }
}
