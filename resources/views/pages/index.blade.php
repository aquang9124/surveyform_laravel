@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row">
		<section class="form-wrapper">
			<form action="/submit" method="post">
				<label for="name">Your Name:</label>
				<input type="text" name="name" id="name">
				<label for="location">Dojo Location:</label>
				<select class="select-width" name="location" id="location">
					<option value="Mountain View">Mountain View</option>
					<option value="San Jose">San Jose</option>
					<option value="Burbank">Burbank</option>
					<option value="Seattle">Seattle</option>
				</select>
				<label for="language">Your Favorite Language:</label>
				<select class="select-width" name="language" id="language">
					<option value="Javascript">Javascript</option>
					<option value="PHP">PHP</option>
					<option value="Python">Python</option>
					<option value="Ruby">Ruby</option>
				</select>
				<label for="description">Comment (optional):</label>
				<textarea name="description" id="description" class="input-width"></textarea>
				<button class="submit-btn" type="submit">Submit</button>
			</form>
		</section>
	</div>
</div>
@stop