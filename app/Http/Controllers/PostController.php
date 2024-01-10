<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Post;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //
    public function index() {


        $posts = Post::latest()->get();

        return view('admin.posts.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'posts' => $posts
        ]);

    }

    public function show(Post $post) {
        return view('blog-post', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'post' => $post,
            'posts' => Post::latest()->take(10)->get()
        ]);
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function store() {

      $inputs = request()->validate([
          'title' => 'required|max:255',
          'post_image' => 'file',
          'body' => 'required'
      ]);
      if(request('post_image')) {
          $inputs['post_image'] = request('post_image')->store('images');
      }
      auth()->user()->posts()->create($inputs);

      session()->flash('post-created-message', 'Announcement "'. $inputs['title'] . '" was Created...');


      return redirect()->route('post.index');

    }


    public function store_sup() {

        $inputs = request()->validate([
            'title' => 'required|max:255',
            'post_image' => 'file',
            'body' => 'required'
        ]);
        if(request('post_image')) {
            $inputs['post_image'] = request('post_image')->store('images');
        }
        if(request('sup_approval')) {
            $inputs['sup_approval'] = request('sup_approval');
        }
        auth()->user()->posts()->create($inputs);

        session()->flash('post-created-message', 'Announcement "'. $inputs['title'] . '" was Created...');


        return redirect()->route('post.index');

    }




    public function edit(Post $post) {

        return view('admin.posts.edit', ['post' => $post]);

    }

    public function update(Post $post) {

        $inputs = request()->validate([
            'title' => 'required|max:255',
            'post_image' => 'file',
            'body' => 'required'
        ]);
        if(request('post_image')) {
            $inputs['post_image'] = request('post_image')->store('images');
            $post->post_image = $inputs['post_image'];
        }
        $post->title = $inputs['title'];
        $post->body = $inputs['body'];

        $this->authorize('update', $post);

        $post->update();

        session()->flash('post-updated-message', 'Announcement "'. $inputs['title'] . '" was updated...');
        return redirect()->route('post.index');


    }

    public function destroy(Post $post , Request $request) {

        $this->authorize('delete', $post);

        $post->delete();

        $request->session()->flash('message', 'Announcement was Deleted');


        return back();
    }





}
