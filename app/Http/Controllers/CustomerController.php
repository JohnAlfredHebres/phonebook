<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        //return 'Customers';

        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);
    }
}
