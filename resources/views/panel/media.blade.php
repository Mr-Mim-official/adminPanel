@extends("layouts.panel.master")
@section("body")
    <div class="row mx-5">
        <p class="heigh-title bold my-6">media</p>
    </div>

    <div id="add-box" class="border-solid-1 mb-10">
        <form action="{{route("media.store")}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row d-grid col-4 bg-white">
                <div class="item">
                    <label class=" mx-4" for="search">Image</label>
                    <input class="border-s-0 mx-4 my-1" type="file" name="image" id="image" required
                           placeholder="search members,projects,comments">

                </div>
                <button class="py-1 mx-2 my-1 px-3 border-small btn-success white justify-self-start bold  ">save
                </button>
            </div>
        </form>
    </div>

    <div class="content d-flex flex-columns justify-content-center align-items-center">
        <div class="row">
            <div class="box d-grid col-5 col-lg-3  col-sm-1 col-md-2  gap-10 px-2 py-2">

                @foreach(\App\Models\Media::all() as $item)
                    <div class="item d-flex flex-columns">
                        <a onclick="setImage(innerHTML,{{$item->id}});" class='pointer'>

                            <img class="mb-1" src="{{\Illuminate\Support\Facades\Storage::url("$item->url")}}"
                                 width="150" height="150"
                                 alt="product image">
                        </a>

                        <form action="{{route("media.destroy", $item)}}" method="post"
                              class="d-flex justify-content-center">
                            @csrf
                            @method("delete")
                            <button class="py-1 px-1 border-small btn-danger white bold text-center">delete</button>
                        </form>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="\assets\js\scripts.js"></script>
    <script src="\assets\js\tinymce\js\tinymce\tinymce.min.js"></script>
    <script src="\assets\js\tiny.js"></script>
@endsection
