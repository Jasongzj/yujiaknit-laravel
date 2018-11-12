<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use function foo\func;

class ProductController extends Controller
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
            ->header('Products')
            ->description('Product List')
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
            ->description('Create a new product')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('Id');
        $grid->name('商品名');
        $grid->column('category.name', '品类');
        $grid->fabric('Fabric');
        $grid->gsm('Gsm');
        $grid->material('Material');
        $grid->attach('Attach');
        $grid->head_image('商品图')->image('http://yujiaknit.test/images/', 100, 100);
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        $grid->filter(function ($filter) {
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

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
        $show = new Show(Product::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->category_id('Category id');
        $show->fabric('Fabric');
        $show->gsm('Gsm');
        $show->material('Material');
        $show->attach('Attach');
        $show->head_image('Head image');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product);

        $form->text('name', 'Name');

        $categories = Category::select('id', 'name')->get();
        $mapCategories = $categories->mapWithKeys(function ($item) {
            return [$item['id'] => $item['name']];
        });
        $form->select('category_id', '商品分类')->options($mapCategories->all());
        $form->text('fabric', 'Fabric');
        $form->text('gsm', 'Gsm');
        $form->text('material', 'Material');
        $form->text('attach', 'Attach');
        $form->image('head_image', '商品图');

        return $form;
    }
}
