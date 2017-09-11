@extends('layouts.app')

@section('content')
	<h2> The legendary <b class="text" data-index="is">{{$data['is']->value}}</b> </h2>
	<div class="">
		The legendary beast is <span  class="text" data-index="ext">{{$data['ext']->value}}</span> <b class="text" data-index="is">{{$data['is']->value}}</b> that has <b class="text" data-index="has">{{$data['has']->value}}</b> and is known for <b class="text" data-index="fame">{{$data['fame']->value}}</b>.<br>
	</div>


	<button type="button" name="button" class="generar">Generar</button>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="js/randomEncounters.js"></script>
@endsection
