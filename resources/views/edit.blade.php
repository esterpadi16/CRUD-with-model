@extends('layouts.main')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tugas.update', $tugas->customer_id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Store Id:</label>
          <input type="text" class="form-control" name="store_id" value={{ $tugas->store_id }} />
        </div>
        <div class="form-group">
          <label for="price">First Name :</label>
          <input type="text" class="form-control" name="first_name" value={{ $tugas->first_name }} />
        </div>
        <div class="form-group">
          <label for="quantity">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value={{ $tugas->last_name }} />
        </div>

        <div class="form-group">
          <label for="quantity"> Email :</label>
          <input type="text" class="form-control" name="email" value={{ $tugas->email }} />
        </div>

        <div class="form-group">
          <label for="quantity"> Address Id  :</label>
          <input type="text" class="form-control" name="address_id" value={{ $tugas-> address_id }} />
        </div>

        <button type="submit" class="btn btn-primary">Ubah</button>
      </form>
  </div>
</div>
@endsection