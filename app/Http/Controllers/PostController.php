<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    private $category;
    private $post;

    public function __construct(Post $post, Category $category)
    {
        $this->post = $post;
        $this->category = $category;
    }

    public function create ()
    {
        $all_categories = $this->category->all();

        return view('users.post.create')->with('all_categories', $all_categories);
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' =>  'required|array|between:1,3',
            'description' =>'required|min:1|max:1000',
            'image' =>     'required|mimes:jpg,jpeg,png,gif|max:1048'
        ]);

        $this->post->user_id = Auth::user()->id;
        $this->post->image = 'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));

        $this->post->description = $request->description;
        $this->post->save();

        foreach($request->category as $category_id){
            $category_post[] = ['category_id'=>$category_id];
        }
        $this->post->categoryPost()->createMany($category_post);
        return redirect()->route('index');
    }
}
