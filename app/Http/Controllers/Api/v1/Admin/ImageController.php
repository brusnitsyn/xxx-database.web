<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ImageResource;
use App\Models\ImageUpload;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        //Save the uploaded file from the request to the uploads storage.  Media Library will read them from here when the post is saved
        $path = $request->file('file')->store('uploads');
        $file = $request->file('file');

        $image = [
            'filename' => $file->getClientOriginalName(),
            'path' => $path
        ];

        $imageModel = ImageUpload::create($image);

        //Return the name of the file after upload, and the original name
        //These will be appended as hidden inputs to the posts form so that they can be processed after the post is saved
        return new ImageResource($imageModel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
