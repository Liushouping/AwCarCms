<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '會員';

    
    protected function grid()
    {
        $grid = new Grid(new User);
        $grid->number('編號');
        $grid->rows(function ($row, $number) {  
            $row->column('number', $number+1);  
        });  
        $grid->model()->orderBy('created_at', 'asc');
        $grid->id('ID')->sortable();
        $grid->name('姓名');
        $grid->email('信箱');
        $grid->email_verified_at('已驗證信箱')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->created_at('註冊時間');
        $grid->disableCreateButton();
        $grid->disableActions();

        $grid->tools(function ($tools) {
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

        $grid->filter(function($filter){
            $filter->between('created_at','創建時間')->datetime(['format' => 'YYYY-MM-DD']);
        });
        return $grid;
        
    }
}