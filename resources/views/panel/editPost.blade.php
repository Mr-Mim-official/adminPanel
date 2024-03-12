@extends("layouts.panel.master")
@section("body")
    <div class="container d-flex flex-columns">

        <div class="row">
            <p class="heigh-title bold mt-6">Insert Post</p>
        </div>


        <div class="row">


            <form action="{{route("post.store")}}" method="POST" id="editProfile" class="d-flex flex-row gap-10">
@csrf

                <div class=" mt-10 box w25 px-2 py-2 border-s-2" style="flex-basis: 70%;">

                    <div class="d-flex flex-columns">
                        <div class="item mb-1"><label for="title" class="d-block">title</label>
                            <input type="text" name="title" id="title" placeholder="please enter your title of post"
                                   class="w100 py-1  mt-1">
                        </div>
                        <div class="item mb-1"><label for="slug" class="d-block">slug</label>
                            <input type="text" name="slug" id="slug" placeholder="please enter your slug"
                                   class="w100 py-1  mt-1">
                        </div>

                        <div class="item mb-1"><label for="description" class="d-block">description</label>
                            <textarea name="description" id="description" class="w100">Next, use our Get Started docs to setup Tiny!</textarea>
                        </div>


                    </div>

                </div>


                <div class=" mt-10 box  px-2 py-2 border-s-2   " style="flex-basis: 30%;">
                    <div class="right-container d-flex flex-columns overflow-hidden  gow-1 ">
                        <div class="category  mt-1 w100 ">

                            <a onclick="showCategory();" class="bg-secondary-color  py-2 px-2 d-flex pointer  white ">category</a>

                        </div>
                        <div class="category-list bg-secondary-light-color overflow-hidden w100  visibility-hidden"
                             id="categoryList">

                            <div class="divider px-2">
                                @foreach(\App\Models\Category::all() as $category)
                                    <div class='father my-1'>
                                        @if($category->parent_id == 0)
                                            <div class='divider bg-light-primary mr-14 py-1'>
                                                <input type='checkbox' name='cat-{{$category->id}}'
                                                       value='{{$category->id}}' id=''>
                                                <label for=''>{{$category->name}}</label>
                                            </div>
                                            @php
                                                $children =  \App\Models\Category::where("parent_id" , $category->id)->get();
                                            @endphp
                                            @foreach($children as $child)

                                                <div class='child my-3 mx-4 py-1 mx-10 bg-light-primary '><input
                                                        type='checkbox' name='cat-{{$child->id}}'
                                                        value='{{$child->id}}' id=''>
                                                    <label
                                                        for=''>{{$child->name}}</label></div>

                                            @endforeach

                                        @endif
                                        @endforeach

                                    </div>

                            </div>
                            <div class="selector my-5">

                                <input type="file" onclick="openWindow();"></input>

                            </div>
                            <div id="imageHolder" onload="setImage();">


                                <img onclick="setImage();" id="setImage" src='/uploads/' class='' width='200'
                                     height='200'
                                     alt='image you selected'>
                                <input type="text" id="selectorID" name="image">


                            </div>
                            <div class="item mb-1"><label for="" class="d-block"></label>
                                <button class="btn btn-success py-1 px-3 border-small mt-1 white bold w100">Save
                                </button>

                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="\assets\js\scripts.js"></script>
    <script src="\assets\js\tinymce\js\tinymce\tinymce.min.js"></script>
    <script src="\assets\js\tiny.js"></script>
@endsection
