<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Model\PostCat;

class PostCatManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = PostCat::latest() -> get();
        return view('admin.post.category.index', [
            'all_cat'       =>  $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this -> validate($request, [
            'name'          => 'required',
        ],[
            'name.required' => 'Post category title is required ! '
        ]);

        if ( $request -> status == 'Published' ) {
            $status = 'Published';
        }else {
            $status = 'Unpublished';
        }

        PostCat::create([
            'name'      => $request -> name,
            'slug'      => Str::slug($request -> name),
            'status'    =>  $status,
        ]);

        return redirect() -> route('post-category.index') -> with('success', 'Category added successful ');

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

        $data = PostCat::findOrFail($id);
        return view('admin.post.category.edit', [
            'edit_cat'  => $data
        ]);
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
        
        // Validations 
        $this -> validate($request, [
            'name'          => 'required',
        ],[
            'name.required' => 'Post category title is required ! '
        ]);



        // Status manage 
        if ( $request -> status == 'Published' ) {
            $status = 'Published';
        }else {
            $status = 'Unpublished';
        }


        $data = PostCat::find($id);
        $data -> name = $request -> name;
        $data -> slug = Str::slug($request -> name);
        $data -> status = $status;
        $data -> update();


        return redirect() -> route('post-category.index') -> with('success', 'Category added successful ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PostCat::findOrFail($id);
        $data -> delete();


        return redirect() -> route('post-category.index') -> with('success', 'Category deleted successful ');
    }
}
