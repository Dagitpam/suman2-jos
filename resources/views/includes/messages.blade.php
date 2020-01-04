<div class="container">
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
			<strong><i class="fa fa-check-circle"></i> <i style="font-size: 10px;">{{ $message }}</i></strong>
	</div>
	@endif
	
	
	@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
			<strong><i class="fas fa-exclamation-circle"></i> <i style="font-size: 12px;">{{ $message }}</i></strong>
	</div>
	@endif
	
	
	@if ($message = Session::get('warning'))
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif
	
	
	@if ($message = Session::get('info'))
	<div class="alert alert-info alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong><i class="fa fa-info-circle"></i> <i style="font-size: 12px;">{{ $message }}</i></strong>
	</div>
	@endif
	
	
	@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>	
				{{$error}}
			</div>
		@endforeach
	@endif
</div>

<script>
	$(document).ready(function(){
			$(".alert").slideDown(300).delay(5000).slideUp(300);
	});
</script>

