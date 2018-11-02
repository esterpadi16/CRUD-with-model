<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;

class HelloController extends Controller
{
    public function index()
    {
    	$data['nama'] = 'Lorem Ipsum 2';
    	
    	// call welcome.blade.php
    	return view('hello',$data);
    }

    function test_db(){
    	// query builder
    	// $data['mahasiswa'] = DB::table('tbl_mahasiswa')->get();

    	// eloquent
    	// $data['mahasiswa'] = Mahasiswa::all();

    	$data['customer']	= Customer::limit(10)->get();

    	return view('test_db',$data);
    }

    function customer(){
    	$data['customer'] = Customer::limit(10)->get();
    	$data['customer'] = Customer::where('customer_id',10)->first();

    	dd($data['mahasiswa_x']);
    	// dd($data['customer']);
    	return view('test_db', $data);
    }
}
