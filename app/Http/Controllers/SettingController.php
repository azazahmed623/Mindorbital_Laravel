<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::latest()->paginate(10);
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
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
            'mail' => $request->mail,
            'address' => $request->address,
            'mailbox' => $request->mailbox,
            'facebook' => $request->facebook,
            'logo' => $this->uploadImage($request->file('logo'))
        ];

        Setting::create($requestData);

        return redirect()
            ->route('settings.index')
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
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $requestData = [
            'mail' => $request->mail,
            'address' => $request->address,
            'mailbox' => $request->mailbox,
            'facebook' => $request->facebook,
        ];

        if ($request->hasFile('logo')) {
            $requestData['logo'] = $this->uploadImage($request->file('logo'));
        }

        $setting->update($requestData);

        return redirect()
            ->route('setting.hom')
            ->withMessage('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();

        return redirect()
            ->route('settings.index')
            ->withMessage('Successfully Deleted');
    }

    public function uploadImage($logo)
    {
        $originalName = $logo->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;

        $logo->move(storage_path('/app/public/settings'), $fileName); 

        return $fileName;
    }
}
