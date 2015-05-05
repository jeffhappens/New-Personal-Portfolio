@extends('layouts.master')
@section('content')

<!-- Handlebars Template -->
<div class="template">
</div>


<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Some Headline</h2>			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
			<div class="projects">
				<h3>Recent Projects</h3>
				@foreach($projects as $project)
					<div class="project" data-projectid="{{ $project->id }}">
						<h4>{{ $project->title }}</h4>
						<p>{{ $project->summary }}</p>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-6">
			<h3>Get In Touch</h3>
			@include('includes.alerts')
			<form action="/" role="form" method="post" data-parsley-validate>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="name">Name <span>(required)</span></label>
					<input type="text" required name="name" class="form-control" placeholder="Your Name" />
				</div>
				<div class="form-group">
					<label for="email">Email <span>(required)</span></label>
					<input type="text" required data-parsley-type="email" name="email" class="form-control" placeholder="Your Email Address" />
				</div>
				<div class="form-group">
					<label for="message">Message <span>(required)</span></label>
					<textarea name="message" required class="form-control" placeholder="And Your Message"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-block btn-primary">Send Message</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop