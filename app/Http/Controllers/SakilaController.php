<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SakilaModel;
// use App\Store;

class SakilaController extends Controller
{
	function customer(){
		$data['customer']=SakilaModel::limit(10)->orderBy('customer_id','asc')->paginate(10);
		return view('customer',$data);
	}

    public function create(Request $request)
    {
    	$customer = new SakilaModel();
        $customer->store_id=1;
		$customer->first_name = $request->first_name;
		$customer->last_name = $request->last_name;
		$customer->email = $request->email;
		$customer->address_id = $request->address_id;
		$customer->active = $request->active;
		$customer->save();
        return redirect()->route('customer')->with('alert-success','Berhasil Menambahkan Data!');
		
    }


    public function update(Request $request, $customer_id){
    	//cek isi customer id
    	// dd($customer_id);

    	$customer = Customer::where('customer_id',$customer_id)->first();
		$customer->store_id = $request->store_id;
		$customer->first_name = $request->first_name;
		$customer->last_name = $request->last_name;
		$customer->email = $request->email;
		$customer->address_id = $request->address_id;
		$customer->active = $request->active;
		$customer->save();

		return redirect('customer');

    }

    public function delete($customer_id){
    	Customer::where('customer_id',$customer_id)->delete();
    	return redirect('customer');
    }

    public function join_store_to_customer()
    {
    	//join pertama
    	$store = Store::join('customer','store.store_id','=','customer.store_id')
    	->where('store.store_id',1)
    	->limit(10)
    	->get();

    	dd($store);


    	//join ke dua, di set dulu function customer() pada model class Store 
    	$store = Store::where('store_id',1)->first();

    	dd($store->customer);

    }

}
