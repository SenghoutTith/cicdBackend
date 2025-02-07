<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        // return view and pass in the variable
        return view('blog-page', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        return $request;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'required',
        ]);

        // save to database Blog
        Blog::create($data);

        // return status 200, message success, and data
        return response()->json([
            'status' => 200,
            'message' => 'Blog created successfully',
            'data' => $data
        ]);
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // get all blogs
    public function getBlogs()
    {
        $blogs = Blog::all();

        return response()->json($blogs);
    }
}
