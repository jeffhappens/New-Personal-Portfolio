@if(Session::has('error'))
	<div class="alert alert-warning">
		<h4>Oops!</h4>
		<p>{{ Session::get('error') }}</p>
	</div>
@endif
@if(Session::has('success'))
	<div class="alert alert-success">
		<h4>Thanks!</h4>
		<p>{{ Session::get('success') }}</p>
	</div>
@endif