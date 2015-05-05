<header>
    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-xs-12">
    			@foreach($general as $gen)
    			<h2>
                    <a href="/">
    				    {{ $gen->name }}
    				    <span>// {{ $gen->title }}</span>
                    </a>
    			</h2>
    			@endforeach
    		</div>
            <div class="col-md-6">
                <ul class="list-inline pull-right">
                    @foreach($general as $gen)
                    <li><a href="{{ $gen->facebook_url }}"><i class="fa fa-2x fa-facebook"></i></a></li>
                    <li><a href="{{ $gen->twitter_url }}"><i class="fa fa-2x fa-twitter"></i></a></li>
                    <li><a href="{{ $gen->github_url }}"><i class="fa fa-2x fa-github"></i></a></li>
                    <li><a href="{{ $gen->linkedin_url }}"><i class="fa fa-2x fa-linkedin"></i></a></li>
                    @endforeach
                </ul>
            </div>
    	</div>
    </div>
</header>