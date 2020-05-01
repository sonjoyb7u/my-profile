<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class ClientController extends Controller
{
    public function index() {
        $data = Client::all();
//        return $data;

        return view('admin.client.index', compact('data'));
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store(ClientRequest $request)
    {
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
                    $data = [
                        'name' => $request->name,
                        'comment' => $request->comment,
                        'image' => $new_image_file,
                    ];
//                    return $data;
                    $data = Client::create($data);

                    if ($data) {
//                    $image_file->storeAs('/images/category/', $new_image_file);
                        $image_file->move('uploads/images/client/', $new_image_file);
                        showMessage('success', 'SUCCESS, Client Has Been Added Successfully Done.');
                        return redirect()->route('admin.client.index');

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
        $data = Client::find($id);
//        return $data;

        return view('admin.client.edit', compact('data'));
    }

    public function update (ClientRequest $request, $id) {
        $id = base64_decode($id);
        $client = Client::find($id);
//        return $client;
        $user = User::find(1);
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

//                    unlink(public_path('uploads/images/client/'.$client->image));
//                    Storage::disk('public')->delete('/images/blog-post/' . $post->image);
                    $client_data = [
                        $client->name = $request->name,
                        $client->comment = $request->comment,
                        $client->image = $new_image_file,
                    ];
//                    return $client_data;
                    $data = $client->update($client_data);
                    if($data) {
//                        $image_file->storeAs('/images/blog-pos/', $new_image_file);
                        $image_file->move('uploads/images/client/', $new_image_file);

                        showMessage('success', 'SUCCESS, Client Info Has Been Updated With Image Successfully Done.');
                        return redirect()->route('admin.client.index');

                    } else {
                        showMessage('danger','ERROR, Client Info has not been Updated With Image!');
                        return redirect()->back();
                    }
                }
            }

        } else {
            $client_data = [
                $client->name = $request->name,
                $client->comment = $request->comment,

            ];
//                    return $client_data;
            $data = $client->update($client_data);
            if($data) {
                showMessage('success', 'SUCCESS, Client Info Has Been Updated Without Image Successfully Done.');
                return redirect()->route('admin.client.index');

            } else {
                showMessage('danger','ERROR, Client Info has not been Updated Without Image!');
                return redirect()->route('admin.client.create');
            }

        }

    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Client::find($id);
//        return $data;

        unlink(public_path('uploads/images/client/'.$data->image));
//        Storage::disk('public')->delete('/images/blog-post/'.$data->image);

        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Client Info Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = Client::find($id);
        $data->status = $status;
        $data->save();

    }
}
