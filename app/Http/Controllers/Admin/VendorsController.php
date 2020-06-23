<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorsController extends Controller
{


    public function index()
    {
         $vendors = Vendor::selection()-> paginate(PAGINATION_COUNT);
         return view('admin.vendors.index',compact('vendors'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function changeStatus()
    {

    }


}
