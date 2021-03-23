<?php

namespace App\Admin\Controllers;

use App\Models\Activity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActivitysController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '最新優惠';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Activity());
        $grid->model()->orderBy('created_at', 'asc');
        $grid->id('ID')->sortable();
        $grid->title('名稱');
        $grid->image('封面')->image('/storage',200,200);
        $grid->status('狀態')->using([
            0 => '準備',
            1 => '進行',
            2 => '結束',
        ], '未知')->dot([
            0 => 'info',
            1 => 'success',
            2 => 'danger',
        ], 'warning');
        $grid->order('排序')->sortable();
        $grid->on_sale('顯示')->using(['0' => '否', '1' => '是']);
        $grid->start_date('開始時間');
        $grid->end_date('結束時間');
        $grid->created_at('創建時間');
        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('title', '名稱');
        });
        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Activity::findOrFail($id));

        $show->image('封面')->image();
        $show->title('名稱');
        $show->order('排序');
        $show->status('狀態')->using([
            0 => '準備',
            1 => '進行',
            2 => '結束',
        ], '未知')->dot([
            0 => 'danger',
            1 => 'success',
            2 => 'info',
        ], 'warning');
        $show->on_sale('是否顯示')->using(['0' => '否', '1' => '是']);
        $show->start_date('開始時間');
        $show->end_date('結束時間');
        $show->created_at('創建時間');
        $show->updated_at('更新時間');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Activity());

        $form->text('title', '名稱')->rules('required');
        $form->text('order', '排序')->rules('required');
        $form->image('image', '封面')->rules('required|image')->removable()->help('上傳前請先將圖片壓縮');
        $form->radio('on_sale', '是否顯示')->rules('required')->options(['1' => '是', '0'=> '否'])->default('1');
        $form->dateRange('start_date', 'end_date', '活動期間')->rules('required');
        $form->select('status','狀態')->options([0 => '準備', 1 => '進行', 2 => '結束'])->rules('required');
        $form->quill('body', '描述')->rules('required');
        return $form;
    }
}
