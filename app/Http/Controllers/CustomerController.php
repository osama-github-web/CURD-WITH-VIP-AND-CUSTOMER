<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('curd.customer.index');
    }

    public function store(Request $request){
        // $validated = $request->validate([
        //     'name' => 'required|max:100',
        //     'email' => 'required|unique:customers',
        //     'phone' => 'required|max:20'
        // ]);

        // $customer = new Customer;
        // $customer->name = $request->name;
        // $customer->email = $request->email;
        // $customer->phone = $request->phone;
        // $customer->save();

        Customer::create($request->all());
        return redirect()->route('customer/all');
    }

    public function all(){        
        $customers = Customer::all();
        return view('curd.customer.all',compact('customers'));
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('curd.customer.edit',compact('customer'));
    }

    public function update(Request $request){
        Customer::find($request->id)->update($request->except('_token',"id"));
        return redirect()->route('customer/all');
    }

    public function destroy($id){
        Customer::find($id)->delete();
        return redirect()->route('customer/all');
    }
}
