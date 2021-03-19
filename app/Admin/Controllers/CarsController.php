<?php

namespace App\Admin\Controllers;

use App\Models\Car;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CarsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '超跑車款';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Car());

        $grid->model()->orderBy('created_at', 'asc');
        $grid->id('ID')->sortable();
        $grid->title('名字');
        $grid->model('車型');
        $grid->image('圖片')->image('/storage',200,200)->help('上傳前請先壓縮圖片');
        $grid->price('租金');
        $grid->phone('聯絡電話');
        $grid->order('排序')->sortable();
        $grid->on_sale('是否顯示')->display(function ($value) {
            return $value ? '是' : '否';
        });

        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Car());

        $form->text('title', '名字')->rules('required');
        $form->image('image', '橫幅圖片')->rules('required|image')->removable()->help('上傳前請先將圖片壓縮');
        $form->text('description', '描述');
        $form->text('model', '車型')->rules('required');
        $form->text('engine', '引擎')->rules('required');
        $form->text('​exhaust', '排氣量')->rules('required');
        $form->text('max_horsepower', '最大馬力')->rules('required');
        $form->text('​max_torque', '最大扭力')->rules('required');
        $form->text('price', '租金')->rules('required');
        $form->text('link','網址');
        $form->text('phone', '聯絡電話');
        $form->text('order', '排序');
        $form->radio('on_sale', '是否顯示')->options(['1' => '是', '0'=> '否'])->default('0');

        return $form;
    }
}
