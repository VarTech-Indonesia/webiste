<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageCategory;
use Illuminate\Support\Facades\Validator;

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
            'title'         => 'Create Data Page Categories | VarTech Indonesia',
            'title_table'   => 'Create Data Page Categories'
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
            'title'             => 'required|min:3|max:50|unique:page_categories,title',
            'status'            => 'required'
        ];
        $messages = [
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 3 karakter',
            'title.max'         => 'Title Max. 35 karakter',
            'title.unique'      => 'Title have been Registered',
            'status.required'   => 'Status Required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $query  = PageCategory::create([
            'id'        => $request->id_page_category,
            'title'     => $request->title,
            'status'    => $request->status
        ]);

        if ($query) {
            return response()->json(['success'  => 'Page Category Saved Successfully']);
        } else {
            return response()->json(['error'    => 'Page Category Saved Failed']);
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
        $data   = PageCategory::find($id);
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
            'title'             => 'required|min:3|max:50',
            'status'            => 'required'
        ];
        $messages = [
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 3 karakter',
            'title.max'         => 'Title Max. 35 karakter',
            'status.required'   => 'Status Required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $query  = PageCategory::whereId($request->id_page_category)->update([
            'title'     => $request->title,
            'status'    => $request->status
        ]);

        if ($query) {
            return response()->json(['success'  => 'Page Category Saved Successfully']);
        } else {
            return response()->json(['error'    => 'Page Category Saved Failed']);
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
            return response()->json(['success'  => 'Page Category Delete Successfully']);
        } else {
            return response()->json(['error'    => 'Page Category Delete Failed']);
        }
    }
}
