<?php

namespace App\Admin\Controllers;

use App\Models\Reservation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Car;

class ReservationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '預約超跑';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reservation());
        // $grid = new Grid(Reservation::with(['car']));
        $grid->model()->orderBy('created_at', 'asc');
        $grid->number('編號')->width(50);
        $grid->rows(function ($row, $number) {  
            $row->column('number', $number+1);  
        });  
        $grid->status('狀態')->display(function ($status) {
            if ($status==0) {
              return "<span class='label bg-red'>未處理</span>";
            }elseif ($status==1) {
              return "<span class='label bg-yellow'>處理中</span>";
            }elseif($status==2) {
              return "<span class='label bg-green'>已完成</span>";
            }else{
              return "<span class='label bg-red'>未處理</span>";
            }
        });
        $grid->name('姓名');
        $grid->power('性能車款');
        $grid->column('car.title','超跑車款');
      //   $grid->column('car')->display(function($id) {
      //     return Car::find($id);
      // });
      //show的使用 通过 as 可以使用模型关联调用数据
        // $grid->car('超跑車款')->as(function () {
        //   return $this->car->title;
        // });
        $grid->phone('電話');
        $grid->date('預約日期');
        $grid->time('預約時間');
        $grid->created_at('創建時間');
        $grid->disableFilter();
        $grid->disableCreateButton();
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
        $show = new Show(Reservation::findOrFail($id));
        $show->status('狀態')->using([
            0 => '尚未',
            1 => '進行',
            2 => '完成',
        ], '尚未')->dot([
            0 => 'info',
            1 => 'success',
            2 => 'danger',
        ], 'info');
        $show->name('姓名');
        $show->age('年齡');
        $show->gender('稱謂')->using(['0' => '先生', '1' => '小姐']);
        $show->email('信箱');
        $show->line('LINE ID');
        $show->car('超車車款');
        $show->power('性能車款');
        $show->phone('電話');
        $show->date('預約日期');
        $show->time('預約時間');
        $show->body('備註');
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
        $form = new Form(new Reservation());
        $form->select('status','狀態')->options([0 => '未處理', 1 => '處理中', 2 => '已完成'])->default('0')->rules('required');
        $form->text('name','姓名')->disable();
        $form->number('age','年齡')->default('18')->disable();
        $form->radio('gender','先生 / 小姐')->options(['0' => '先生', '1'=> '小姐'])->default('0')->disable();
        $form->email('email','信箱')->disable();
        $form->text('line','LINE ID')->disable();
        // $form->select('car','超跑車款')->options(Car::all()->pluck('title'));
        // $form->select('power','性能車款')->options(Car::all()->pluck('title'));
        $form->mobile('phone','電話')->disable();
        $form->date('date','預約日期')->disable();
        $form->time('time','預約時間')->disable();
        $form->quill('body', '備註')->disable();
        return $form;
    }
}
