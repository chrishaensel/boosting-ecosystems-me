@extends ('layouts.main')


@section('country')
{{ ucfirst(trans($country)) }}
@stop
<!-- 
@section('scripts')
  
@stop -->

@section('welcome')
@foreach ($welcome as $welcomen)
{{ $welcomen->content }}
@endforeach
@stop

@section('comment_cards')


@foreach ($comment_cards as $comment)

<li>
	{{ $comment->comments }}
</li>
@endforeach


@stop


@section('city_map')


@foreach ($city as $cityname)

<h3>Map of {{ $cityname->content }}</h3>

<script src={{ '/js/' . $cityname->content . '-tour.js'  }} > </script>

<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#Map" aria-controls="Map" role="tab" data-toggle="tab">Map</a></li>
	<li role="presentation"><a href="#Infographics" aria-controls="Infographics" role="tab" data-toggle="tab">Infographics</a></li>
	<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Analysis</a></li>
	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Download</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="Map">


		<div class='map-overlay-container'>
		
		<ul id="nav-city" data-index ="0" data-max-index="25" class="list-inline ">
			<li  class="bg-white" id="prv-map">Previous</li>
			<li  class="bg-white" id="next-map">Next</li>
			<li>  </li>
		</ul>

			<div class='map-overlay'>


		

				<h2 id='location-title'></h2>
				<p id='location-description'></p>
				<p id= 'location-image'></p>

			</div>
		</div>

		<div id="map-beirut"></div> 


	</div>
	<div role="tabpanel" class="tab-pane" id="Infographics">bfdsaf.</div>
	<div role="tabpanel" class="tab-pane" id="messages">fdsaf.</div>
	<div role="tabpanel" class="tab-pane" id="settings">fdsf</div>
</div>

</div>



@endforeach



@stop