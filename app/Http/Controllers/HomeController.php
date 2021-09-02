<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Page;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = [
            'title' =>  'VarTech Indonesia'
        ];

        $data['layanan']   =
            Post::whereHas('PostCategory', function ($query) {
                return $query->where('status', 'Active')->where('title', 'Layanan Kami');
            })->where('status', 'Published')->orderBy('order_position')->get();

        $data['portofolio']     =
            Post::whereHas('PostCategory', function ($query) {
                return $query->where('status', 'Active')->where('title', 'Portofolio');
            })->where('status', 'Published')->get();

        $data['testimonial']    = Testimonial::where('status', 'Published')->orderBy('order_position')->get();

        $data['data']           =
            Page::whereHas('PageCategory', function ($query) {
                return $query->where('status', 'Active')->where('title', 'Tentang Kami');
            })->where('status', 'Published')->first();

        return view('index', $data);
    }
    public function page($slug)
    {
        // dd($slug);
        $data   = [
            'title' =>  $slug
        ];
        $data['data']   =
            Page::where('slug', $slug)->first();
        return view('page', $data);
        // $data['layanan']   =
        //     Post::whereHas('PostCategory', function ($query) {
        //         return $query->where('status', 'Active')->where('title', 'Layanan');
        //     })->where('status', 'Published')->orderBy('order_position')->get();

        // $data['portofolio']   =
        //     Page::whereHas('PageCategory', function ($query) {
        //         return $query->where('status', 'Active')->where('title', 'Portofolio');
        //     })->where('status', 'Published')->get();

        // $data['testimoni']   =
        //     Page::whereHas('PageCategory', function ($query) {
        //         return $query->where('status', 'Active')->where('title', 'Testimoni');
        //     })->where('status', 'Published')->get();

        // return view('index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
