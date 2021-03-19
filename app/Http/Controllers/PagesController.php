<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Activity;
use App\Models\Sop;
use App\Models\Notice;
use App\Models\Car;
use App\Models\Power;

class PagesController extends Controller
{
    public function index()
    {
        $banners = Banner::query()->where('on_sale', true)->orderBy('order','asc')->get();
        $activitys = Activity::query()->where('on_sale', true)->orderBy('order','asc')->paginate(6);
        return view('pages.index', compact('banners','activitys'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sop()
    {
        $sops = Sop::all();
        return view('pages.sop',compact('sops'));
    }

    public function notice()
    {
        $notices = Notice::all();
        return view('pages.notice',compact('notices'));
    }

    public function car()
    {
        $cars = Car::all();
        return view('cars.index',compact('cars'));
    }

    public function power()
    {
        $powers = Power::all();
        return view('powers.index',compact('powers'));
    }

    public function Activity()
    {
        $activitys = Activity::orderBy('created_at','asc')->orderBy('order','asc')->paginate(6);
        return view('activities.index', compact('activitys'));
    }

    public function ShowActivity($id)
    {
        $activitys = Activity::find($id);
        $dates  = Activity::latest()->take(5)->get();
        $previous = Activity::where('id', '<', $activitys->id)->max('id');
        $next = Activity::where('id', '>', $activitys->id)->min('id');
        return view('activities.show', compact('activitys','dates','previous','next'));
    }
}