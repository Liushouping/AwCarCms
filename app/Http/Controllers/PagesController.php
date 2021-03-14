<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Activity;

class PagesController extends Controller
{
    public function root()
    {
        $banners = Banner::query()->where('on_sale', true)->orderBy('order','asc')->get();
        // $activitys = Activity::paginate(6);
        // return view('pages.root', compact('banners','activitys'))
        return view('pages.root', compact('banners'));
    }
}