<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Color;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CategoryController extends Controller
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
            ->header('Categories')
            ->description('category of product')
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
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->id('Id');
        $grid->name('分类名称');
        $grid->icon('分类图标')->image('http://yujiaknit.test/images/', 100, 100);
        $grid->colors()->display(function ($colors) {
            $colors = array_map(function ($role) {
                return '<span style="display: inline-block; width: 22px;height: 22px;background-color:' . $role['rgb'] . '"></span> ';
            }, $colors);
            return implode('', $colors);
        });
        $grid->sort('排序值');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');

        $grid->disableExport();

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
        $show = new Show(Category::findOrFail($id));

        $show->id('Id');
        $show->name('分类名称');
        $show->icon('分类图标')->image('http://yujiaknit.test/images/', 100, 100);
        $show->sort('排序值');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);

        $form->text('name', '分类名称');
        $form->image('icon', '分类图标')->move('categories');
        /*$colors = Color::all()->mapWithKeys(function ($item) {
            $color = '<span style="display: inline-block; width: 22px;height: 22px;background-color:' . $item['rgb'] . '"></span> ';
            return [$item['id'] =>  $color . $item['name']];
        });*/
        $form->checkbox('colors', '颜色值')->options(Color::all()->pluck('name', 'id'));
        $form->number('sort', '排序值');

        return $form;
    }
}
