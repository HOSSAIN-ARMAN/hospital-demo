<?php

namespace App\Http\Controllers\admin;

use App\admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\FileSaver;
use View;


class CategoryController extends Controller
{
    // use FileSaver;
    public $model;

    public function __construct()
    {
        View::share([
            'categories' => Category::all()
        ]);
    }
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->model = Category::create($request->all());
        // $directory = "all_category_img/";
        // $this->fileUpload($request->image, $this->model, 'image', $directory);

        return redirect()
            ->route('admin.category.index')
            ->with('message', 'Category created successfully!');
    }

    public function show()
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
