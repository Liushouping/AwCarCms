<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\InfoBox;

class BannersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '廣告橫幅';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner());
        $grid->model()->orderBy('created_at', 'asc');
        $grid->number('編號')->width(50);
        $grid->rows(function ($row, $number) {  
            $row->column('number', $number+1);  
        });  
        $grid->image('圖片')->image('/storage',200,200)->help('請先將圖片優化壓縮再進行上傳，（3840 x 820 會縮至 1200 x 300）');
        $grid->title('名稱');
        $states = [
            'on'  => ['value' => 1, 'text' => '是', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => '否', 'color' => 'default'],
        ];
        $grid->column('on_sale','顯示')->switch($states);
        $grid->link('連結')->link();
        $grid->order('排序')->sortable();
        // $grid->filter(function($filter){

        //     // 去掉默认的id过滤器
        //     $filter->disableIdFilter();
        //     // 在这里添加字段过滤器
        //     $filter->like('title', '標題');
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
        $form = new Form(new Banner);

        $form->text('title', '橫幅名稱')->rules('required');
        $form->image('image', '橫幅圖片')->rules('required|image')->removable()->help('請先將圖片優化壓縮再進行上傳，（3840 x 820 會縮至 1200 x 300）');
        $form->text('description', '描述');
        $form->text('link','網址')->rules('required');
        $form->text('order', '排序')->rules('required');
        $states = [
            'on'  => ['value' => 1, 'text' => '是', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => '否', 'color' => 'default'],
        ];
        $form->switch('on_sale','顯示')->states($states);
        return $form;
    }
}
