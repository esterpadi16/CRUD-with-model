@extends('layouts.main')

@section('chart','active')

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="card">
                        <div class="header">
                            <h2>REAL-TIME CHART</h2>
                            <div class="pull-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">REAL TIME</span>
                                    <label>OFF<input type="checkbox" id="realtime" checked=""><span class="lever switch-col-cyan"></span>ON</label>
                                </div>
                            </div>
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
                        <div class="body">
                            <div id="real_time_chart" class="flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="857" height="320" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 857px; height: 320px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 22px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 101px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 183px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 265px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 347px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 430px; text-align: center;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 512px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 594px; text-align: center;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 676px; text-align: center;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 758px; text-align: center;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 303px; left: 838px; text-align: center;">100</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 290px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 232px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 174px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 116px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 58px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="857" height="320" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 857px; height: 320px;"></canvas></div>
                        </div>
                    </div>
		</div>
	</div>
@endsection

@section('js')
    <script src="{{url('/')}}/admin_bsb/plugins/flot-charts/jquery.flot.js"></script>
    <script src="{{url('/')}}/admin_bsb/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="{{url('/')}}/admin_bsb/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="{{url('/')}}/admin_bsb/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="{{url('/')}}/admin_bsb/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Demo Js -->
    <script src="{{url('/')}}/admin_bsb/js/admin.js"></script>
    <script src="{{url('/')}}/admin_bsb/js/pages/charts/flot.js"></script>

    <script src="{{url('/')}}/admin_bsb/js/demo.js"></script>
@endsection