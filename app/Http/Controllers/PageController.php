<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'         => 'Data Page | VarTech Indonesia',
            'title_table'   => 'Data Page'
        ];
        $data['page_category']  = PageCategory::where('status', 'Active')->orderBy('title')->get();
        $data['data']           = Page::with('PageCategory', 'User')->orderByDesc('updated_at')->get();
        return view('admin.page.index', $data);
    }

    public function page_slug(Request $request)
    {
        $slug   = SlugService::createSlug(Page::class, 'slug', $request->title);
        return response()->json(['slug' => $slug, 'meta_keywords' => $request->title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'         => 'Add Data Page | VarTech Indonesia',
            'title_table'   => 'Add Data Page'
        ];
        $data['page_category']  = PageCategory::where('status', 'Active')->orderBy('title')->get();
        return view('admin.page.index', $data);
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
            'title'             => 'required|min:5|max:255',
            'slug'              => 'required|min:5|max:255|unique:Pages,slug',
            'excerpt'           => 'required',
            'body'              => 'required',
            'image'             => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'            => 'required',
            'icon'              => 'mimes:ico,icon,png,jpg,jpeg|max:1024',
        ];
        $messages = [
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 5 karakter',
            'title.max'         => 'Title Max. 255 karakter',
            'slug.unique'       => 'Slug Have Been Registered',

            'excerpt.required'  => 'Excerpt Required',
            'body.required'     => 'Body Required',

            'image.image'       => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.mimes'       => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.max'         => 'Gambar Max. 10 Mb',

            'status.required'   => 'Status Required',

            'icon.image'        => 'Icon Wajib  di Isi dengan Image Format : Ico, Icon, JPEG, JPG, PNG Max. 1 Mb',
            'icon.mimes'        => 'Icon Wajib  dengan Format : Ico, Icon, JPEG, JPG, PNG Max. 1 Mb',
            'icon.max'          => 'Icon Max. 1 Mb',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $seo_title          = "vartech-indonesia-" . $request->slug;

        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = "";
        } else {
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $request->slug . '-' . '.' . $getFileExt;
            $image->storeAs('public/images-page', $uploadedFile);
            $uploadedFile   = 'images-page/' . $uploadedFile;
        }

        // Icon
        $icon       = $request->file('icon');
        if ($icon   == null) {
            $icon   = "";
        } else {
            $getFileExtIcon = $icon->getClientOriginalExtension();
            $iconName       = $request->slug . '-' . '.' . $getFileExtIcon;
            $icon->storeAs('public/images-page/icons', $iconName);
            $icon           = 'images-page/icons/' . $iconName;
        }


        $query  = Page::create([
            'id_page_category'  => $request->id_page_category,
            'id_author'         => Auth::user()->id,
            'slug'              => $request->slug,
            'seo_title'         => $seo_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,
            'title'             => $request->title,
            'excerpt'           => $request->excerpt,
            'body'              => $request->body,
            'image'             => $uploadedFile,
            'status'            => $request->status,
            'icon'              => $icon,
            'bg_color'          => $request->bg_color,
            'bg_hover_color'    => $request->bg_hover_color
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
        $data   = Page::find($id);
        return response()->json($data);
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
            'title'             => 'required|min:5|max:255',
            'excerpt'           => 'required',
            'body'              => 'required',
            'image'             => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'            => 'required',
            'icon'              => 'mimes:ico,icon,png,jpg,jpeg|max:1024',
        ];
        $messages = [
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 5 karakter',
            'title.max'         => 'Title Max. 255 karakter',

            'excerpt.required'  => 'Excerpt Required',
            'body.required'     => 'Body Required',

            'image.image'       => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.mimes'       => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.max'         => 'Gambar Max. 10 Mb',

            'status.required'   => 'Status Required',

            'icon.image'        => 'Icon Wajib  di Isi dengan Image Format : Ico, Icon, JPEG, JPG, PNG Max. 1 Mb',
            'icon.mimes'        => 'Icon Wajib  dengan Format : Ico, Icon, JPEG, JPG, PNG Max. 1 Mb',
            'icon.max'          => 'Icon Max. 1 Mb',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $seo_title          = "vartech-indonesia-" . $request->slug;

        // Image
        $image              = $request->file('image');
        if (($request->title != $request->title_hidden) && ($image != NULL)) { // Title diganti dan gambar di ganti
            // Change Image Name
            $getFileExt     = $image->getClientOriginalExtension();
            $uploadedFile   = $request->slug . '-' . '.' . $getFileExt;
            // Delete Old Image
            File::delete('storage/' . $request->image_hidden);
            // Upload New Image
            $image->storeAs('public/images-page', $uploadedFile);
            // Save Image in DB
            $uploadedFile   = 'images-page/' . $uploadedFile;
        } else if (($request->title != $request->title_hidden) && ($image == NULL) && ($request->image_hidden != NULL)) { // Title diganti dan gambar tidak diganti
            // Change Image Name
            $image          = $request->image_hidden;
            $getFileExt     = substr($image, strpos($image, ".") + 1);
            $uploadedFile   = $request->slug . '-' . '.' . $getFileExt;
            // Save Image in DB
            $uploadedFile   = 'images-page/' . $uploadedFile;
            // Rename Image
            Storage::rename('public/' . $request->image_hidden, 'public/' . $uploadedFile);
        } else if (($request->title == $request->title_hidden) && ($image != NULL)) { // Title tidak diganti dan gambar diganti
            // Change Image Name
            $getFileExt     = $image->getClientOriginalExtension();
            $uploadedFile   = $request->slug . '-' . '.' . $getFileExt;
            // Delete Old Image
            File::delete('storage/' . $request->image_hidden);
            // Upload New Image
            $image->storeAs('public/images-page', $uploadedFile);
            // Save Image in DB
            $uploadedFile   = 'images-page/' . $uploadedFile;
        } else {
            $uploadedFile   = $request->image_hidden;
        }

        // Icon
        $icon       = $request->file('icon');
        if ($icon   == null) {
            $icon   = $request->icon_hidden;
        } else {
            // Delete Old Icon
            File::delete('storage/' . $request->icon_hidden);
            // Ganti Nama Icon
            $getFileExtIcon = $icon->getClientOriginalExtension();
            $iconName       = $request->slug . '-' . '.' . $getFileExtIcon;
            // Upload Icon
            $icon->storeAs('public/images-page/icons', $iconName);
            // Save Icon di DB
            $icon       = 'images-page/icons/' . $iconName;
        }

        $query  = Page::whereId($id)->update([
            'id_page_category'  => $request->id_page_category,
            'id_author'         => Auth::user()->id,
            'slug'              => $request->slug,
            'seo_title'         => $seo_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,
            'title'             => $request->title,
            'excerpt'           => $request->excerpt,
            'body'              => $request->body,
            'image'             => $uploadedFile,
            'status'            => $request->status,
            'icon'              => $icon,
            'bg_color'          => $request->bg_color,
            'bg_hover_color'    => $request->bg_hover_color
        ]);

        if ($query) {
            return response()->json(['success'  => 'Page Saved Successfully']);
        } else {
            return response()->json(['error'    => 'Page Saved Failed']);
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
        $find  = Page::find($id);
        File::delete('storage/' . $find->image);
        File::delete('storage/' . $find->icon);
        if (Page::where('id', $find->id)->delete()) {
            return response()->json(['success'  => 'Page Delete Successfully']);
        } else {
            return response()->json(['error'    => 'Page Delete Failed']);
        }
    }
}
