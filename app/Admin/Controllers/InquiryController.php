<?php

namespace App\Admin\Controllers;

use App\Models\Inquiry;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class InquiryController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Inquiry')
            ->description('Inquiry list')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Inquiry);

        $grid->id('Id');
        $grid->product()->name('Source Product');
        $grid->intential_products('Intential products');
        $grid->name('Name');
        $grid->email('Email');
        $grid->quantity('Quantity');
        $grid->market('Market');
        $grid->created_at('Created at');

        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableEdit();
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
        $show = new Show(Inquiry::findOrFail($id));

        $show->id('Id');
        $show->product_id('Product id');
        $show->intential_products('Intential products');
        $show->name('Name');
        $show->email('Email');
        $show->quantity('Quantity');
        $show->market('Market');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }
}
