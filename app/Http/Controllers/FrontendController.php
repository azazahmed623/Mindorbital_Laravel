<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banners = Banner::limit(3)->get();
        $services = Service::limit(6)->get();
        $settings = Setting::first();
        return view('frontend.index', compact('banners','services','settings'));
    }

    public function setting(){
        return view('admin.settings');
    }
}
