<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create() {
        return view('admin.contact.create');
    }

    public function store(ContactRequest $request) {
        return $request->all();
    }

}
