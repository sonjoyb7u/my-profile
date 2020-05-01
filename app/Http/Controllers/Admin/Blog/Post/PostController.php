<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\BlogCategory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::with('blog_category')->get();
//        return $data;

        return view('admin.blog.blog-post.index', compact('data'));
    }

    public function create()
    {
        $blog_cats = BlogCategory::get();
//        return $blog_cats;

        return view('admin.blog.blog-post.create', compact('blog_cats'));
    }

    public function store(PostRequest $request)
    {
//        return $request->except('_token');
//        return $request->all();

        $user = User::find(1);

        try {
            $image_file = $request->file('image');
            $image_file_ext = $image_file->getClientOriginalExtension();
            $new_image_file  = date("Ymdhis") ."_". $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//        return $new_image_file;
            $image_file_type = $image_file->getMimeType();

            if ($image_file->isValid()) {
                if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {
                    $title = $request->title;
                    $data = [
                        'user_id' => $user->id,
                        'blog_cat_id' => $request->cat_name,
                        'title' => $title,
                        'slug' => Str::slug($title),
                        'desc' => $request->desc,
                        'image' => $new_image_file,
                    ];
//                        return $data;
                    $post_data = Post::create($data);

                    if ($post_data) {
//                    $image_file->storeAs('/images/category/', $new_image_file);
                        $image_file->move('uploads/images/blog-post/', $new_image_file);
                        showMessage('success', 'SUCCESS, Blog-Post Has Been Added Successfully Done.');
                        return redirect()->route('admin.blog-post.index');

                    }

                }
            }

        } catch (Exception $e) {
            showMessage('danger','Error, '.$e->getMessage());
            return redirect()->back();
        }

    }

    public function edit($id) {
        $id = base64_decode($id);

        $blog_cats = BlogCategory::where('status', BlogCategory::ACTIVE_STATUS)->get();
//        return $blog_cats;

        $data = Post::with('blog_category')->find($id);
//        return $data;

        return view('admin.blog.blog-post.edit', compact('blog_cats','data'));
    }

    public function update (PostRequest $request, $id) {
        $id = base64_decode($id);
        $post = Post::with('blog_category')->find($id);
//        return $post;
        $user = User::with('profile')->find(1);
//        return $user->id;
        $image_file = $request->file('image');
//        return $image_file;

        if($image_file) {
            $image_file_ext = $image_file->getClientOriginalExtension();
            $new_image_file  = date("Ymdhis") . "_" . $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//            return $new_image_file;
            $image_file_type = $image_file->getMimeType();
            if($image_file->isValid()) {
                if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {

                    unlink(public_path('uploads/images/blog-post/'.$post->image));
//                    Storage::disk('public')->delete('/images/blog-post/' . $post->image);
                    $title = $request->title;
                    $post_data = [
                        $post->user_id = $user->id,
                        $post->blog_cat_id = $request->cat_name,
                        $post->title = $title,
                        $post->slug = Str::slug($title),
                        $post->desc = $request->desc,
                        $post->image = $new_image_file,
                    ];
//                    return $post_data;
                    $data = $post->update($post_data);
                    if($data) {
//                        $image_file->storeAs('/images/blog-pos/', $new_image_file);
                        $image_file->move('uploads/images/blog-post/', $new_image_file);

                        showMessage('success', 'SUCCESS, Blog-Post Has Been Updated With Image Successfully Done.');
                        return redirect()->route('admin.blog-post.index');

                    } else {
                        showMessage('danger','ERROR, Blog-Post has not been Updated With Image!');
                        return redirect()->back();
                    }
                }
            }

        } else {
            $title = $request->title;
            $post_data = [
                $post->user_id = $user->id,
                $post->blog_cat_id = $request->cat_name,
                $post->title = $title,
                $post->slug = Str::slug($title),
                $post->desc = $request->desc,
            ];
//            return $post_data;
            $data = $post->update($post_data);
            if($data) {
                showMessage('success', 'SUCCESS, Blog-Post Has Been Updated Without Image Successfully Done.');
                return redirect()->route('admin.blog-post.index');

            } else {
                showMessage('danger','ERROR, Blog-Post has not been Updated Without Image!');
                return redirect()->route('admin.blog-post.create');
            }

        }


    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Post::find($id);
//        return $data;

        unlink(public_path('uploads/images/blog-post/'.$data->image));
//        Storage::disk('public')->delete('/images/blog-post/'.$data->image);

        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Blog-Post Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = Post::find($id);
        $data->status = $status;
        $data->save();

    }
}
