<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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

        $grid->id('編號');
        $grid->image('橫幅圖片')->image('/storage',75,75);
        $grid->title('橫幅名稱');
        $grid->description('描述');
        $grid->link('網址')->link();
        $grid->alt('註解');
        $grid->order('排序');
        $grid->on_sale('是否顯示')->display(function ($value) {
            return $value ? '是' : '否';
        });

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
        $show = new Show(Banner::findOrFail($id));

        $show->id('ID');
        $show->title('橫幅名稱');
        $show->image('橫幅圖片')->image();
        $show->description('描述');
        $show->link('網址');
        $show->alt('註解');
        $show->order('排序');
        $show->on_sale('是否顯示');
        $show->field('created_at', '創建時間');
        $show->field('updated_at', '更新時間');

        return $show;
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
        $form->image('image', '橫幅圖片')->rules('required|image')->removable();
        $form->text('description', '描述')->rules('required');
        $form->text('link','網址')->rules('required');
        $form->text('alt','註解')->rules('required');
        $form->text('order', '排序')->rules('required');
        $form->radio('on_sale', '是否顯示')->options(['1' => '是', '0'=> '否'])->default('0');

        return $form;
    }
}
