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
        $grid->number('編號')->width(50);
        $grid->rows(function ($row, $number) {  
            $row->column('number', $number+1);  
        });  
        $grid->image('圖片')->image('/storage',200,200)->help('建議圖片尺寸為690 × 464，上傳前請先將圖片優化壓縮');
        $grid->title('名稱');
        $grid->price('租金');
        $states = [
            'on'  => ['value' => 1, 'text' => '是', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => '否', 'color' => 'default'],
        ];
        $grid->column('on_sale','顯示')->switch($states);
        // $grid->order('排序')->sortable();
        // $grid->filter(function($filter){

        //     // 去掉默认的id过滤器
        //     $filter->disableIdFilter();
        //     // 在这里添加字段过滤器
        //     $filter->like('title', '名字');
        // });
        $grid->disableFilter();
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
        $form->image('image', '橫幅圖片')->rules('required|image')->removable()->help('建議圖片尺寸為690 × 464，上傳前請先將圖片優化壓縮');
        $form->text('description', '描述');
        $form->text('model', '車型')->rules('required');
        $form->text('engine', '引擎')->rules('required');
        $form->text('​exhaust', '排氣量')->rules('required');
        $form->text('max_horsepower', '最大馬力')->rules('required');
        $form->text('​max_torque', '最大扭力')->rules('required');
        $form->text('price', '租金')->rules('required');
        // $form->text('link','網址');
        // $form->text('phone', '聯絡電話');
        $form->text('order', '排序')->rules('required')->help('前台優先順序');
        $states = [
            'on'  => ['value' => 1, 'text' => '是', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => '否', 'color' => 'default'],
        ];
        $form->switch('on_sale','顯示')->states($states);
        return $form;
    }
}
