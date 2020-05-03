<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class ServiceController extends Controller
{
    public function index() {
        $data = Service::get();
//        return $data;

        return view('admin.service.index', compact('data'));
    }

    public function create() {
        return view('admin.service.create');
    }

    public function store(ServiceRequest $request) {
//        return $request->except('_token');
        $user = User::find(1);
//        return $user;

        try {
            $image_file = $request->file('image');
//            return $image_file;

            if($image_file) {
                $image_file_ext = $image_file->getClientOriginalExtension();
                $new_image_file  = date("Ymdhis") . "_" . $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//            return $new_image_file;
                $image_file_type = $image_file->getMimeType();
                if($image_file->isValid()) {
                    if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {

                        $data = [
                            'title' => $request->title,
                            'sub_title' => $request->sub_title,
                            'icon_name' => $request->icon_name,
                            'image' => $new_image_file ,
                        ];
//                      return $data;
                        $data = Service::create($data);
                        if($data) {
//                        $image_file->storeAs('/images/category/', $new_image_file);
                            $image_file->move('uploads/images/service/', $new_image_file);

                            showMessage('success', 'SUCCESS, Service Has Been Added  Successfully Done With Image.');
                            return redirect()->route('admin.service.index');

                        } else {
                            showMessage('danger','ERROR, Service has not been Updated With Image!');
                            return redirect()->back();
                        }
                    }
                }

            } else {
                $data = [
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'icon_name' => $request->icon_name,

                ];
//                return $data;
                $data = Service::create($data);
                if($data) {
                    showMessage('success', 'SUCCESS, Service Has Been Added  Successfully Done Without Image.');
                    return redirect()->route('admin.service.index');

                } else {
                    showMessage('danger','ERROR, Service has not been Added Without Image!');
                    return redirect()->back();
                }
            }

        } catch (Exception $e) {
            showMessage('danger', 'ERROR, ' . $e->getMessage());
            return redirect()->back();
        }

    }

    public function edit($id) {
        $id = base64_decode($id);
        $data = Service::find($id);
//        return $data;

        return view('admin.service.edit', compact('data'));
    }

    public function update(ServiceRequest $request, $id) {
        $id = base64_decode($id);
        $skill = Service::find($id);
//        return $skill;
        $user = User::find(1);
//        return $user;

        try {
            $image_file = $request->file('image');
//            return $image_file;

            if($image_file) {
                $image_file_ext = $image_file->getClientOriginalExtension();
                $new_image_file  = date("Ymdhis") . "_" . $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//            return $new_image_file;
                $image_file_type = $image_file->getMimeType();
                if($image_file->isValid()) {
                    if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {
                        unlink(public_path('uploads/images/service/'.$skill->image));
//                    Storage::disk('public')->delete('/images/service/' . $profile->image);
                        $data = [
                            $skill->title = $request->title,
                            $skill->sub_title = $request->sub_title,
                            $skill->icon_name = $request->icon_name,
                            $skill->image = $new_image_file ,
                        ];
//                      return $data;
                        $data = $skill->update($data);
                        if($data) {
//                        $image_file->storeAs('/images/service/', $new_image_file);
                            $image_file->move('uploads/images/service/', $new_image_file);

                            showMessage('success', 'SUCCESS, Service Has Been Updated Successfully Done With Image.');
                            return redirect()->route('admin.service.index');

                        } else {
                            showMessage('danger','ERROR, Service has not been Updated With Image!');
                            return redirect()->back();
                        }
                    }
                }

            } else {
                $data = [
                    $skill->title = $request->title,
                    $skill->sub_title = $request->sub_title,
                    $skill->icon_name = $request->icon_name,

                ];
//                return $data;
                $data = $skill->update($data);
                if($data) {
                    showMessage('success', 'SUCCESS, Service Has Been Updated  Successfully Done Without Image.');
                    return redirect()->route('admin.service.index');

                } else {
                    showMessage('danger','ERROR, Service has not been Updated Without Image!');
                    return redirect()->back();
                }
            }

        } catch (Exception $e) {
            showMessage('danger', 'ERROR, ' . $e->getMessage());
            return redirect()->back();
        }


    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Service::find($id);
        unlink(public_path('uploads/images/service/'.$data->image));
//        Storage::disk('public')->delete('/images/service/'.$data->image);

        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Service Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = Service::find($id);
        $data->status = $status;
        $data->save();

    }
}
