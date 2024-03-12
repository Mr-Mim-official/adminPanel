<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('panel.admin');
    }
    public function profile()
    {
        return view("layouts.panel.profile");
    }
    public function editProfile(storeProfileRequest $request)
    {
          User::where("id" , Auth::user()->id)->update(['name'=>$request->name ,
                                                    'last_name'=>$request->last_name]);

        session(["userInfo" => $user = User::find(Auth::user()->id)]);

          return back();

    }
}
