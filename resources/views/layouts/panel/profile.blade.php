@extends("layouts.panel.master")
@section("body")
    @php
    use Illuminate\Support\Facades\Auth;
        if(Auth::check())
            $user = session("userInfo");
        else
            return back();
    @endphp
    <div class="content d-flex flex-columns">

        <div class="row">
            <p class="heigh-title bold mt-6">Edit profile</p>
        </div>
        <div class="row">
            <div class="mx-25 box w50 px-2 py-2 border-s-2">

                <form action="{{route("profile")}}" method="POST" id="editProfile" class="d-flex flex-columns">
                    @csrf
                    <div class="item mb-1"><label for="name" class="d-block">name</label>
                        <input type="text" required value="{{$user->name}}" name="name" id="name"
                               placeholder="please enter your first name" class="w100 py-1  mt-1">
                    </div>
                    <div class="item mb-1"><label for="family" class="d-block">family</label>
                        <input type="text" required value="{{$user->last_name}}" name="last_name" id="family"
                               placeholder="please enter your last name" class="w100 py-1  mt-1">
                    </div>
                    <div class="item mb-1"><label for="" class="d-block"></label>
                        <input type="text" name="" id="" value="Your ID : {{$user->id}}" disabled placeholder=" ..." class="w100 py-1  mt-1">
                    </div>
                    <div class="item mb-1"><label for="" class="d-block"></label>
                        <button class="btn btn-success py-1 px-3 border-small mt-1 white bold">edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
