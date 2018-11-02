<div class="form-group">
	<div class="form-line">
		<label color="black">{{$placeholder}}</label>
		<input type="{{$type}}" class="form-control" name="{{strtolower(str_replace(' ','_',$placeholder))}}" placeholder="{{$placeholder}}">
	</div>
</div>