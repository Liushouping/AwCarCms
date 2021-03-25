<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;
use App\Models\Car;
use App\Models\Power;
use App\Models\Banner;
use App\Models\Activity;

class HomeController extends Controller
{
    
    public function index(Content $content)
    {
        return $content
            ->title('儀表板')
            // ->row(Dashboard::title())
            // ->row(function (Row $row) {

            //     $row->column(4, function (Column $column) {
            //         $column->append(Dashboard::environment());
            //     });

            //     $row->column(4, function (Column $column) {
            //         $column->append(Dashboard::extensions());
            //     });

            //     $row->column(4, function (Column $column) {
            //         $column->append(Dashboard::dependencies());
            //     });
            // });
            ->row(function ($row) {
                $row->column(3, function (Column $column) {
                    $column->append($this->activitys());
                });
                $row->column(3, function (Column $column) {
                    $column->append($this->banners());
                });
                $row->column(3, function (Column $column) {
                    $column->append($this->cars());
                });
                $row->column(3, function (Column $column) {
                    $column->append($this->powers());
                });
                
            });
    }

    public function activitys()
    {
        $activitys_count = Activity::query()->count();
        $infoBox = new InfoBox('最新優惠', 'bullseye', 'red', '/admin/activitys', $activitys_count);
        return $infoBox->render();
    }

    public function cars()
    {
        $cars_count = Car::query()->where('on_sale', true)->count();
        $infoBox = new InfoBox('超跑車款', 'car', 'aqua', '/admin/cars', $cars_count);
        return $infoBox->render();
    }

    public function powers()
    {
        $powers_count = Power::query()->where('on_sale', true)->count();
        $infoBox = new InfoBox('性能車款', 'power-off', 'yellow', '/admin/powers', $powers_count);
        return $infoBox->render();
    }

    public function banners()
    {
        $banners_count = Banner::query()->where('on_sale', true)->count();
        $infoBox = new InfoBox('廣告橫幅', 'camera', 'green', '/admin/banners', $banners_count);
        return $infoBox->render();
    }
}
