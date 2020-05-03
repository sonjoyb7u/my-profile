<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
//         return $sliders;

        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderRequest $request)
    {
//        return $request->all();
        $user = User::find(1);
//        return $user;

        try {
            $image_file = $request->file('image');

            $image_file_ext = $image_file->getClientOriginalExtension();
            $new_image_file  = date("Ymdhis") ."_". $user->user_name . "_" . rand(9999, 99999) . "." . $image_file_ext;
//              return $new_image_file;
            $image_file_type = $image_file->getMimeType();
            if($image_file->isValid()) {
                if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {
                    $slider_data = [
                        'message' => $request->message,
                        'title' => $request->title,
                        'sub-title' => $request->sub_title,
                        'image' => $new_image_file,
                        'start' => $request->start,
                        'end' => $request->end,
                        'url' => $request->url,
                    ];
//                      return $slider_data;
                    $slider_create = Slider::create($slider_data);

                    if ($slider_create) {
//                    $image_file->storeAs('/images/category/', $new_image_file);
                        $image_file->move('uploads/images/slider/', $new_image_file);
                        showMessage('success', 'SUCCESS, Slider Has Been Added Successfully Done.');
                        return redirect()->route('admin.slider.index');

                    }

                }

            } else {
                showMessage('success', 'ERROR, Something Went Wrong.');
                return redirect()->back();
            }


        } catch (Exception $exception) {
            // return 'Error : ' . $e->getMessage();
            showMessage('danger', 'ERROR, ' . $exception->getMessage());
            return redirect()->back();
        }

    }

    public function edit($slider_id)
    {
        $slider_id = base64_decode($slider_id);
//        return 'Slider Id :' . $slider_id;

        $data = Slider::find($slider_id);
//        return $slider_detail;

        return view('admin.slider.edit', compact('data'));
    }

    public function update(SliderRequest $request, $slider_id)
    {
        $slider_id = base64_decode($slider_id);
//        return 'Slider Id :' . $slider_id;

        $slider_detail = Slider::find($slider_id);
//         return $slider_detail->image;
        $user = User::find(1);
//        return $user;

        try {
            $image_file = $request->file('image');

            if($image_file) {
                $image_file_ext = $image_file->getClientOriginalExtension();
                $new_image_file  = date("Ymdhis") . "_" . $user->user_name . "_" . rand(9999, 99999).".".$image_file_ext;
//            return $new_image_file;
                $image_file_type = $image_file->getMimeType();

                if($image_file->isValid()) {
                    if($image_file_type === "image/jpeg" || $image_file_type === "image/png") {

                        unlink(public_path('uploads/images/slider/'.$slider_detail->image));
//                    Storage::disk('public')->delete('/images/slider/'.$slider_detail->image);
                        $data = [
                            $slider_detail->message = $request->message,
                            $slider_detail->title = $request->title,
                            $slider_detail->sub_title = $request->sub_title,
                            $slider_detail->image = $new_image_file,
                            $slider_detail->start = $request->start,
                            $slider_detail->end = $request->end,
                            $slider_detail->url = $request->url,
                        ];
//                        return $data;
                        $slider_update_data = $slider_detail->update($data);
                        if ($slider_update_data) {
//                        $image_file->storeAs('/images/category/', $new_image_file);
                            $image_file->move('uploads/images/slider/', $new_image_file);

                            showMessage('success', 'SUCCESS, Slider Has Been Updated Successfully Done With Image.');
                            return redirect()->route('admin.slider.index');

                        } else {
                            showMessage('danger','ERROR, Slider has not been Updated With Image!');
                            return redirect()->back();
                        }

                    }

                }

            } else {
                $data = [
                    $slider_detail->message = $request->message,
                    $slider_detail->title = $request->title,
                    $slider_detail->sub_title = $request->sub_title,
                    $slider_detail->start = $request->start,
                    $slider_detail->end = $request->end,
                    $slider_detail->url = $request->url,
                ];
//                return $data;
                $slider_update_data = $slider_detail->update($data);
                if ($slider_update_data) {
                    showMessage('success', 'SUCCESS, Slider Has Been Updated Successfully Done Without Image.');
                    return redirect()->route('admin.slider.index');

                } else {
                    showMessage('danger','ERROR, Slider has not been Updated Without Image!');
                    return redirect()->back();
                }

            }

        } catch(Exception $exception) {
            // return 'Error : ' . $e->getMessage();
            showMessage('danger', 'ERROR, ' . $exception->getMessage());
            return redirect()->back();
        }


    }

    public function destroy($slider_id)
    {
        $slider_id = base64_decode($slider_id);
        $data = Slider::find($slider_id);
        unlink(public_path('uploads/images/slider/'.$data->image));
//        Storage::disk('public')->delete('/images/slider/'.$data->image);

        $slider_delete = $slider_detail->delete();
        if ($slider_delete) {
            showMessage('success', 'SUCCESS, Slider Has Been Deleted Successfully Done.');

            return redirect()->back();

        }

    }

    public function updateStatus($slider_id, $slider_status)
    {
        // return $slider_id . ' ' . $slider_status;

        $slider_detail = Slider::find($slider_id);
        $slider_detail->status = $slider_status;

        $slider_detail->save();

    }
}
