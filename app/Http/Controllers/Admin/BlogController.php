<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create', ['message' => '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->validadeForm($request))
        {
            $post = Post::create([
                'name' => $request->input('name'),
                'short_description' => $request->input('short_description'),
                'content_text' => '',
                'img' => '',
                'department_id' => 1
            ]);
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return view('admin.blog.create', ['message' => 'Campos não preenchidos!']);
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
        return view('admin.blog.edit', ['post' => Post::find($id), 'message' => '']);
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

        $post = Post::find($id); 

        if ($this->validadeForm($request))
        {
            $post->name = $request->input('name');
            $post->short_description = $request->input('short_description');
            $post->content_text = '';
            $post->img = '';
            $post->department_id = 1;
            $post->save();

            return redirect()->route('admin.blog.index');
        }
        else
        {
            return view('admin.blog.edit', ['post' => $post, 'message' => 'Campos não preenchidos!']);
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
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.blog.index');
    }

    // TODO: validade other fields 
    private function validadeForm($request) : bool
    {
        return isset($request->name) && isset($request->short_description);
    }
}
