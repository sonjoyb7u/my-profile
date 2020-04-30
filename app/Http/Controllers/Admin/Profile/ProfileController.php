<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index() {
        $data = Profile::with('user')->get();
//        return $data;
        return view('admin.profile.index', compact('data'));
    }

    public function create() {
        return view('admin.profile.create');
    }

    public function store() {
        return view('admin.profile.store');
    }

    public function show($id) {
        $id = base64_decode($id);
        $data = Profile::with('user')->find($id);
//        return $data;
        return view('admin.profile.show', compact('data'));
    }

    public function edit($id) {
        $id = base64_decode($id);
        $data = Profile::with('user')->find($id);
//        return $data;
//        return $data->user['user_name'];

        return view('admin.profile.edit', compact('data'));
    }

    public function update(ProfileRequest $request, $id) {
        $id = base64_decode($id);
        $profile = Profile::with('user')->find($id);
//        return $profile;

//        $user_id = base64_decode($user_id);
        $user = User::with('profile')->find($id);
//        return $user;

        $image_file = $request->file('image');
//        return $image_file;

        if($image_file) {
            $image_file_ext = $image_file->getClientOriginalExtension();
            $new_image_file  = date("Ymdhis") . "_" . $profile->user['user_name'] . "_" . rand(9999, 99999) . "." . $image_file_ext;
//            return $new_image_file;
            $image_file_type = $image_file->getMimeType();
            if($image_file->isValid()) {
                if ($image_file_type === "image/jpeg" || $image_file_type === "image/png") {

                    unlink(public_path('uploads/images/profile/'.$profile->image));
//                    Storage::disk('public')->delete('/images/profile/' . $profile->image);

                    $first_name = $request->first_name;
                    $middle_name = $request->middle_name;
                    $last_name = $request->last_name;
                    $profile_data = [
                        $profile->first_name = $first_name,
                        $profile->middle_name = $middle_name,
                        $profile->last_name = $last_name,
                        $profile->age = $request->age,
                        $profile->gender = $request->gender,
                        $profile->image = $new_image_file,
                        $profile->phone = $request->phone,
                        $profile->address = $request->address,
                        $profile->bio = $request->bio,
                    ];
                    $user_data = [
                        $user->full_name = $first_name . ' ' . $middle_name . ' ' . $last_name,
                        $user->email = $request->email,
                        $user->user_name = $request->user_name,
                    ];
//                    return $profile_data;
//                    return $user_data;
                    $update_profile_data = $profile->update($profile_data);
                    $update_user_data = $user->update($user_data);

                    if($update_profile_data && $update_user_data) {
//                        $image_file->storeAs('/images/category/', $new_image_file);
                        $image_file->move('uploads/images/profile/', $new_image_file);

                        showMessage('success', 'SUCCESS, Profile & User Has Been Updated With Image Successfully Done.');
                        return redirect()->route('admin.profile.index');

                    } else {
                        showMessage('danger','ERROR, Profile & User has not been Updated With Image!');
                        return redirect()->back();
                    }
                }
            }

        } else {
            $first_name = $request->first_name;
            $middle_name = $request->middle_name;
            $last_name = $request->last_name;
            $profile_data = [
                $profile->first_name = $first_name,
                $profile->middle_name = $middle_name,
                $profile->last_name = $last_name,
                $profile->age = $request->age,
                $profile->gender = $request->gender,
                $profile->phone = $request->phone,
                $profile->address = $request->address,
                $profile->bio = $request->bio,
            ];
            $user_data = [
                $user->full_name = $first_name . ' ' . $middle_name . ' ' . $last_name,
                $user->email = $request->email,
                $user->user_name = $request->user_name,
            ];
//            return $profile_data;
//            return $user_data;
            $update_profile_data = $profile->update($profile_data);
            $update_user_data = $user->update($user_data);

            if($update_profile_data && $update_user_data) {
                showMessage('success', 'SUCCESS, Profile & User Has Been Updated Without Image Successfully Done.');
                return redirect()->route('admin.profile.index');

            } else {
                showMessage('danger','ERROR, Profile & User has not been Updated Without Image!');
                return redirect()->back();
            }
        }


    }
}
