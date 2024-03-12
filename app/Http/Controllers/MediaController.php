<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("panel.media");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaRequest $request)
    {
        if ($request->hasFile("image")) {

            $filePath['url'] = Storage::disk("public")->put("media/userUpload", request()->file('image'));

            Media::create($filePath);
            return back();

        }
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($media)
    {
        $media = Media::findOrFail("$media");
        $media->delete();
      return back();
    }
}
