@extends('layouts.main')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
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
      <form method="post" action="{{ route('tugas.store') }}">
          <div class="form-group">
              @csrf

              <label for="name">Store ID:</label>
              <input type="text" class="form-control" name="store_id" placeholder="Input your store id">
          </div>

          <div class="form-group">
              <label for="name">First Name:</label>
              <input type="text" class="form-control" name="first_name" placeholder="Input your first name " />
          </div>
          <div class="form-group">
              <label for="price">Last Name :</label>
              <input type="text" class="form-control" name="last_name" placeholder="input your last name" />
          </div>
          <div class="form-group">
              <label for="quantity">Email:</label>
              <input type="text" class="form-control" name="email" placeholder="Input your email">
          </div>
          <div class="form-group">
              <label for="quantity">Address Id:</label>
              <input type="text" class="form-control" name="address_id" placeholder="input yor address id" />
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
  </div>
</div>
@endsection