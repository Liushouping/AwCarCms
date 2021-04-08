<?php

namespace App\Admin\Controllers;

use App\Models\Sop;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SopsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '租車流程';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sop());
        $grid->number('編號')->width(50);
        $grid->rows(function ($row, $number) {  
            $row->column('number', $number+1);  
        });  
        $grid->title('名稱');
        $grid->created_at('創建時間');
        $grid->updated_at('更新時間');

        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->disableCreateButton();
        $grid->disableFilter();
        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Sop());

        $form->text('title', '名稱')->rules('required');
        $form->quill('body', '內容')->rules('required');

        return $form;
    }
}
