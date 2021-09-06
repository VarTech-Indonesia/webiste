<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'         => 'Data Testimonial | VarTech Indonesia',
            'title_table'   => 'Data Testimonial'
        ];
        $data['data']           = Testimonial::orderByDesc('updated_at')->get();
        return view('admin.testimonial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'         => 'Add Data Testimonial | VarTech Indonesia',
            'title_table'   => 'Add Data Testimonial'
        ];
        return view('admin.testimonial.index', $data);
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
            'order_position'    => 'required',
            'title'             => 'required|min:5|max:255',
            'excerpt'           => 'required',
            'body'              => 'required',
            'customer'          => 'required',
            'position'          => 'required',
            'image'             => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'            => 'required',
            'icon'              => 'mimes:ico,icon,png,jpg,jpeg|max:1024',
        ];
        $messages = [
            'order_position.required'    => 'Order Position Required',
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 5 karakter',
            'title.max'         => 'Title Max. 255 karakter',

            'excerpt.required'  => 'Excerpt Required',
            'body.required'     => 'Body Required',
            'customer.required' => 'Customer Required',
            'position.required' => 'Customer Position Required',

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

        $slug       = strtolower(str_replace(' ', '-', $request->title));
        $seo_title  = "vartech-indonesia-" . $slug;

        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = "";
        } else {
            // Ganti Nama Image
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $slug . '-' . '.' . $getFileExt;
            // Upload Image
            $image->storeAs('public/images-testimonial', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-testimonial/' . $uploadedFile;
        }

        // Icon
        $icon       = $request->file('icon');
        if ($icon   == null) {
            $icon   = "";
        } else {
            // Ganti Nama Icon
            $getFileExtIcon = $icon->getClientOriginalExtension();
            $iconName       = $slug . '-' . '.' . $getFileExtIcon;
            // Upload Icon
            $icon->storeAs('public/images-testimonial/icons', $iconName);
            // Save Icon di DB
            $icon       = 'images-testimonial/icons/' . $iconName;
        }

        $query  = Testimonial::create([
            'id_author'         => Auth::user()->id,
            'slug'              => $slug,
            'seo_title'         => $seo_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,
            'order_position'    => $request->order_position,
            'title'             => $request->title,
            'excerpt'           => $request->excerpt,
            'body'              => $request->body,
            'customer'          => $request->customer,
            'position'          => $request->position,
            'image'             => $uploadedFile,
            'status'            => $request->status,
            'icon'              => $icon,
            'bg_color'          => $request->bg_color,
            'bg_hover_color'    => $request->bg_hover_color
        ]);

        if ($query) {
            return response()->json(['success'  => 'Testimonial Category Saved Successfully']);
        } else {
            return response()->json(['error'    => 'Testimonial Category Saved Failed']);
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
        $data   = Testimonial::find($id);
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
            'order_position'    => 'required',
            'title'             => 'required|min:5|max:255',
            'excerpt'           => 'required',
            'body'              => 'required',
            'customer'          => 'required',
            'position'          => 'required',
            'image'             => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'            => 'required',
            'icon'              => 'mimes:ico,icon,png,jpg,jpeg|max:1024',
        ];
        $messages = [
            'order_position.required'    => 'Order Position Required',
            'title.required'    => 'Title Required',
            'title.min'         => 'Title Min. 5 karakter',
            'title.max'         => 'Title Max. 255 karakter',
            'excerpt.required'  => 'Excerpt Required',
            'body.required'     => 'Body Required',
            'customer.required' => 'Customer Required',
            'position.required' => 'Customer Position Required',
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

        $slug       = strtolower(str_replace(' ', '-', $request->title));
        $seo_title  = "vartech-indonesia-" . $slug;

        // Image
        $image              = $request->file('image');
        if (($request->title != $request->title_hidden) && ($image != NULL)) {
            // Change Image Name
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $slug . '-' . '.' . $getFileExt;
            // Delete Old Image
            File::delete('storage/' . $request->image_hidden);
            // Upload New Image
            $image->storeAs('public/images-testimonial', $uploadedFile);
            // Save Image in DB
            $uploadedFile   = 'images-testimonial/' . $uploadedFile;
        } else if (($request->title != $request->title_hidden) && ($image == NULL)) {
            // Change Image Name
            $image          = $request->image_hidden;
            $getFileExt     = substr($image, strpos($image, ".") + 1);
            $uploadedFile   = $slug . '-' . '.' . $getFileExt;
            // Save Image in DB
            $uploadedFile   = 'images-testimonial/' . $uploadedFile;
            // Rename Image
            Storage::rename('public/' . $request->image_hidden, 'public/' . $uploadedFile);
        } else if (($request->title == $request->title_hidden) && ($image != NULL)) {
            // Change Image Name
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $slug . '-' . '.' . $getFileExt;
            // Delete Old Image
            File::delete('storage/' . $request->image_hidden);
            // Upload New Image
            $image->storeAs('public/images-testimonial', $uploadedFile);
            // Save Image in DB
            $uploadedFile   = 'images-testimonial/' . $uploadedFile;
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
            $iconName       = $slug . '-' . '.' . $getFileExtIcon;
            // Upload Icon
            $icon->storeAs('public/images-testimonial/icons', $iconName);
            // Save Icon di DB
            $icon       = 'images-testimonial/icons/' . $iconName;
        }

        $query  = Testimonial::whereId($id)->update([
            'id_author'         => Auth::user()->id,
            'slug'              => $slug,
            'seo_title'         => $seo_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,
            'order_position'    => $request->order_position,
            'title'             => $request->title,
            'excerpt'           => $request->excerpt,
            'body'              => $request->body,
            'customer'          => $request->customer,
            'position'          => $request->position,
            'image'             => $uploadedFile,
            'status'            => $request->status,
            'icon'              => $icon,
            'bg_color'          => $request->bg_color,
            'bg_hover_color'    => $request->bg_hover_color
        ]);

        if ($query) {
            return response()->json(['success'  => 'Testimonial Saved Successfully']);
        } else {
            return response()->json(['error'    => 'Testimonial Saved Failed']);
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
        $find  = Testimonial::find($id);
        File::delete('storage/' . $find->image);
        File::delete('storage/' . $find->icon);
        if (Testimonial::where('id', $find->id)->delete()) {
            return response()->json(['success'  => 'Testimonial Delete Successfully']);
        } else {
            return response()->json(['error'    => 'Testimonial Delete Failed']);
        }
    }
}
