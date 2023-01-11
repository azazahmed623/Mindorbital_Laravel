<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(10);
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = [
            'title' => $request->title,
            'description' => $request->description,
            'button' => $request->button,
            'is_active' => $request->is_active ? true : false,
            'image' => $this->uploadImage($request->file('image'))
        ];

        Banner::create($requestData);

        return redirect()
            ->route('banners.index')
            ->withMessage('Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $requestData = [
            'title' => $request->title,
            'description' => $request->description,
            'button' => $request->button,
            'is_active' => $request->is_active ? true : false,
        ];

        if ($request->hasFile('image')) {
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }

        $banner->update($requestData);

        return redirect()
            ->route('banners.index')
            ->withMessage('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()
            ->route('banners.index')
            ->withMessage('Successfully Deleted');
    }

    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;

        $image->move(storage_path('/app/public/banners'), $fileName); 

        // Image::make($image)
        //     ->resize(200, 200)
        //     ->save(storage_path() . '/app/public/banners/' . $fileName);

        return $fileName;
    }
}
