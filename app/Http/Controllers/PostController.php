<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostCategory;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("panel.post");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.editPost");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        $data = $request->all();

        $filteredData = array_filter($data, function ($key) {
            return strpos($key, 'cat-') === 0;
        }, ARRAY_FILTER_USE_KEY);

        $result = array_reduce(array_keys($filteredData), function ($carry, $key) use ($filteredData) {
            $id = 'id' . substr($key, 1); // استخراج عدد بعد از 'cat-'
            $carry[$id] = $filteredData[$key];
            return $carry;
        }, []);

        $category = Category::whereIn('id', $result)->get();
        $post = Post::create([
            "title" => $request->title,
            "description" => $request->description,
            "slug" => $request->slug,
            "image_id" => $request->image,
        ]);
        foreach ($category as $item) {
            PostCategory::create(["category_id"=>$item->id,"post_id"=>$post->id]);
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        $post = Post::findOrFail($post);
        return view("panel.createPost" , ["userInfo"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $post)
    {
       if( PostCategory::where("post_id" , $post)->delete()) {

           $post = Post::find($post);

           $post->update(["title" => $request->title,
               "slug" => $request->slug,
               "description" => $request->description,
               "image_id" => $request->image
           ]);


           $data = $request->all();

           $filteredData = array_filter($data, function ($key) {
               return strpos($key, 'cat-') === 0;
           }, ARRAY_FILTER_USE_KEY);

           $result = array_reduce(array_keys($filteredData), function ($carry, $key) use ($filteredData) {
               $id = 'id' . substr($key, 1); // استخراج عدد بعد از 'cat-'
               $carry[$id] = $filteredData[$key];
               return $carry;
           }, []);
           $category = Category::whereIn('id', $result)->get();


           foreach ($category as $item) {
               PostCategory::create(["category_id" => $item->id, "post_id" => $post->id]);
           }
       }
        return redirect("/admin/post/");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        Post::findOrFail($post)->delete();
        return back();
    }
}
