@extends('layouts.main')

@section('blank','active')

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="card">
                        <div class="header">
                            <h2>LINE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                            <canvas id="line_chart" height="193" width="386" style="display: block; width: 386px; height: 193px;"></canvas>
                        </div>
                    </div>

                    <form id="validate">
                    <div class="card">
                        <div class="header">
                            <h2>INPUT</h2>
                            @component('components.input',['type' => 'text', 'placeholder'=>'Nama Lengkap'])@endcomponent
                            
                            @component('components.input',['type' => 'text', 'placeholder'=>'Nama Orang Tua'])@endcomponent
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
		</div>
	</div>
@endsection

@section('css')
	<style type="text/css">
		.card .header h2 {
    margin: 0;
    font-size: 18px;
    font-weight: normal;
    color: #e22222;
}
	</style>
@endsection

@section('js')
 <!-- Chart Plugins Js -->
    <!-- <script src="{{url('/')}}/admin_bsb/plugins/chartjs/Chart.bundle.js"></script>
	<script src="{{url('/')}}/admin_bsb/js/pages/charts/chartjs.js"></script> -->
	@component('components.validate',['id'=>'validate'])
		@slot('rules')
			 'nama_lengkap': {
                 required: true
             },
             'nama_orang_tua': {
                 required: true
             }
		@endslot
	@endcomponent
@endsection