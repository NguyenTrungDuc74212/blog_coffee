<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id','DESC')->get();
        return view('admin.show_post',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.add_post',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->short_desc = $request->input('short_desc');
        $post->desc = $request->input('desc');
        $post->category_id = $request->input('category_id');
        /*xử lý image*/
        $file = $request->file('image');
        $name_offical = $file->getClientOriginalName();
        $name_jpg = explode(".", $name_offical);
        $file_name =$name_jpg[0].rand(0,99).".".$file->getClientOriginalExtension();
        $url = $file->move('public/upload/post',$file_name);
        $post->image = $file_name;
        /**/
        $post->save();
        return redirect()->route('post.index')->with('thanhcong','Thêm thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $category = Category::all();
        return view('admin.edit_post',compact('post','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->short_desc = $request->input('short_desc');
        $post->desc = $request->input('desc');
        $post->category_id = $request->input('category_id');
        /*xử lý image*/
        if ($request->file('image')) {
            $file = $request->file('image');
            $name_offical = $file->getClientOriginalName();
            $name_jpg = explode(".", $name_offical);
            $file_name =$name_jpg[0].rand(0,99).".".$file->getClientOriginalExtension();
            $url = $file->move('public/upload/post',$file_name);
            $post->image = $file_name;
        }
        else{
            $post->image = $request->input('image_old');
        }
        /**/
        $post->save();
        return redirect()->route('post.index')->with('thanhcong','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('thanhcong','Thêm thành công');
    }
}
