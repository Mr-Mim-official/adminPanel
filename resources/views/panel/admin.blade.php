@extends("layouts.panel.master")
@section("link")
    <link rel="stylesheet" href="/assets/css/pages/home.css">
    <link rel="stylesheet" href="/assets/css/pages/admin.css">
@endsection
@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
    if (!Auth::check()){
    return back();
    }
            session(["userInfo" => $user = User::find(Auth::user()->id)])

@endphp
@section("body")






        <div class="container d-flex flex-columns">

            <div class="row">
                <p class="heigh-title bold my-6">Dashboard</p>
            </div>
            <div class="row">
                <div class="box">
                    <table class="specific-color table w100">
                        <thead>
                        <tr class=" py-2 d-grid col-5 justify-content-center align-items-center">
                            <th>id</th>
                            <th>name</th>
                            <th>family</th>
                            <th>email</th>
                            <th>action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="border-s-1 py-2 d-grid col-5 justify-content-center align-items-center text-center white-space-break-spaces">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{route("profile")}}"><i class="fa fa-edit pointer"></i></a></td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection
