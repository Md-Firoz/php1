<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $post=Post::all();
        return view('index')->with('post', $post);
    }

    public function create1()
    {
        return view('create1');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        Post::create($input);
        return redirect('post')->with('flash_message', 'post Addedd!');
    }

    public function show($id)
    {
        $post=Post::find($id);
        return view('show')->with('post', $post);
    }


    public function edit($id)
    {
        $post=Post::find($id);
        return view('edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $input=$request->all();
        $post->update($input);
        return redirect('post')->with('flash_message', 'post Update!');
    }

    public function destory($id)
    {
        Post::destory($id);
        return redirect('post')->with('flash_message', 'post deleted!');
    }
}