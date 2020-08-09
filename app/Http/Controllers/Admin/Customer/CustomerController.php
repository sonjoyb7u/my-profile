<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('customer');
    }

    /**
     * @param  Request  $req
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $req) {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
        ], $messages = [
            'name.required' => 'The Name is required!',
            'email.required' => 'The Email is required!',
            'phone.required' => 'The Phone is required!',
            'address.required' => 'The Address is required!',
            'password.required' => 'The Password is required!',
        ]);

        Customer::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address' => $req->address,
            'password' => Hash::make($req->password),
        ]);

    }

    public function read() {
        $customers = Customer::latest()->get();
        return $customers;
    }

    public function edit($id) {
        $customer = Customer::findorFail($id);
        return view('customer-edit', compact('customer'));
    }

    public function update(Request $req, $id) {
        Customer::findorFail($id)->update($req->all());
        return "Data Updated Success.";
    }

}
