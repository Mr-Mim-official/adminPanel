@extends("layouts.panel.master")
@section("body")
    <div class="content d-flex flex-columns px-4">

        <div class="row">
            <p class="heigh-title bold mt-6">Category </p>

        </div>
        <div class="row">
            <div class="my-5 box px-2 py-2 border-s-2">

                <form action="{{route("categories.store")}}" method="post" id="editProfile" class="d-flex flex-columns">
                    @csrf
                    <div class="item mb-1"><label for="title" class="d-block">title</label>
                        <input type="text" name="title" id="title" placeholder="please enter your first title"
                               class="w100 py-1  mt-1">
                    </div>
                    <div class="item mb-1"><label for="parent" class="d-block">parent</label>
                        <select name="parent" id="parent" class="w100 py-1 mt-1 bg-color">

                            <option value="0">انتخاب کنید</option>
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach


                        </select>
                    </div>

                    <div class="item mb-1"><label for="" class="d-block"></label>
                        <button class="btn btn-success py-1 px-3 border-small mt-1 white bold">submit</button>
                    </div>
                </form>

            </div>
        </div>


        <div class="row">
            <div class="box">
                <table class="specific-color table w100">
                    <thead>
                    <tr class="text-center">
                        <th class="py-2">id</th>
                        <th class="py-2">title</th>
                        <th class="py-2">parent</th>
                        <th class="py-2">action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Models\Category::all() as $category)
                        <tr class="  text-center">
                            <td class="py-2">{{$category->id}}</td>
                            <td class="py-2">{{$category->name}}</td>
                            <td class="py-2">{{$category->allParent}}</td>

                            <td class="py-2">
                                <form action="{{route("categories.destroy" , $category->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button><img
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv15k03DAAs80QSZluJtB-euW86JDnQuz7oQ&usqp=CAU"
                                            width="25px" height="25px"></button>

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
