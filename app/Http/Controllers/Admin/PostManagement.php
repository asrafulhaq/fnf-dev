<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\PostCat;
use App\Model\Post;

class PostManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::latest() -> get();
        return view('admin.post.index', [
            'all_posts'     => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_cat = PostCat::latest() -> get();
        return view('admin.post.create', [
            'all_cat'   => $all_cat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /**
         * Post validate 
         */
        $this -> validate($request, [
            'title'          => 'required',
            'post_content'          => 'required',

        ],[
            'title.required' => 'Post title is required ! ',
            'post_content.required' => 'Post content is required ! ',
        ]);

        /**
         * Post store 
         */

        if ( $request -> status == 'Published' ) {
            $status = 'Published';
        }else {
            $status = 'Unpublished';
        }

        if ( $request -> hasFile('post_image') ) {
            
           $img = $request -> file('post_image');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/blog'), $unique_name);

        }



        $post_obj = Post::create([
            'title'         => $request -> title,
            'slug'         => Str::slug($request -> title),
            'content'        => $request -> post_content,
            'featured_image'        => $unique_name,
            'status'        => $status,
        ]);


        




        return redirect() -> back() -> with('success', 'Post added successful !');


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
