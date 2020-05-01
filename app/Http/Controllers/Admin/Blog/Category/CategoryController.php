<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategoryRequest;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $data = BlogCategory::with('blog_posts')->orderBy('id', 'asc')->get();
//        return $blog_category;

        return view('admin.blog.blog-category.index', compact('data'));
    }

    public function create()
    {
        return view('admin.blog.blog-category.create');
    }

    public function store(BlogCategoryRequest $request)
    {
        //
//        return $request->except('_token');
//        return $request->all();

        try {
            $name = $request->name;
            $data = [
                'name' => $name,
                'slug' => Str::slug($name),
            ];
//            return $data;
            $data = BlogCategory::create($data);
            if ($data) {
                showMessage('success', 'SUCCESS, Blog-Category Has Been Added Successfully Done.');
                return redirect()->route('admin.blog-category.index');

            } else {
                showMessage('danger', 'ERROR, Blog-Category Has Not Been Added!');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            showMessage('danger','Error, Something went wrong!');
            return redirect()->back();
        }

    }

    public function edit($id) {
        $id = base64_decode($id);
        $data = BlogCategory::find($id);
//        return $data;

        return view('admin.blog.blog-category.edit', compact('data'));
    }

    /**
     * @param BlogCategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BlogCategoryRequest $request, $id)
    {
//        return base64_decode($id);
        $id = base64_decode($id);

        $blog_cat = BlogCategory::find($id);


        try {
            $name = $request->name;
            $data = [
                $blog_cat->name = $name,
                $blog_cat->slug = Str::slug($name),
            ];
//            return $data;
            $data = $blog_cat->update($data);
            if($data) {
                showMessage('success', 'SUCCESS, Blog-Category Has Been Updated Successfully Done.');
                return redirect()->route('admin.blog-category.index');

            } else {
                showMessage('danger','ERROR, Blog-Category has not been Updated!');
                return redirect()->back();
            }

        } catch (Exception $e) {
            showMessage('danger','Error, Something went wrong!');
            return redirect()->back();
        }



    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = BlogCategory::find($id);
        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Blog-Category Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = BlogCategory::find($id);
        $data->status = $status;
        $data->save();

    }
}
