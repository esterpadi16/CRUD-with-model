@extends('layouts.main')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
                        <div class="header">
                            <h1>
                                CUSTOMER TABLES
                                &nbsp;<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#input">INPUT</button> 
                                </div>
                            </h1>
                            <div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>OPTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $data)
                                    	<tr>
                                    		<td>{{$data->first_name}}</td>
                                    		<td>{{$data->last_name}}</td>
                                    		<td>{{$data->email}}</td>


                                            <td> 
                                                
                                                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#edit">EDIT</button> 
                                                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#hapus">HAPUS</button>

                                                <!-- Input modal -->
                                                <div class="modal fade" id="input" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">Halaman Input</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{Route('create')}}" method="GET" >
                                                                                                                              
                                                                <label for="last_name">First Name</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="first_name" class="form-control" placeholder="Enter your first name">
                                                                        </div>
                                                                    </div>

                                                                <label for="last_name">Last Name</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="last_name" class="form-control" placeholder="Enter your last name">
                                                                        </div>
                                                                    </div>

                                                                <label for="email_address">Email Address</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="email_address" class="form-control" placeholder="Enter your email address">
                                                                        </div>
                                                                    </div>

                                                                <label for="address_id">Address Id</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="address_id" class="form-control" placeholder="Enter your email address">
                                                                        </div>

                                                                        </div>

                                                                <label for="active">Active</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="active" class="form-control" placeholder="Enter your active">
                                                                            </div>
                                                                        </div>    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <!-- Hapus MOdal -->
                                                <div class="modal fade" id="hapus" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">Halaman Input</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p> Apakah anda yakin ingin menghapus?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{route('delete')}}" method="GET">
                                                                <button type="submit" class="btn btn-link waves-effect">YES</button>
                                                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">NO</button>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <!-- Edit modal -->
                                                <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">Halaman Input</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action = "{{ route('update') }}" method="GET">
                                                                
                                                                <label for="last_name">First Name</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name=first_name" class="form-control" placeholder="Enter your first name">
                                                                        </div>
                                                                    </div>

                                                                <label for="last_name">Last Name</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="last_name" class="form-control" placeholder="Enter your last name">
                                                                        </div>
                                                                    </div>

                                                                <label for="email_address">Email Address</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="email_address" class="form-control" placeholder="Enter your email address">
                                                                        </div>
                                                                    </div>

                                                                <label for="email_address">Address Id</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="address_id" class="form-control" placeholder="Enter your email address">
                                                                        </div>

                                                                        </div>

                                                                <label for="active">Active</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name ="active" class="form-control" placeholder="Enter your active">
                                                                            </div>
                                                                        </div>    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                    	</tr>
                                    @endforeach
                                    
                                </tbody>
                                <div class="d-block col-12"> 
                                    {{$customer->Links()}}
                                    </div>
                            </table>
                        </div>
                    </div>
		</div>
	</div>
@endsection
