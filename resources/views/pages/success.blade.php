@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row">
		<section class="info-wrapper">
			<h1 class="title">Submitted Information</h1>
			<p>Name: {{ $info['name'] }}</p>
			<p>Location: {{ $info['location'] }}</p>
			<p>Language: {{ $info['language'] }}</p>
			<p>Comment: {{ $info['description'] }}</p>
			<a href="/"><button>Go Back</button></a>
		</section>
	</div>
</div>
@stop