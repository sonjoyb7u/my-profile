<?php

namespace App\Http\Controllers\Admin\Work\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::with('projects')->latest()->get();
//         return $data;

        return view('admin.work.category.index', compact('data'));
    }

    public function create()
    {
        return view('admin.work.category.create');
    }

    public function store(CategoryRequest $request) {
//        return $request->except('_token');

        try {
            $name = $request->name;
            $data = [
                'name' => $name,
                'slug' => Str::slug($name),

            ];
//            return $data;
            $data = Category::create($data);
            if ($data) {
                showMessage('success', 'SUCCESS, Category Has Been Added Successfully Done.');
                return redirect()->route('admin.category.index');
            } else {
                showMessage('danger', 'ERROR, Category Has Not Been Added!');
                return redirect()->route('admin.category.create');
            }

        } catch (Exception $e) {
            showMessage('danger', 'ERROR, ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id) {
        $id = base64_decode($id);
        $data = Category::find($id);
//        return $data;

        return view('admin.work.category.edit', compact('data'));
    }

    public function update(CategoryRequest $request, $id) {
        $id = base64_decode($id);

        $category = Category::find($id);

        $name = $request->name;
        $data = [
            $category->name = $name,
            $category->slug = Str::slug($name),
        ];
//      return $data;
        $data = $category->update($data);
        if($data) {
            showMessage('success', 'SUCCESS, Category Has Been Updated Successfully Done.');
            return redirect()->route('admin.category.index');

        } else {
            showMessage('danger','ERROR, Category has not been Updated!');
            return redirect()->back();
        }

    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Category::find($id);
        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Category Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = Category::find($id);
        $data->status = $status;
        $data->save();

    }
}
