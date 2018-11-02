<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas = Customer::paginate(10);
        return view('index', compact('tugas'))->with ('i',(request()->input('page',1)-1)*10);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'store_id'=> 'required',
        'first_name'=>'required',
        'last_name'=> 'required',
        'email' => 'required',
        'address_id' =>'required'

      ]);
      $tugas = new Customer([
        'store_id' =>$request->get('store_id'),
        'first_name' => $request->get('first_name'),
        'last_name'=> $request->get('last_name'),
        'email'=> $request->get('email'),
        'address_id'=>$request->get('address_id')
      ]);
      $tugas->save();
      return redirect('/tugas')->with('success', 'Berhasil menambahkan Customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas = Customer::find($id);

        return view('edit', compact('tugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'store_id'=>'required',
        'first_name'=>'required',
        'last_name'=> 'required',
        'email' => 'required',
        'address_id'=>'required'
      ]);

      $tugas = Customer::find($id);
      $tugas->store_id = $request->get('store_id');
      $tugas->first_name = $request->get('first_name');
      $tugas->last_name = $request->get('last_name');
      $tugas->email = $request->get('email');
      $tugas->address_id = $request->get('address_id');
      $tugas->save();

      return redirect('/tugas')->with('success', 'Customer sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $tugas = Customer::find($id);
    $tugas->delete();

     return redirect('/tugas')->with('success', 'Data berhasil Dihapus');
    }
}
