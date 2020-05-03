<?php

namespace App\Http\Controllers\Admin\Work\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Category as CategoryAlias;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index() {
        $data = Project::with('user', 'category')->get();
//        return $data;

        return view('admin.work.project.index', compact('data'));
    }

    public function create() {
        $categories = CategoryAlias::with('projects')->where('status', CategoryAlias::ACTIVE_STATUS)->get();
//        return $categories;

        return view('admin.work.project.create', compact('categories'));
    }

    public function store(ProjectRequest $request) {
//        return $request->except('_token');
        $user = User::find(1);

        try {
            $image_file = $request->file('image');
//        return $image_file;

            $image_file_ext = $image_file->getClientOriginalExtension();
            $new_image_file = date("Ymdhis") . "_" . $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//                return $new_image_file;
            $image_file_type = $image_file->getMimeType();
            if ($image_file->isValid()) {
                if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {
                    $name = $request->name;
                    $data = [
                        'user_id' => $user->id,
                        'category_id' => $request->cat_name,
                        'name' => $name,
                        'slug' => Str::slug($name),
                        'image' => $new_image_file,

                    ];
                        return $data;
                    $data = CategoryAlias::create($data);
                    if($data) {
//                        $image_file->storeAs('/images/project/', $new_image_file);
                        $image_file->move('uploads/images/project/', $new_image_file);

                        showMessage('success', 'SUCCESS, Project & User Has Been Updated Successfully Done With Image.');
                        return redirect()->route('admin.project.index');

                    } else {
                        showMessage('danger','ERROR, Project has not been Updated With Image!');
                        return redirect()->back();
                    }

                }

            }

        } catch (Exception $e) {
            showMessage('danger', 'ERROR, ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id) {
        $id = base64_decode($id);

        $categories = Category::with('projects')->where('status', Category::ACTIVE_STATUS)->get();

        $data = Project::with('user', 'category')->find($id);
//        return $data;

        return view('admin.work.project.edit', compact('categories','data'));
    }

    public function update(ProjectRequest $request, $id) {
        $id = base64_decode($id);
        $user = User::find(1);
        $project = Project::with('user', 'category')->find($id);
//        return $project;

        $image_file = $request->file('image');
//        return $image_file;

        if($image_file) {
            $image_file_ext = $image_file->getClientOriginalExtension();
            $new_image_file  = date("Ymdhis") . "_" . $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//            return $new_image_file;
            $image_file_type = $image_file->getMimeType();
            if($image_file->isValid()) {
                if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {

                    unlink(public_path('uploads/images/project/'.$project->image));
//                    Storage::disk('public')->delete('/images/project/' . $project->image);

                    $name = $request->name;
                    $project_data = [
                        $project->user_id = $user->id,
                        $project->category_id = $request->cat_name,
                        $project->name = $name,
                        $project->slug = Str::slug($name),
                        $project->desc = $request->desc,
                        $project->image = $new_image_file,

                    ];
//                    return $project_data;
                    $data = $project->update($project_data);

                    if($data) {
//                        $image_file->storeAs('/images/category/', $new_image_file);
                        $image_file->move('uploads/images/project/', $new_image_file);

                        showMessage('success', 'SUCCESS, Project Has Been Updated Successfully Done With Image.');
                        return redirect()->route('admin.project.index');

                    } else {
                        showMessage('danger','ERROR, Project has not been Updated With Image!');
                        return redirect()->back();
                    }
                }
            }

        } else {
            $name = $request->name;
            $project_data = [
                $project->user_id = $user->id,
                $project->category_id = $request->cat_name,
                $project->name = $name,
                $project->slug = Str::slug($name),
                $project->desc = $request->desc,

            ];
//            return $project_data;
            $data = $project->update($project_data);

            if($data) {
                showMessage('success', 'SUCCESS, Project Has Been Updated Successfully Done Without Image.');
                return redirect()->route('admin.project.index');

            } else {
                showMessage('danger','ERROR, Project has not been Updated Without Image!');
                return redirect()->back();
            }
        }

    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Project::find($id);

        unlink(public_path('uploads/images/project/'.$data->image));
//        Storage::disk('public')->delete('/images/project/'.$data->image);

        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Project Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = Project::find($id);
        $data->status = $status;
        $data->save();

    }


}
