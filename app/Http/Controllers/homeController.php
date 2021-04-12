<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category; 

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $req)
    {
        $key = $req->input('key');

        $category = Category::orderBy('id','DESC')->get();
        $post_query = Post::query();
        $post = $post_query->paginate(4);
        $post_new = $post_query->limit(4)->latest()->get();
        $post_view = Post::orderBy('views','DESC')->limit(4)->get();
        $post_random = Post::inRandomOrder()->where('views','>',900)->first();
        if ($key) {
           $post_query->where('title','like',"%{$key}%");
           $post = $post_query->paginate(4);
            return view('pages.home',compact('category','post','post_new','post_view','post_random'));
        }

        return view('pages.home',compact('category','post','post_new','post_view','post_random'));
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
}
