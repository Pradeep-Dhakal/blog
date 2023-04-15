<?php

namespace App\Http\Controllers;

use App\Category;
use App\Blog;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $blogs=Blog::all();
        // return view('home', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
    
            // Validate the form input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        // Create a new blog post instance
        $blog = new Blog;
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['description'];
        $blog->category_id = $validatedData['category_id'];

        // Save the blog post to the database
        $blog->save();

        // Redirect to the blog post's page
        // return redirect()->back();
        return redirect()->route('home')->with('success', 'Blog created successfully!');

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
        $blog=Blog::find($id);
        // $categories=Category::all();
        $categories = Category::all();

        return view('blog.edit',compact('blog','categories'));
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
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);
    
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->category_id = $request->input('category_id');
        $blog->content = $request->input('content');
        $blog->save();
    
        return redirect()->route('home')->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
    
        return redirect()->route('blogs.index')
                         ->with('success','Blog deleted successfully');
    }
}
