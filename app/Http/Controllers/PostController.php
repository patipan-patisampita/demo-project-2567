<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // This method will show posts page
    public function index() {}

    // This method will show create post page
    public function create() {
        return view('products.create',['title' => 'Posts page']);
    }
    // This method will store a post in db.
    public function store() {}

    // This method will show edit post page
    public function edit() {}

    // This method will update a post
    public function update() {}

    // This method will delete a post
    public function destroy() {}
}
