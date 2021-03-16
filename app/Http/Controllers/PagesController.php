<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Activity;
use App\Models\Info;

class PagesController extends Controller
{
    public function index()
    {
        $banners = Banner::query()->where('on_sale', true)->orderBy('order','asc')->get();
        // $activitys = Activity::paginate(5);
        $infos = Info::query()->where('on_sale', true)->orderBy('order','asc')->paginate(5);
        // dd($banners);
        return view('pages.index', compact('banners','infos'));


    }

    // public function ShowActivity($id)
    // {
    //     $activitys = Activity::find($id);
    //     return view('activities.show', compact('activitys'));
    // }

    public function ShowInfo($id)
    {
        $infos = Info::find($id);
        $dates  = Info::latest()->take(5)->get();

        // get previous post id
        $previous = Info::where('id', '<', $infos->id)->max('id');
        // get next post id
        $next = Info::where('id', '>', $infos->id)->min('id');

        // dd($date);
        return view('infos.show', compact('infos','dates','previous','next'));
    }
}