<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '車款展示';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
        $grid->model()->orderBy('created_at', 'asc');
        $grid->number('編號')->width(50);
        $grid->rows(function ($row, $number) {  
            $row->column('number', $number+1);  
        });  
        $grid->image('圖片')->image('/storage',150,150)->help('建議圖片尺寸為690 × 464，上傳前請先將圖片優化壓縮');
        $grid->title('名稱');
        $grid->created_at('創建時間');
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
        $form = new Form(new Product());

        $form->text('title', '車款名稱')->rules('required');
        $form->image('image', '車款圖片')->rules('required|image')->removable()->help('建議圖片尺寸為690 × 464，上傳前請先將圖片優化壓縮');
        $form->text('description', '描述');

        return $form;
    }
}
