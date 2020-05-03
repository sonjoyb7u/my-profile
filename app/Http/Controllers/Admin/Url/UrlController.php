<?php

namespace App\Http\Controllers\Admin\Url;

use App\Http\Controllers\Controller;
use App\Http\Requests\UrlRequest;
use App\Models\Url;
use Illuminate\Http\Request;
use Exception;

class UrlController extends Controller
{
    public function index()
    {
        $data = Url::get();
//        return $data;

        return view('admin.url.index', compact('data'));
    }

    public function create()
    {
        return view('admin.url.create');
    }

    public function store(UrlRequest $request) {
//        return $request->except('_token');

        try {
            $data = [
                'name' => $request->name,
                'url_link' => $request->url_link,
            ];
//            return $data;

            $data = Skill::create($data);
            if ($data) {
                showMessage('success', 'SUCCESS, Url-Link Has Been Added Successfully Done.');
                return redirect()->route('admin.url-link.index');
            } else {
                showMessage('danger', 'ERROR, Url-Link Has Not Been Added!');
                return redirect()->route('admin.url-link.create');
            }

        } catch (Exception $exception) {
            showMessage('danger', 'ERROR, ' . $exception->getMessage());
            return redirect()->back();
        }

    }

    public function edit($id) {
        $id = base64_decode($id);
        $data = Url::find($id);
//        return $data;

        return view('admin.url.edit', compact('data'));
    }

    public function update(UrlRequest $request, $id) {
        $id = base64_decode($id);

        $url = Url::find($id);

        $data = [
            $url->name = $request->name,
            $url->url_link = $request->url_link,

        ];
//      return $skill_data;
        $data = $url->update($data);
        if($data) {
            showMessage('success', 'SUCCESS, Url-Link Has Been Updated Successfully Done.');
            return redirect()->route('admin.url-link.index');

        } else {
            showMessage('danger','ERROR, Url-Link has not been Updated!');
            return redirect()->back();
        }


    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Url::find($id);
        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Url-Link Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
        return $id . ' ' . $status;

        $data = Url::find($id);
        $data->status = $status;
        $data->save();

    }

}
