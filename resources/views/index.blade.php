@extends('layouts.main')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

 <div class="header">
    <h1>
          CUSTOMER TABLES
            &nbsp;
          </div>
        </h1>
  <div>

<a href="{{ route('tugas.create') }}" class="btn btn-primary"> Tambah Data</a>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Stock Name</td>
          <td>Stock Price</td>
          <td>Stock Quantity</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
  <div class="col-8">
        @foreach($tugas as $tugas)
        <tr>
            <td>{{$tugas->first_name}}</td>
            <td>{{$tugas->last_name}}</td>
            <td>{{$tugas->email}}</td>
            <td>{{$tugas->address_id}}</td>
            <td><a href="{{ route('tugas.edit',$tugas->customer_id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('tugas.destroy', $tugas->customer_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yakin Menghapus?') ">Delete</button>

                </form>
            </td>
        </tr>

        @endforeach
   <div class="d-block col-5"> 
    </div>
</div>
@endsection
</tbody>
</table>