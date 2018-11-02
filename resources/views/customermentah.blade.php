@extends('layouts.main')

@section('content')
	<h3>TABEL CUSTOMER</h3>
	<table class="table">
		<tr>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>Email</th>
		</tr>
		@foreach($customer as $data)
		<tr>
			<td>{{$data->first_name}}</td>
			<td>{{$data->last_name}}</td>
			<td>{{$data->email}}</td>
		</tr>
		@endforeach
	</table>
@endsection