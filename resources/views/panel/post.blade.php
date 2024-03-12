@extends("layouts.panel.master")
@section("body")
    <div class="content d-flex flex-columns">

        <div class="row">
            <p class="heigh-title bold my-6">Manage Posts</p>
        </div>
        <div class="row">
            <div class="box d-flex justify-content-center">
                <table class=" specific-color text-center">
                    <thead>
                    <tr class=" py-4 d-grid col-6 justify-content-center align-items-center ">
                        <th>id</th>
                        <th>title</th>
                        <th>image</th>
                        <th>category</th>
                        <th>condition</th>
                        <th>action</th>

                    </tr>
                    </thead>

                    <tbody>



                    @foreach(\App\Models\Post::all() as $post)

                    <tr class="border-s-1 py-2 d-grid col-6 justify-content-center align-items-center text-center white-space-break-spaces">
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>

                        <td><img src="{{\Illuminate\Support\Facades\Storage::url(\App\Models\Media::find($post->image_id)->url)}}" width="60px" height="60px" alt="" class="border-full"></td>
                        <td class="subtitle bold text-center">
                            <p class="text-end">
                                @php
                                    $categories = \App\Models\PostCategory::where("post_id" , $post->id)->get();
                                foreach ($categories as $category)
                                {
                                    $cat = \App\Models\Category::find($category->category_id);
                                    echo "$cat->name //";
                                }
                                    @endphp

                            </p>
                        </td>
                        <td><span class="condition success bg-success  subtitle px-5">published</span></td>
                        <td class="d-grid col-2 ">
                            <a  style=""  href="{{route("post.edit" , $post->id)}}"><i class="fa fa-edit pointer"></i>
                            </a>
                            <form style="margin-top: -80%" action="{{route("post.destroy" , $post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv15k03DAAs80QSZluJtB-euW86JDnQuz7oQ&usqp=CAU" width="25px" height="25px"></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
