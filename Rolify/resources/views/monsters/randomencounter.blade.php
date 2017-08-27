@extends('layouts.app')
@section('content')

	@foreach ($encounters as $key => $encounter)
		<div class="encounters">

			<h3>Encounter {{$key+1}}:</h3>
			<p class="text" data-index="{{$key}}">{{$encounter->string}}</p>
		</div>
	@endforeach

	<button type="button" name="button" class="generateEncounter">Generar</button>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="js/randomEncounters.js"></script>
@endsection
