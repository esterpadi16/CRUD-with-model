<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
}
 
 	public function create(Request $request)
    {
    	
    	$c = new Customer();
    	$c->nim = $request->nim;
		$c->nama_mhs = $request->nama_mhs;
		$c->alamat = $request->alamat;
		$c->prodi = $request->prodi;
		$c->save();

    	return view('test_db');
    }

    public function update(Request $request, $nim){
    	//cek isi customer id
    	// dd($customer_id);

    	$c = Customer::where('nim',$nim)->first();
    	$c->nim = $request->nim;
		$c->nama_mhs = $request->nama_mhs;
		$c->alamat = $request->alamat;
		$c->prodi = $request->prodi;
		$c->save();

		return view('test_db');

    }

    public function delete($nim){
    	Customer::where('nim',$nim)->delete();

    	return view('test_db');
    }

}
