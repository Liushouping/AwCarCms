<?php

namespace App\Admin\Controllers;

use App\Models\Info;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class InfosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'info';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Info());

        $grid->id('編號');
        $grid->order('排序');
        $grid->title('名稱');
        // $grid->body('內容');
        $grid->on_sale('顯示')->using(['0' => '否', '1' => '是']);

        $grid->actions(function ($actions) {
            // $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
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
        $show = new Show(Info::findOrFail($id));

        $show->id('編號');
        // $show->image('封面')->image();
        $show->title('名稱');
        // $show->body('內容');
        $show->order('排序');
        $show->on_sale('是否顯示')->using(['0' => '否', '1' => '是']);
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
        $form = new Form(new Info());

        $form->text('title', '名稱')->rules('required');
        $form->text('order', '排序')->rules('required');
        $form->radio('on_sale', '是否顯示')->options(['1' => '是', '0'=> '否'])->default('0');
        $form->quill('body', '描述')->rules('required');

        return $form;
    }
}
